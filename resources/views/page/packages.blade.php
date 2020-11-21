@extends('layouts.page.app')
@section('content')
    @include('layouts.page.head')
    <header class="header">
        <div class="overlay"></div>
        <div class="homepage-video">
            {{--            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
            {{--            <iframe src="https://player.vimeo.com/video/381676880?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
                            <img src="http://gotoperu-mx.s3-us-west-1.amazonaws.com/package/slider/mapi2_1574182691.jpg" alt="">

        </div>
        <div class="container h-100">
            {{--                <div class="row d-flex h-75 text-center align-items-end">--}}
            {{--                    <div class="col w-100 text-white">--}}
            {{--                        <h1 class="h1">{{$paquetes->titulo}}</h1>--}}
            {{--                        <h2 class="font-weight-lighter h4">Los mejores destinos en Perú operado por los mejores asesores de viaje.</h2>--}}
            {{--                        --}}{{--                    <a href="#consulte" class="btn btn-dark btn-lg h2 font-weight-bold mt-3">Diseña tu Viaje</a>--}}
            {{--                        --}}{{--                        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="row h-25 align-items-center">--}}
            {{--                    <div class="col">--}}
            {{--                        --}}{{--                    <div class="rgba-white-8 rounded px-2 pt-3 pb-2">--}}

            {{--                        <example-component></example-component>--}}

            {{--                        --}}{{--                    </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            <div class="position-absolute-bottom w-100">

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="rgba-white-9 shadow-sm rounded-top text-center p-3">
                                <h1 class="h3 font-weight-bold text-g-green py-3">PERU TRAVEL FEATURED PACKAGES</h1>
                                <h4 class="font-weight-semi-bold text-g-yellow pb-3">Itineraries to inspire</h4>

                                <p class=""> GOTOPERU have tailored a few signature itineraries just for you!!
                                    Please browse them below at your leisure and see what inspires you.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </header>

    <section class="mt-5">

        <search-package-page></search-package-page>

    </section>
@endsection
