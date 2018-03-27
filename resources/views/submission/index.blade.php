@extends('layouts.app')

@section('content')
    <section class="flat-row">
        <div class="container">
            @if(session()->has('message'))
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <i class="fa fa-check-circle"></i> <?php echo session()->pull('message') ?>
                </div>
            @endif
            <div class="row">
                <div class="col-md-6">
                    <div class="title-section text-center">
                        <h1 class="title">Get Started</h1>
                    </div>
                    <div class="divider"></div>
                    <div class="title-section text-center">
                        <h2>Normal Pricing<br>(Deadline: 28th March 2018)</h2>
                        <p class="sub-title"><span style="text-decoration: underline; font-weight: bold">Student:</span> 1500 PKR / Submission<div class="divider h10"></div><span style="text-decoration: underline; font-weight: bold">Professional:</span> 3000 PKR / Submission</p>
                    </div>
                    <div class="divider"></div>
                    <div class="text-center">
                        <a href="{{url('/submissions/professional')}}" class="flat-button color-white">Make a Professional Entry</a> <span>OR</span> <a href="{{url('/submissions/student')}}" class="flat-button color-white">Make a Student Entry</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center">
                        <h2>Instruction Manual</h2>
                        <a href="{{asset('files/manual.pdf')}}" download target="_blank"><img src="{{asset('images/manual.jpg')}}" class="center-block" width="200"></a>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="title-section line bg-gray after-width158">
                <div class="container-fluid2">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="title" style="font-size: 30px;">Eligibility & Criteria</h2>
                            <br>
                            <div class="col-md-6">
                                <p class="fontsize17">1. The awards are open to students and professionals of all design disciplines.</p>
                                <br>
                                <p class="fontsize17">2. Student level includes individuals enrolled in a full time Bachelors/ Undergraduate, Masters/Undergraduate and Ph.D programmes nationwide</p>
                                <br>
                                <p class="fontsize17">3. Any student graduated within the previous four months from the date of submission may also submit their project in the student category</p>
                                <br>
                                <p class="fontsize17">4. Team level/individual participation is permitted. The maximum number of team members allowed are 4 members per team. The winning prize money for the student category would be per submission, not per team member. Moreover, the award for the professional category would also be one per submission.</p>
                            </div>
                            <div class="col-md-6">
                                <br class="visible-xs visible-sm">
                                <p class="fontsize17">5. Professionals may submit their previous student level works (modified/unmodified), however, these projects will be evaluated under professional category. </p>
                                <br>
                                <p class="fontsize17">6. If your student project is nominated the participants will be required to produce a certificate of bonafide from their universities/university identification card as a proof of enrollment in an academic programme during the date of submission. </p>
                                <br>
                                <p class="fontsize17">7. Projects that are still under development are also eligible for submission</p>
                                <br>
                                <p class="fontsize17">8. All work submitted shall be original and any plagiarized content would result in immediate disqualification.</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="default custom-gradient">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h2 class="title">Your Submissions</h2>
                        @if(count($submissions) == 0)
                            <div class="sub-title">You have no submissions at the moment</div>
                        @endif
                    </div>
                </div>
                @if(count($submissions)>0)
                    <div class="row">
                        @foreach($submissions as $submission)
                            <div class="col-md-4 col-sm-6 text-center padding-top-10">
                                <img src="{{$submission->thumbnail}}" class="center-block" width="250">
                                <div class="divider h33"></div>
                                <h3>{{$submission->title}}</h3>
                                <p style="font-weight: bold;">{{$submission->type}} Entry</p>
                                <p><span style="font-weight: bold">Submission ID:</span> {{$submission->id}}</p>
                                <p><span style="font-weight: bold">Status:</span> {{$submission->status}}</p>
                                <p><span style="font-weight: bold">Payment Status:</span> <?php if ($submission->payment_status == 'Not Paid'):?><span style="color: red;"><i class="ti-close"></i> {{$submission->payment_status}}</span><?php elseif ($submission->payment_status == 'Submitted'):?><span style="color: blue;"><i class="ti-info"></i> Payment Proof Submitted <br><small>(You'll be notified when your payment has been verified)</small></span><?php else:?><span style="color: green;"><i class="ti-check-box"></i> {{$submission->payment_status}}</span><?php endif?></p>
                                <br>
                                <?php if ($submission->payment_status == 'Not Paid'):?><p><a href="#" data-id="{{$submission->id}}" data-izimodal-open="#modal" data-izimodal-transitionin="bounceInUp" class="flat-button color-white">Upload Payment Receipt</a><br><a class="font-raleway" href="javascript:void(0)" style="color: red" data-id="{{$submission->id}}" onclick="deleteEntry($(this).data('id'));">Delete Entry</a></p><?php endif?>
                            </div>
                        @endforeach
                    </div>
                    <div id="modal">
                        <input type="hidden" id="submissionid">
                        <form action="{{url('upload-payment')}}" class="dropzone" id="payment" style="margin: 15px;">
                            {{csrf_field()}}
                        </form>
                        <div class="text-center">
                            <button class="flat-button save">Submit</button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection