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
    <section class="flat-row" style="background: #0B4869">
        <div class="container">
            <div class="row">
                <div class="title-section text-center">
                    <h1 class="title" style="color:white;">Print & Published Media Jury 2018</h1>
                </div>
                <div class="col-md-4 wrap-teammember">
                    <div class="teammember">
                        <div class="avatar">
                            <img src="{{asset('images/jury/faisal_sherjan.png')}}" width="100%">
                            <div class="info-overlay">
                                <div class="flat-socials">
                                    <a href="#"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="content text-center">
                            <h5 class="name">Faisal Sherjan</h5>
                            <p class="position">
                                Director National Incubation Centre Lahore
                                Co-Founder, Chief Strategy Officer - Multiple Tech Startups
                                Director Strategy and Planning - Jang Group
                                Chief Operating Officer International Division Geo Tv Network
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="title-section text-center">
                <h1 class="title" style="color:white;">More Jury Members Coming Soon</h1>
            </div>
        </div>
    </section>
@endsection