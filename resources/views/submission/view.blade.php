@extends('layouts.admin')

@section('content')
    <div class="page-content">
        <div class="header">
            <h2><strong>{{$submission->title}}</strong> <small>By {{$submission->by}} (ID: {{$submission->id}})</small></h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="{{$submission->thumbnail}}" width="100%">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="panel">
                    <div class="panel-header bg-primary">
                        <div class="control-btn">
                            <a href="#" class="panel-toggle"><i class="fa fa-angle-down"></i></a>
                        </div>
                        <h3>Basic <strong>Details</strong></h3>
                    </div>
                    <div class="panel-content">
                        <p class=""><strong>Entry Type:</strong> {{$submission->type}}</p>
                        <p class=""><strong>Client Name:</strong> <?php if ($submission->for):?>{{$submission->for}}<?php else:?>N/A<?php endif?></p>
                        <p class=""><strong>Categories:</strong> {{$submission->categories}}</p>
                        <p class=""><strong>External Link:</strong> <?php if ($submission->project_url):?>{{$submission->project_url}}<?php else:?>N/A<?php endif?></p>
                        <p class=""><strong>Video:</strong> <?php if ($submission->project_video):?>{{$submission->project_video}}<?php else:?>N/A<?php endif?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel">
                    <div class="panel-header bg-primary">
                        <div class="control-btn">
                            <a href="#" class="panel-toggle"><i class="fa fa-angle-down"></i></a>
                        </div>
                        <h3>Basic <strong>Details</strong></h3>
                    </div>
                    <div class="panel-content">
                        <p><strong>Team Members:</strong> <?php if($submission->team_member1):?>{{$submission->team_member1}}, <?php endif?><?php if($submission->team_member2):?>{{$submission->team_member2}}, <?php endif?><?php if($submission->team_member3):?>{{$submission->team_member3}}, <?php endif?><?php if($submission->team_member4):?>{{$submission->team_member4}}, <?php endif?><?php if(!$submission->team_member1||!$submission->team_member2||!$submission->team_member3||!$submission->team_member4):?>N/A<?php endif?></p>
                        <p class=""><strong>Status:</strong> {{$submission->status}}</p>
                        <p class=""><strong>Payment Status:</strong> <?php if($submission->payment_status == 'Submitted'):?>Payment Proof Submitted<?php elseif ($submission->payment_status == 'Paid'):?><span style="color:green;">{{$submission->payment_status}} <i class="icon-check"></i></span><?php else:?><span style="color:red;">{{$submission->payment_status}} <i class="fa fa-remove"></i></span><?php endif?> <?php if($submission->payment_status == 'Submitted'):?>( <a href="#" data-id="{{$submission->id}}" id="verify">Verified? Mark As Paid</a> )<?php endif?></p>
                        @if($submission->payment_status !== 'Not Paid')
                            <img src="{{$submission->payment_proof}}" width="200" class="magnific" style="cursor: pointer" data-mfp-src="{{$submission->payment_proof}}">
                        @endif
                        <p class=""><strong>Payment Method:</strong> {{$submission->payment_method}}</p>
                        <p class=""><strong>Created At:</strong> {{$submission->created_at}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-header bg-primary">
                        <div class="control-btn">
                            <a href="#" class="panel-toggle"><i class="fa fa-angle-down"></i></a>
                        </div>
                        <h3>Project <strong>Overview</strong></h3>
                    </div>
                    <div class="panel-content">
                        <p class="">{{$submission->project_overview}}</p>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-header bg-primary">
                        <div class="control-btn">
                            <a href="#" class="panel-toggle"><i class="fa fa-angle-down"></i></a>
                        </div>
                        <h3>Project <strong>Details</strong></h3>
                    </div>
                    <div class="panel-content">
                        <p class="">{{$submission->project_details}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-header bg-primary">
                        <div class="control-btn">
                            <a href="#" class="panel-toggle"><i class="fa fa-angle-down"></i></a>
                        </div>
                        <h3>Project <strong>Images</strong></h3>
                    </div>
                    <div class="panel-content">
                        <img src="{{$submission->image_1}}" width="200" class="magnific" style="cursor: pointer" data-mfp-src="{{$submission->image_1}}">
                        @if($submission->image_2)
                            <img src="{{$submission->image_2}}" width="200" class="magnific" style="cursor: pointer" data-mfp-src="{{$submission->image_2}}">
                        @endif
                        @if($submission->image_3)
                            <img src="{{$submission->image_3}}" width="200" class="magnific" style="cursor: pointer" data-mfp-src="{{$submission->image_3}}">
                        @endif
                        @if($submission->image_4)
                            <img src="{{$submission->image_4}}" width="200" class="magnific" style="cursor: pointer" data-mfp-src="{{$submission->image_4}}">
                        @endif
                        @if($submission->image_5)
                            <img src="{{$submission->image_5}}" width="200" class="magnific" style="cursor: pointer" data-mfp-src="{{$submission->image_5}}">
                        @endif
                        @if($submission->image_6)
                            <img src="{{$submission->image_6}}" width="200" class="magnific" style="cursor: pointer" data-mfp-src="{{$submission->image_6}}">
                        @endif
                        @if($submission->image_7)
                            <img src="{{$submission->image_7}}" width="200" class="magnific" style="cursor: pointer" data-mfp-src="{{$submission->image_7}}">
                        @endif
                        @if($submission->image_8)
                            <img src="{{$submission->image_8}}" width="200" class="magnific" style="cursor: pointer" data-mfp-src="{{$submission->image_8}}">
                        @endif
                        @if($submission->image_9)
                            <img src="{{$submission->image_9}}" width="200" class="magnific" style="cursor: pointer" data-mfp-src="{{$submission->image_9}}">
                        @endif
                        @if($submission->image_10)
                            <img src="{{$submission->image_10}}" width="200" class="magnific" style="cursor: pointer" data-mfp-src="{{$submission->image_10}}">
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-header bg-primary">
                        <div class="control-btn">
                            <a href="#" class="panel-toggle"><i class="fa fa-angle-down"></i></a>
                        </div>
                        <h3>Project <strong>PDF</strong></h3>
                    </div>
                    <div class="panel-content">
                        @if($submission->project_pdf)
                            <a href="{{$submission->project_pdf}}" download><i class="fa fa-file-pdf-o fa-4x"></i></a>
                        @else
                            <p class="lead">No PDF document uploaded</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection