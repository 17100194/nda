@extends('layouts.app')

@section('content')
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="title-section">
                        <h1 class="title">Peoples' Choice Award</h1>
                        <p class="sub-title">Given to an entrepreneur(s) for a startup that has shown greatest development over the last year(s) based on the growth,
                            impact and sales, with their products and/or services.</p>
                    </div>
                </div>
                <div class="col-md-5 padding-top-40">
                    <img src="{{asset('images/categories/pppl-choice.png')}}" class="center-block">
                </div>
            </div>
        </div>
    </section>
@endsection