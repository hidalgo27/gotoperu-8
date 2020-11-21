@extends('layouts.page.app')
@section('content')
    @include('layouts.page.head')
    <header class="header">
        <div class="overlay"></div>
        <div class="homepage-video">
            {{--            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
            {{--            <iframe src="https://player.vimeo.com/video/381676880?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
            <img src="{{asset('images/social/stock.jpg')}}" alt="">

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

                                <h1 class="text-g-yellow font-weight-bold text-center display-4">Porque nos <span class="text-g-green">Importa</span></h1>
                                <p class="h2 text-secondary">Retribuimos a nuestras comunidades</p>
                                <p>We are proud of our community projects which offer authentic travel experiences whilst promoting local entrepreneurship and the conservation of peruvian traditional culture. </p>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </header>

    <section class="py-4 bg-white">
        <div class="container">
            {{--            <div class="row">--}}
            {{--                <div class="col text-center">--}}
            {{--                    <h1 class="text-g-yellow font-weight-bold display-4 text-center">Quiénes Somos y <span class="text-g-green">por qué Amamos Viajar</span></h1>--}}
            {{--                    --}}{{--<p class="h2 text-secondary pt-3">USTED TENDRÁ UNA EXPERIENCIA INIMAGINABLE</p>--}}
            {{--                    --}}{{--<p class="h4"></p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="row">--}}
            {{--                <div class="col">--}}
            {{--                    <p class="mb-0 lead text-secondary text-center"><b>En GOTOPERU creemos en la excelencia, seguridad, atención personalizada y calidad de los servicios, es nuestro compromiso con nuestros pasajeros. Por eso, nos esforzamos en satisfacer las necesidades de nuestros clientes al máximo.</b></p>--}}
            {{--                </div>--}}

            {{--            </div>--}}

            <div class="row align-items-center">
                <div class="col">
                    {{--<blockquote class="blockquote text-center alert-primary py-3">--}}
                    {{--<p class="mb-0">En GOTOPERU creemos en la excelencia, seguridad, atención personalizada y calidad de los servicios, es nuestro compromiso para con nuestros pasajeros. Por eso, nos esforzamos en satisfacer las necesidades de nuestros clientes al máximo.</p>--}}
                    {{--<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>--}}
                    {{--</blockquote>--}}
                    <div class="alert alert-primary" role="alert">
                        <p class="lead text-center m-0"><b>We encourage our travelers to include community based activities within our itineraries.</b></p>
                    </div>
                    <p class="lead">At GOTOPERU comply with local legislation and regulations including fair pay, ensure locals are given equal employment opportunities and are transparent with our sustainable business practices.In addition we are constantly involved in social activities helping our local communities.</p>

                    <p></p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{asset('images/social/care2.jpg')}}" alt="" class="w-100">
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-4">
                    <img src="{{asset('images/social/abu-large.jpg')}}" alt="" class="w-100">
                </div>
                <div class="col">
                    <img src="{{asset('images/social/gente.jpg')}}" alt="" class="w-100">
                    <p class="p-5 m-0">At GOTOPERU we believe that it is only by seeing and engaging with different people, cultures and habitats that we can begin to have an understanding of the world around us. It is only through the understanding from every trip we take that we can hope to learn how to protect the world for the future generations.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="{{asset('images/social/care1.jpg')}}" alt="" class="w-100">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <img src="{{asset('images/social/social.jpg')}}" alt="" class="w-100">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <img src="{{asset('images/social/care3.jpg')}}" alt="" class="w-100">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="{{asset('images/social/care4.jpg')}}" alt="" class="w-100">
                </div>
            </div>



        </div>
    </section>

@endsection
