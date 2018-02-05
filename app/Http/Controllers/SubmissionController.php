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
        Submission::where('id',$request->submissionid)->update(['payment_proof'=>$filename,'payment_status'=>'Verifying']);
        session(['message' => '<strong>Payment Proof Submitted Successfully!</strong> Our team will verify your payment and update payment status if valid. Thank you for your patience']);
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
            'image_files' => 'required',
            'thumbnail_file' => 'required',
            'url' => 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/|nullable',
            'video_url' => 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/|nullable'
        ], [
            'categories.max' => 'You cannot select more than 3 categories'
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
        if($request->member1){
            $submission->team_member1 = $request->member1;
        }
        if($request->member2){
            $submission->team_member2 = $request->member2;
        }
        if($request->member3){
            $submission->team_member3 = $request->member3;
        }
        if($request->member4){
            $submission->team_member4 = $request->member4;
        }
        $submission->payment_method = $request->payment_method;

        $submission->save();

        $email = new SuccessfulSubmission($submission);
        Mail::to(Auth::user()->email)->send($email);

        session(['message'=>'<strong>Congratulations!</strong> You have successfully submitted your entry. Please check your email for further instructions regarding the payment and what happens next']);
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
            session(['message'=>'<strong>Entry deleted successfully!</strong> All the files and data associated with the entry has been removed.']);
            return response()->json('success',200);
        } else {
            return response()->json('Unauthorized Command', 400);
        }
    }

}