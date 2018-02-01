<?php
/**
 * Created by PhpStorm.
 * User: Fahad
 * Date: 1/17/2018
 * Time: 1:32 PM
 */

namespace App\Http\Controllers;

use App\Mail\SuccessfulSubmission;
use App\Submission;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Validator;
use App\Http\Controllers\Controller;

class SubmissionController extends Controller
{
    public function index(){
        $submissions = User::find(Auth::id())->submissions;
        return view('submission.index', ['submissions'=>$submissions]);
    }

    public function uploadImages(Request $request){
        $file = $request->file('image_files');
        $validation = Validator::make($request->all(),['image_files'=>'required|image']);
        if($validation->fails()){
            return response()->json($validation->errors()->first(),400);
        }
        $filename = str_random('10').'_'.$file->getClientOriginalName();
        $file->storeAs('temp', $filename);
        return response()->json($filename, 200);
    }

    public function uploadPDF(Request $request){
        $file = $request->file('pdf_file');
        $validation = Validator::make($request->all(),['pdf_file'=>'required|mimes:pdf']);
        if($validation->fails()){
            return response()->json($validation->errors()->first(),400);
        }
        $filename = str_random('10').'_'.$file->getClientOriginalName();
        $file->storeAs('temp', $filename);
        return response()->json($filename, 200);
    }

    public function uploadThumbnail(Request $request){
        $file = $request->file('thumbnail_file');
        $validation = Validator::make($request->all(),['thumbnail_file'=>'required|image']);
        if($validation->fails()){
            return response()->json($validation->errors()->first(),400);
        }
        $filename = str_random('10').'_'.$file->getClientOriginalName();
        $file->storeAs('temp', $filename);
        return response()->json($filename, 200);
    }

    public function uploadPayment(Request $request){
        $file = $request->file('payment_file');
        $validation = Validator::make($request->all(),['payment_file'=>'required|image']);
        if($validation->fails()){
            return response()->json($validation->errors()->first(),400);
        }
        $filename = str_random('10').'_'.$file->getClientOriginalName();
        $file->storeAs('public/uploads', $filename);
        Submission::where('id',$request->submissionid)->update(['payment_proof'=>$filename,'payment_status'=>'Submitted']);
        return response()->json($filename, 200);
    }

    public function removeFile(Request $request){
        $filename = $request->filename;
        Storage::delete('temp/'.$filename);
        return response()->json('File Removed Successfully',200);
    }

    public function removePaymentProof(Request $request){
        $filename = $request->filename;
        Storage::delete('public/uploads/'.$filename);
        Submission::where('payment_proof',$filename)->update(['payment_proof'=>null,'payment_status'=>'Not Paid']);
        return response()->json('File Removed Successfully',200);
    }

    public function submitEntry(Request $request){;
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'by' => 'required',
            'overview' => 'required',
            'details' => 'required',
            'categories' => 'required|array|max:3',
            'team' => 'max:800',
            'image_files' => 'required',
            'thumbnail_file' => 'required',
            'pdf_file' => 'required|sometimes',
        ]);

        if ($validator->fails()){
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }
        $submission = new Submission;
        $submission->user_id = Auth::id();
        $submission->type = $request->type;
        $submission->title = $request->title;
        $submission->by = $request->by;
        if ($request->for){
            $submission->for = $request->for;
        }
        $submission->project_overview = $request->overview;
        $submission->project_details = $request->details;
        $submission->categories = implode(',',$request->categories);
        if ($request->url){
            $submission->project_url = $request->url;
        }
        if ($request->video_url){
            $submission->project_video = $request->video_url;
        }
        if ($request->pdf_file){
            Storage::move('temp/'.$request->pdf_file,'public/uploads/'.$request->pdf_file);
            $submission->project_pdf = $request->pdf_file;
        }
        $images = explode(',',$request->image_files);
        foreach ($images as $index=>$image){
            Storage::move('temp/'.$image,'public/uploads/'.$image);
            $submission->fill(['image_'.(string)((int)$index+1) => $image]);
        }
        Storage::move('temp/'.$request->thumbnail_file,'public/uploads/'.$request->thumbnail_file);
        $submission->thumbnail = $request->thumbnail_file;
        $submission->team = $request->team;

        $submission->save();

        $email = new SuccessfulSubmission($submission);
        Mail::to(Auth::user()->email)->send($email);

        session(['message'=>'<strong>Submission Successfull!</strong> Our team will analyse your entry and update you of the results via email so keep checking your email for further instructions']);
        return response()->json('success', 200);
    }

    function deleteEntry(Request $request){
        $submission = Submission::find($request->submissionid);
        if ($submission->author->id === Auth::id() && $submission->payment_status === 'Not Paid'){
            Storage::delete('public/uploads/'.$submission->image_1);
            if ($submission->image_2){
                Storage::delete('public/uploads/'.$submission->image_2);
            }
            if ($submission->image_3){
                Storage::delete('public/uploads/'.$submission->image_3);
            }
            if ($submission->image_4){
                Storage::delete('public/uploads/'.$submission->image_4);
            }
            if ($submission->image_5){
                Storage::delete('public/uploads/'.$submission->image_5);
            }
            if ($submission->image_6){
                Storage::delete('public/uploads/'.$submission->image_6);
            }
            if ($submission->image_7){
                Storage::delete('public/uploads/'.$submission->image_7);
            }
            if ($submission->image_8){
                Storage::delete('public/uploads/'.$submission->image_8);
            }
            if ($submission->image_9){
                Storage::delete('public/uploads/'.$submission->image_9);
            }
            if ($submission->image_10){
                Storage::delete('public/uploads/'.$submission->image_10);
            }
            if ($submission->project_pdf){
                Storage::delete('public/uploads/'.$submission->project_pdf);
            }
            Storage::delete('public/uploads/'.$submission->thumbnail);
            Submission::where('id', $request->submissionid)->delete();
            session(['message'=>'<strong>Entry deleted successfully!</strong> All your files and data associated with the entry has been removed.']);
            return response()->json('success',200);
        } else {
            return response()->json('Unauthorized Command', 400);
        }
    }

}