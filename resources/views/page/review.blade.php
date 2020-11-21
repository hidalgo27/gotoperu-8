@extends('layouts.page.app')
@section('content')
    @include('layouts.page.head')
    <header class="header">
        <div class="overlay"></div>
        <div class="homepage-video">
            {{--            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
            {{--            <iframe src="https://player.vimeo.com/video/381676880?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
            <img src="{{asset('images/testimonials.jpg')}}" alt="">

        </div>
        <div class="container h-100">

            <div class="position-absolute-bottom w-100">

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="rgba-white-9 shadow-sm rounded-top text-center p-3 pb-5">

                                <h1 class="text-g-yellow font-weight-bold text-center display-4">Video <span class="text-g-green">testimonials</span></h1>
{{--                                <p class="h2 text-secondary">Our biggest rewards are to have satisfied clients share their experience with us. Below are a few testimonials that we would like to share with you! would you like to be next...camera, action!</p>--}}
                                <p>Our biggest rewards are to have satisfied clients share their experience with us. Below are a few testimonials that we would like to share with you! would you like to be next...camera, action!</p>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </header>



    <section class="bg-white pb-5">
        <div class="container">


            <div class="row">
                @foreach($testimonio_video as $testimonio_videos)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="{{$testimonio_videos->codigo}}">
                            <div class="position-relative">
                                <img src="{{$testimonio_videos->imagen}}" alt="" class="w-100 shadow-sm rounded">
                                <div class="position-absolute-bottom text-white p-3 icon-play">
                                    <i class="fas fa-play fa-2x"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>


        </div>
    </section>

@endsection
