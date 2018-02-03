@extends('layouts.app')

@section('content')
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="title-section">
                        <h1 class="title">Visual Communication Design</h1>
                        <p class="sub-title">All visual and graphic design, branding and identity projects for print, digital or physical environments for e.g., logos, environmental graphics, signage, typefaces, infographics, motion graphics, print design, advertising, etc.</p>
                        <ul class="list-style style-caret">
                            <li class="active">
                                <a>Static</a>
                            </li>
                            <p class="sub-title">Given for originality and uniqueness in design style with a distinctive personal, depth, innovation, aesthetic quality, creativity, and presentation (how are designs presented and overall composition of portfolio).</p>
                            <li class="active">
                                <a>Animation</a>
                            </li>
                            <p class="sub-title">Given for its well-designed mix of concept, visual design, storytelling and engagement.</p>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 padding-top-40">
                    <img src="{{asset('images/categories/VCD.png')}}" width="200"><img src="{{asset('images/categories/static-design.png')}}" width="235"><img src="{{asset('images/categories/animation-design.png')}}" class="center-block" width="235">
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row" style="background: #0B4869">
        <div class="container">
            <div class="row">
                <div class="title-section text-center">
                    <h1 class="title" style="color:white;">Visual Communication Design Jury 2018</h1>
                </div>
                <div class="col-md-4 wrap-teammember">
                    <div class="teammember">
                        <div class="avatar">
                            <img src="{{asset('images/jury/ali_murtaza.jpeg')}}" width="100%">
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
                            <h5 class="name">Ali Murtaza</h5>
                            <p class="position">
                                Program Manager, Makistan (ITU)
                                Design Consultant
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection