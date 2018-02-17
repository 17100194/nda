@extends('layouts.app')

@section('content')
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="title-section">
                        <h1 class="title">Architecture</h1>
                        <p class="sub-title">Given to an individual or firm for exceptional work in public, commercial, retail or residential architectural design.</p>
                        <ul class="list-style style-caret">
                            <li class="active">
                                <a>Interior</a>
                            </li>
                            <p class="sub-title">Given to an individual for exceptional work in domestic, corporate, or cultural interior design.</p>
                            <li class="active">
                                <a>Landscape</a>
                            </li>
                            <p class="sub-title">Given to an individual for exceptional work in spatial design, urban planning or park and garden design which include physical interiors, for private, public, commercial or industrial purposes.</p>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 padding-top-40">
                    <img src="{{asset('images/categories/archi.png')}}" class="center-block">
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row" style="background: #0B4869">
        <div class="container">
            <div class="row">
                <div class="title-section text-center">
                    <h1 class="title" style="color:white;">Architecture Jury 2018</h1>
                </div>
                <div class="col-md-3 wrap-teammember">
                    <div class="teammember">
                        <div class="avatar">
                            <img src="{{asset('images/jury/sami_chohan.jpg')}}" width="100%">
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
                            <h5 class="name">Sami Chohan</h5>
                            <p class="position">
                                Head, Department of Architecture, Indus Valley School of Art and Architecture
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