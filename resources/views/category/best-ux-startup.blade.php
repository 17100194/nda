@extends('layouts.app')

@section('content')
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="title-section">
                        <h1 class="title">Best UX Design By A Startup</h1>
                        <p class="sub-title">
                            Given in recognition of a startup company that is newly emerged, has fast-growing business opportunities and fulfills a market need by developing a viable business model around an innovative product, service, process or platform. Every aspect of the user’s interaction with a product or service should result in positive user’s perceptions. This would include all the elements that together make up that interface, including layout, visual design, text, brand, sound, marketing and interaction that offers best possible experience to users. The submissions will also be judged on user testing and research in the early phases and development of unique value proposition and user personas based on that research and finally the progressive iterations of design.
                        </p>
                    </div>
                </div>
                <div class="col-md-5 padding-top-40">
                    <img src="{{asset('images/categories/ux.png')}}" class="center-block">
                </div>
            </div>
        </div>
    </section>
@endsection