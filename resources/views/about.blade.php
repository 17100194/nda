@extends('layouts.app')

@section('content')
    <section class="flat-row" style="background: #0B4869;">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="title-section" style="color: white">
                        <h2 class="title fontweight600 letter-spacing11" style="color: white;">About The Program</h2>
                        <div class="divider h33"></div>
                        <div class="sub-title">
                            The annual Awards program aims to celebrate design as a vital humanistic tool in shaping the world, and seeks to increase national awareness of the impact of design by drawing national attention to the ways in which design enriches everyday life.
                            The Awards are organized for the recognition of excellence, innovation, and enhancement of the quality of life. They will be launched for the first time at the <a href="https://www.uxpakistan.com" target="_blank" style="color:#FEBD21">UXPakistan Conference</a> in 2018 as an official project of <a href="https://www.uxpakistan.com" target="_blank" style="color:#FEBD21">UXPakistan</a> in collaboration with <a href="http://nicpakistan.pk/" target="_blank" style="color: #FEBD21;">NIC</a>.
                        </div>
                        <br>
                        <div class="sub-title">
                            We hosted Pakistan’s inaugural user experience and design conference <a href="https://www.uxpakistan.com" target="_blank" style="color:#FEBD21">UXPakistan</a> in April 2017, with state-of-the art workshops, UX clinic for startups, a design competition, top notch speaker line-up and this time we intend to host the inaugural National Design Awards as an official part of UXPakistan’18 conference. The awards program aims to increase awareness of the impact of design by drawing attention to ways in which design enriches everyday life. We will have various categories for jury selected awards covering multiple disciplines of design.
                        </div>
                        <br>
                        <div class="sub-title">
                            National Design Awards will take place on <span style="font-weight: bold; text-decoration: underline;">1st April, 2018</span>. Judges are expected to review all submissions in person and decide the winners and runners up for different categories. We envision this project to encourage the youth to showcase their talents and give them the much needed exposure to gain design awareness and appreciation.
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="{{asset('images/categories-icons.png')}}" class="center-block">
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title fontweight600 letter-spacing11">Our Team</h1>
                    </div>
                    <div class="divider h33"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <img src="{{'images/comingsoon.png'}}" class="center-block">
                </div>
            </div>
        </div>
    </section>
@endsection