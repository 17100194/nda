@extends('layouts.admin')

@section('content')
    <div class="page-content">
        <div class="header">
            <h2><strong>Submissions</strong></h2>
        </div>
        <div class="row">
            <div class="col-lg-12 portlets">
                <div class="panel panel-transparent">
                    <div class="panel-content">
                        <div class="portfolioFilter">
                            <a href="#" data-filter="*" class="current">All Categories</a>
                            <a href="#" data-filter=".architecture">Architecture</a>
                            <a href="#" data-filter=".game-design">Game Design</a>
                            <a href="#" data-filter=".consumer=product-design">Product Design</a>
                            <a href="#" data-filter=".design-social-impact">Design For Social Impact</a>
                            <a href="#" data-filter=".education-initiative">Education Initiative</a>
                            <a href="#" data-filter=".fashion-textile">Fashion & Textile</a>
                            <a href="#" data-filter=".furniture-lighting">Furniture & Lighting</a>
                            <a href="#" data-filter=".packaging">Packaging</a>
                            <a href="#" data-filter=".print-published-media">Print & Published Media</a>
                            <a href="#" data-filter=".service-design">UI/UX Design</a>
                            <a href="#" data-filter=".visual-communication-design">Visual Communication Design</a>
                            <a href="#" data-filter=".emerging-technologies">Emerging Technologies</a>
                        </div>
                        <div class="portfolioContainer grid">
                            @foreach($submissions as $submission)
                                <?php
                                    $categories = explode(',',$submission->categories);
                                    $class = '';
                                    foreach ($categories as $category){
                                        if ($category == 'Interior Design' || $category == 'Landscape Design'){
                                            $class = $class.'architecture ';
                                        }
                                        if ($category == 'Game Design'){
                                            $class = $class.'game-design ';
                                        }
                                        if ($category == 'Design For Social Impact'){
                                            $class = $class.'design-social-impact ';
                                        }
                                        if ($category == 'Education Initiative'){
                                            $class = $class.'education-initiative ';
                                        }
                                        if ($category == 'Fashion & Textile'){
                                            $class = $class.'fashion-textile ';
                                        }
                                        if ($category == 'Furniture & Lighting'){
                                            $class = $class.'furniture-lighting ';
                                        }
                                        if ($category == 'Product Design'){
                                            $class = $class.'product-design ';
                                        }
                                        if ($category == 'Packaging'){
                                            $class = $class.'packaging ';
                                        }
                                        if ($category == 'Print & Published Media'){
                                            $class = $class.'print-published-media ';
                                        }
                                        if ($category == 'UI/UX Design'){
                                            $class = $class.'ui-ux-design ';
                                        }
                                        if ($category == 'Static Design' || $category == 'Animation Design'){
                                            $class = $class.'visual-communication-design ';
                                        }
                                        if ($category == 'Emerging Technologies'){
                                            $class = $class.'emerging-technologies ';
                                        }
                                    }
                                ?>
                            <figure class="{{$class}} effect-sarah" onclick="window.location.href = '{{url('nda-admin/submissions/view/'.$submission->id)}}'">
                                <img src="{{$submission->thumbnail}}"/>
                                <figcaption>
                                    <h2>{{$submission->title}}</h2>
                                    <p>ID: {{$submission->id}} | Type: {{$submission->type}} | By: {{$submission->by}}</p>
                                </figcaption>
                            </figure>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection