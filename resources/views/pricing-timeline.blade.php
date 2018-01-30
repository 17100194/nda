@extends('layouts.app')

@section('content')
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section line">
                        <h1 class="title">Pricing</h1>
                    </div>
                    <div class="divider"></div>
                    <p class="fontsize20">The submission charges will be discounted in the
                        early bird phase of registration. The charges are as
                        follows:</p>
                    <br>
                    <ul class="list-style style-caret">
                        <li class="active"><a class="fontsize20">Early Bird</a></li>
                        <p class="fontsize20">Student: 1000 PKR / Submission</p>
                        <p class="fontsize20">Professional: 2000 PKR / Submission</p>
                        <br>
                        <li class="active"><a class="fontsize20">Normal</a></li>
                        <p class="fontsize20">Student: 1500 PKR / Submission</p>
                        <p class="fontsize20">Professional: 3000 PKR / Submission</p>
                    </ul>
                    <div class="divider"></div>
                    <div class="title-section line">
                        <h1 class="title">Timeline</h1>
                    </div>
                    <div class="divider"></div>
                    <img src="{{asset('images/timeline.png')}}">
                </div>
            </div>
        </div>
    </section>
@endsection