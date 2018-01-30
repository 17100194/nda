@extends('layouts.app')

@section('content')
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="title-section">
                        <h1 class="title">Consumer Product Design</h1>
                        <p class="sub-title">Given in recognition of a well-thought-out product designed for consumer use, that is innovative, useful, aesthetically pleasing and designed to either solve a problem, or just for leisure but is backed by strategic thinking and imagination which goes into making a product for e.g., consumer goods, technology, home and office furnishings etc.</p>
                    </div>
                </div>
                <div class="col-md-5 padding-top-40">
                    <img src="{{asset('images/categories/consumer-product.png')}}" class="center-block">
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title color-white">Consumer Product Design Jury 2018</h1>
                    </div>
                    <img src="{{asset('images/comingsoon.png')}}" class="center-block">
                </div>
            </div>
        </div>
    </section>
@endsection