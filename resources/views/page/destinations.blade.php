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
            <div class="position-absolute-bottom l-0 w-50">


                            <div class="rgba-white-9 shadow-sm text-center p-3">
                                <h1 class="h3 font-weight-bold t-corrido py-3">Peru destinations</h1>
                                {{--                    <h4 class="font-weight-semi-bold text-g-yellow">Included</h4>--}}

                                <p class="m-0">Offering you an authentic and reliable travel experience in peru welcoming you to explore the many fully customized travel packages we have that suit every budget. let us plan your unforgettable trip to our majestic machu picchu and the rest of our homeland… peru!</p>

                            </div>




            </div>
        </div>
    </header>

    <section class="my-0">
        <div class="container-fluid p-0">
            <div class="row no-gutters align-items-center align-items-resumen bg-white">
            @foreach($destino as $destinos)
{{--                    <div class="col-12 col-md-6">--}}
{{--                        <div class="p-5" id="box-resumen">--}}
{{--                            --}}{{--                        <div class="exp-unica">--}}
{{--                            --}}{{--                            <div class="buton">--}}
{{--                            --}}{{--                                <div class="arrow">--}}
{{--                            --}}{{--                                    <span class="icon-estrella"></span>--}}
{{--                            --}}{{--                                </div>--}}
{{--                            --}}{{--                                <span>hola</span>--}}
{{--                            --}}{{--                            </div>--}}
{{--                            --}}{{--                        </div>--}}
{{--                            --}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-6 col-md-6">

                                @foreach($destinos->destino_imagen as $imagen_destinos)


                            <div class="box19">
                                <img src="{{$imagen_destinos->nombre}}" class="w-100">
                                <div class="box-content">
                                    <ul class="icon">
                                        <li>
                                            <a href="{{route('destination_show_path', $destinos->url)}}">
                                                <i data-feather="link" class="text-white d-block mx-auto" stroke-width="1"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="title t-corrido font-weight-normal">{{$destinos->nombre}}</h3>
                                </div>
                            </div>
                                @endforeach


{{--                        <h4>{{$destinos->nombre}}</h4>--}}
{{--                        <div class="line-subtitle"></div>--}}
{{--                        {!! $destinos->descripcion !!}--}}
{{--                        <div class="row mt-4">--}}
{{--                            <div class="col">--}}
{{--                                <button type="button" class="btn btn-link p-0 text-secondary d-none d-md-inline float-left font-weight-lighter">SABER MÁS SOBRE {{mb_strtoupper($destinos->nombre)}}</button>--}}
{{--                                <a href="{{route('destination_show_path', $destinos->url)}}" class="btn btn-g-green text-white rounded-0 float-md-right">VER PAQUETES</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        var swiper = new Swiper('.swiper-container-gallery', {
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            // navigation: {
            //     nextEl: '.swiper-button-next',
            //     prevEl: '.swiper-button-prev',
            // },
        });
        var swiper = new Swiper('.swiper-container-detail', {
            direction: 'vertical',
            slidesPerView: 'auto',
            freeMode: true,
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            mousewheel: true,
        });



    </script>
@endpush
