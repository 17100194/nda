@extends('layouts.app')

@section('content')
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="title-section">
                        <h1 class="title">Interactive Design</h1>
                        <p class="sub-title">Given in recognition of exceptional work in interactive digital products or services, interactive content and user interface design for websites, mobile devices and experiential installations for example, software, mobile apps, interactive projections, animations, simulations, robotics, etc.</p>
                    </div>
                </div>
                <div class="col-md-5 padding-top-40">
                    <img src="{{asset('images/categories/interactive-design.png')}}" class="center-block">
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title color-white">Interactive Design Jury 2018</h1>
                    </div>
                    <img src="{{asset('images/comingsoon.png')}}" class="center-block">
                </div>
            </div>
        </div>
    </section>
@endsection