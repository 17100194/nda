@extends('layouts.app')

@section('content')
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title">In Collaboration With</h1>
                    </div>
                    <div class="col-md-4">
                        <a href="http://nicpakistan.pk/" target="_blank"><img src="{{asset('images/NIC-Logo.png')}}" alt="NIC Logo" class="center-block padding-top-49"></a>
                    </div>
                    <div class="col-md-4">
                        <a href="https://lums.edu.pk/" target="_blank"><img src="{{asset('images/lums2.png')}}" alt="LUMS Logo" class="center-block padding-top-40" width="400"></a>
                    </div>
                    <div class="col-md-4">
                        <a href="https://www.uxpakistan.com/" target="_blank"><img src="{{asset('images/uxpakistan.png')}}" alt="UXPakistan Logo" class="center-block padding-top-40" width="400"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row bg-gray2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title">Sponsors</h1>
                    </div>
                    <img src="{{asset('images/comingsoon.png')}}" alt="Coming Soon" class="center-block">
                </div>
            </div>
        </div>
    </section>
@endsection