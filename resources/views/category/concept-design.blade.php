@extends('layouts.app')

@section('content')
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="title-section">
                        <h1 class="title">Concept Design</h1>
                        <p class="sub-title">Given in recognition of conceptual or proposal designs, whether self-initiated or created for a client or educational institution, which have been fully developed and have a profound impact on design theory, practice, or public awareness.</p>
                    </div>
                </div>
                <div class="col-md-5 padding-top-40">
                    <img src="{{asset('images/categories/concept-design.png')}}" class="center-block">
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title color-white">Concept Design Jury 2018</h1>
                    </div>
                    <img src="{{asset('images/comingsoon.png')}}" class="center-block">
                </div>
            </div>
        </div>
    </section>
@endsection