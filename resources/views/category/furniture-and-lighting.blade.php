@extends('layouts.app')

@section('content')
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="title-section">
                        <h1 class="title">Furniture & Lighting</h1>
                        <p class="sub-title">Furniture and lighting products or systems for private, public, commercial or industrial use for e.g. home or public seating, office systems, lighting, workstations, etc.</p>
                    </div>
                </div>
                <div class="col-md-5 padding-top-40">
                    <img src="{{asset('images/categories/furniture.png')}}" class="center-block">
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title color-white">Furniture & Lighting Jury 2018</h1>
                    </div>
                    <img src="{{asset('images/comingsoon.png')}}" class="center-block">
                </div>
            </div>
        </div>
    </section>
@endsection