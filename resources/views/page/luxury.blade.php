@extends('layouts.page.app')
@section('content')
    @include('layouts.page.head')
    @foreach($categoria as $categorias)
    <header class="header">
        <div class="overlay"></div>
        <div class="homepage-video">
{{--                        <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
{{--                        <iframe src="https://player.vimeo.com/video/381676880?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
            <img src="{{asset('images/luxury.jpg')}}" alt="">

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
                            <div class="bg-white shadow-sm rounded-top text-center p-3">
                                <h1 class="h3 font-weight-bold text-g-yellow py-3">LUXURY PACKAGES</h1>
{{--                                <h4 class="font-weight-semi-bold text-g-yellow pb-3">Itineraries to inspire</h4>--}}
                                <p>Exclusive experiences, unparalleled service, and attention to detail—this is a GOTOPERU luxury vacation.
                                    Personalized attention of your vacation consultant plus  top guides,local team, authentic experiences, and our local expertise of the Peru Coast, Andes and Amazon.</p>
{{--                                <p class=""> GOTOPERU have tailored a few signature itineraries just for you!!--}}
{{--                                    Please browse them below at your leisure and see what inspires you.--}}
{{--                                </p>--}}

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <div class="alert alert-g-yellow">
                        <h5>Get inspired with our sample trips below.</h5>
                        <p>You can have any trip tailor made for your private travel. Any number of days. Any departure date. Any experience you want.</p>
                    </div>
                </div>

                    @foreach($categoria_luxury as $category)

                        @if (isset($category->categoria))
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4 d-flex">
                                <div class="w-100">
                                    <div class="header-img-packages bx-img-destinohome position-relative">
                                        <a href="{{$category->paquete->url}}"><img class="w-100" src="{{$category->paquete->imagen}}" alt=""></a>
                                        <div class="position-absolute-bottom rgba-black-gradient px-3 py-3">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <p class="font-weight-bold text-white h6 pr-2 m-0">{{ $category->paquete->duracion }} Días</p>
                                                </div>
                                                <div class="col-auto">

                                                    @foreach($category->paquete->precio_paquetes as $precio)
                                                        @if($precio->estrellas == 2)
                                                            @if($precio->precio_d > 0)

                                                                <p class="font-weight-bold small text-white m-0">
                                                                    <sup class="small"><small>from</small></sup> ${{$precio->precio_d}}<small>USD</small>

                                                                </p>

                                                            @else
                                                                <span class="text-danger">inquire</span>
                                                            @endif
                                                        @endif
                                                    @endforeach



                                                </div>
                                            </div>
                                            <h5 class="text-white h6 font-weight-bold m-0">{{$category->paquete->titulo}}</h5>
                                            {{--                                                <small class="text-white">Cusco, Machu Picchu.</small>--}}
                                        </div>
                                        <div class="position-absolute-top p-2 text-center">
                                            <div class="box-offers-circle mx-auto rounded-circle bg-g-yellow clearfix text-center p-2">
                                                <span class="mt-4 d-block small font-weight-bold text-white">{{$category->categoria->nombre}}</span>
                                            </div>

                                        </div>
                                    </div>
                                    <!--            <div class="card-body">-->

                                    <!--                <span class="font-weight-normal text-secondary">-->
                                    <!--                    <i class="fa fa-map-marker-alt"></i>-->

                                    <!--                </span>-->
                                    <!--            </div>-->
                                </div>
                            </div>
                        @endif
                    @endforeach

            </div>
        </div>
    </section>
    @endforeach
@endsection
