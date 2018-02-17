@extends('layouts.app')

@section('content')
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="title-section">
                        <h1 class="title">Product Design</h1>
                        <ul class="list-style style-caret">
                            <li class="active">
                                <a>Comsumer</a>
                            </li>
                            <p class="sub-title">Given in recognition of a well-thought-out product designed for consumer use, that is innovative, useful, aesthetically pleasing and designed to either solve a problem, or just for leisure but is backed by strategic thinking and imagination which goes into making a product for e.g., consumer goods, technology, home and office furnishings etc.</p>
                            <li class="active">
                                <a>Industrial</a>
                            </li>
                            <p class="sub-title">Given in recognition of practical products that deliver more with less by improving economic efficiency of manufacturing through design engineering so it’s cheap, useful, safe, long-lasting, environment friendly and socially responsive, i.e. has high demand, perceived value, and post-usage impacts for example equipment and systems designed for public, commercial, industrial, medical and scientific use (operational, production, construction, etc).</p>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 padding-top-40">
                    <img src="{{asset('images/categories/consumer-product.png')}}" class="center-block">
                    <img src="{{asset('images/categories/industry-product.png')}}" class="center-block">
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row" style="background: #0B4869">
        <div class="container">
            <div class="row">
                <div class="title-section text-center">
                    <h1 class="title" style="color:white;">Product Design Jury 2018</h1>
                </div>
                <div class="col-md-3 wrap-teammember">
                    <div class="teammember">
                        <div class="avatar">
                            <img src="{{asset('images/jury/badar_khushnood.jpg')}}" width="100%">
                            <div class="info-overlay">
                                <div class="flat-socials">
                                    <a href="#"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="content text-center" style="height: 200px;">
                            <h5 class="name">Badar Khushnood</h5>
                            <p class="position">
                                Cofounder @ Bramerz.com | Growth Hacker @ Fishry.com Ecommerce | ex-Google, Facebook & Twitter
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wrap-teammember">
                    <div class="teammember">
                        <div class="avatar">
                            <img src="{{asset('images/jury/pavan_dadlani.jpg')}}" width="100%">
                            <div class="info-overlay">
                                <div class="flat-socials">
                                    <a href="#"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="content text-center" style="height: 200px;">
                            <h5 class="name">Pavan Dadlani</h5>
                            <p class="position">
                                Senior Scientist & Project Leader at Philips Group Innovation
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wrap-teammember">
                    <div class="teammember">
                        <div class="avatar">
                            <img src="{{asset('images/jury/omair_faizullah.jpeg')}}" width="100%">
                            <div class="info-overlay">
                                <div class="flat-socials">
                                    <a href="#"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="content text-center" style="height: 200px;">
                            <h5 class="name">Omair Faizullah</h5>
                            <p class="position">
                                Associate Professor at BNU | Creative Director
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wrap-teammember">
                    <div class="teammember">
                        <div class="avatar">
                            <img src="{{asset('images/jury/zia_imran.jpg')}}" width="100%">
                            <div class="info-overlay">
                                <div class="flat-socials">
                                    <a href="#"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="content text-center" style="height: 200px;">
                            <h5 class="name">Zia Imran</h5>
                            <p class="position">
                                Country Manager at SPRING Accelerator | Acting CEO – Zaheen Machines | CEO and Founder  VAHZAY PVT ltd
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wrap-teammember">
                    <div class="teammember">
                        <div class="avatar">
                            <img src="{{asset('images/jury/ahmed_shuja.jpg')}}" width="100%">
                            <div class="info-overlay">
                                <div class="flat-socials">
                                    <a href="#"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="content text-center" style="height: 200px;">
                            <h5 class="name">Ahmed Shuja</h5>
                            <p class="position">
                                Methodical Problem Solver | Experienced Digital Designer, Developer, Manager, and Mentor, AugmentCare
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wrap-teammember">
                    <div class="teammember">
                        <div class="avatar">
                            <img src="{{asset('images/jury/gulraiz_khan.jpg')}}" width="100%">
                            <div class="info-overlay">
                                <div class="flat-socials">
                                    <a href="#"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="content text-center" style="height: 200px;">
                            <h5 class="name">Gulraiz Khan</h5>
                            <p class="position">
                                Lecturer - Habib University | Assistant director – the playground | Visiting Lecturer - SZABIST | Masters of Fine Arts - Parsons School of Design
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