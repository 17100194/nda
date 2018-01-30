<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/sponsors', function (){
    return view('sponsors');
});

Route::get('/jury', function (){
    return view('jury');
});

Route::get('/why-enter', function (){
    return view('why-enter');
});

Route::get('/pricing-timeline', function (){
    return view('pricing-timeline');
});

Route::get('/how-to-enter', function (){
    return view('how-to-enter');
});

Route::get('/eligibility-criteria', function (){
    return view('eligibility-criteria');
});

Route::get('/category/{category}', function (\Illuminate\Http\Request $request){
    return view('category.'.$request->category);
});

Route::get('/submissions', 'SubmissionController@index')->middleware('auth');

Route::get('/submissions/professional', function (){
    return view('submission.create');
})->middleware('auth');

Route::get('/submissions/student', function (){
    return view('submission.create');
})->middleware('auth');

Route::post('/upload-images', 'SubmissionController@uploadImages')->middleware('auth');
Route::post('/upload-pdf', 'SubmissionController@uploadPDF')->middleware('auth');
Route::post('/upload-thumbnail', 'SubmissionController@uploadThumbnail')->middleware('auth');
Route::post('/upload-payment', 'SubmissionController@uploadPayment')->middleware('auth');

Route::get('/remove-file', 'SubmissionController@removeFile')->middleware('auth');

Route::get('/remove-payment', 'SubmissionController@removePaymentProof')->middleware('auth');

Route::post('/submit-entry', 'SubmissionController@submitEntry')->middleware('auth');

Route::get('/delete-entry', 'SubmissionController@deleteEntry')->middleware('auth');

Auth::routes();

Route::get('register/verify/{token}', 'Auth\RegisterController@verify');
