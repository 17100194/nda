@extends('layouts.app')

@section('content')
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="title-section">
                        <h1 class="title">Print & Published Media</h1>
                        <p class="sub-title">Given to an individual or a team/agency for exceptional work in graphic design for print, branding and digital media with excellent visual design aesthetics, innovation, publication content quality, human interaction, and other aspects specific to the type of agency or product. Transparency and ethical publishing are factors that would contribute significantly as well.</p>
                    </div>
                </div>
                <div class="col-md-5 padding-top-40">
                    <img src="{{asset('images/categories/print.png')}}" class="center-block">
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title color-white">Print & Published Media Jury 2018</h1>
                    </div>
                    <img src="{{asset('images/comingsoon.png')}}" class="center-block">
                </div>
            </div>
        </div>
    </section>
@endsection