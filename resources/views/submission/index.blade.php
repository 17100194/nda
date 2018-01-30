@extends('layouts.app')

@section('content')
    <section class="parallax page-title">
        <div class="overlay-parallax "></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title">Get Started</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row">
        <div class="container">
            @if(session()->has('message'))
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <i class="fa fa-check-circle"></i> <?php echo session()->pull('message') ?>
                </div>
            @endif
            <div class="title-section text-center">
                <h1 class="title">Early Bird Pricing</h1>
                <p class="sub-title"><span style="text-decoration: underline">Student:</span> 1000 PKR / Submission<br> <span style="text-decoration: underline">Professional:</span> 2000 PKR / Submission</p>
            </div>
                <div class="divider"></div>
            <div class="text-center">
                <a href="{{url('/submissions/professional')}}" class="flat-button border-radius-none style-left-right bg-white border-black">Make a Professional Entry</a> <span>OR</span> <a href="{{url('/submissions/student')}}" class="flat-button border-radius-none style-left-right bg-white border-black">Make a Student Entry</a>
            </div>
            <div class="divider"></div>
            <div class="title-section line bg-gray after-width158">
                <div class="container-fluid2">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title">Eligibility & Criteria</h1>
                            <br>
                            <p class="sub-title">1. The awards are open to students and professionals of all design disciplines.</p>
                            <br>
                            <p class="sub-title">2. Student level includes individuals enrolled in a full time Bachelors/ Undergraduate, Masters/Undergraduate and Ph.D programmes nationwide</p>
                            <br>
                            <p class="sub-title">3. Any student graduated within the previous four months from the date of submission may also submit their project in the student category</p>
                            <br>
                            <p class="sub-title">4. All work submitted shall be original and any plagiarized content would result in immediate disqualification.</p>
                            <br>
                            <p class="sub-title">5. Professionals may submit their previous student level works (modified/unmodified), however, these projects will be evaluated under professional category. </p>
                            <br>
                            <p class="sub-title">6. If your student project is nominated the participants will be required to produce a certificate of bonafide from their universities/university identification card as a proof of enrollment in an academic programme during the date of submission. </p>
                            <br>
                            <p class="sub-title">7. Projects that are still under development are also eligible for submission</p>
                            <br>
                            <p class="sub-title">8. Team level/individual participation is permitted. The maximum number of team members allowed are 4 members per team. The winning prize money for the student category would be per submission, not per team member. Moreover, the award for the professional category would also be one per submission.</p>
                            <br>
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
                                <img src="{{url('/storage/app/public/uploads/'.$submission->thumbnail)}}" class="center-block" width="250">
                                <div class="divider h33"></div>
                                <h3>{{$submission->title}}</h3>
                                <p style="font-weight: bold;">{{$submission->type}} Entry</p>
                                <p><span style="font-weight: bold">Submission ID:</span> {{$submission->id}}</p>
                                <p><span style="font-weight: bold">Status:</span> {{$submission->status}}</p>
                                <p><span style="font-weight: bold">Payment Status:</span> <?php if ($submission->payment_status == 'Not Paid'):?><span style="color: red;"><i class="ti-close"></i> {{$submission->payment_status}}</span><?php elseif ($submission->payment_status == 'Submitted'):?><span style="color: green;"><i class="ti-info"></i> {{$submission->payment_status}}</span><?php else:?><span style="color: green;"><i class="ti-check-box"></i> {{$submission->payment_status}}</span><?php endif?></p>
                                <br>
                                <?php if ($submission->payment_status == 'Not Paid'):?><p><a href="#" data-id="{{$submission->id}}" data-izimodal-open="#modal" data-izimodal-transitionin="bounceInUp" class="flat-button color-white">Upload Payment Receipt</a><br><a class="font-raleway" href="javascript:void(0)" style="color: red" data-id="{{$submission->id}}" onclick="deleteEntry($(this).data('id'));">Delete Entry</a></p><?php endif?>
                            </div>
                        @endforeach
                    </div>
                    <div id="modal">
                        <input type="hidden" id="submissionid">
                        <form action="{{url('upload-payment')}}" class="dropzone" id="payment">
                            {{csrf_field()}}
                        </form>
                        <button class="flat-button save float-right">Save Changes</button>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection