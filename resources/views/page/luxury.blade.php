@extends('layouts.page.app')
@section('content')
    @include('layouts.page.head')
    @foreach($categoria as $categorias)
    <header class="header">
        <div class="overlay"></div>
        <div class="homepage-video">
            <img src="{{asset('images/luxury.jpg')}}" alt="">
        </div>
        <div class="position-absolute w-25 left-0 p-5 h-100 bg-e-cream ml-5">
            <h1 class="h3 font-weight-bold text-g-orange py-3">LUXURY PACKAGES</h1>
            <h4 class="font-weight-semi-bold text-dark pb-3">Itineraries to inspire</h4>
            <p>Exclusive experiences, unparalleled service, and attention to detail—this is a GOTOPERU luxury vacation.
                Personalized attention of your vacation consultant plus  top guides,local team, authentic experiences, and our local expertise of the Peru Coast, Andes and Amazon.</p>
        </div>

    </header>

    <section class="mt-5">
        <div class="container">
            <div class="row no-gutters pb-4">
                <div class="col">
                    <h2 class="font-weight-bold h4">Get inspired with our sample trips below.</h2>
                    <p>You can have any trip tailor made for your private travel. Any number of days. Any departure date. Any experience you want.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-gutters">
                    @foreach($categoria_luxury as $category)

                        @if (isset($category->categoria))
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4 d-flex p-2">
                                <div class="w-100">
                                    <div class="header-img-packages bx-img-destinohome position-relative">
                                        <a href="{{route('detail_path', $category->paquete->url)}}"><img class="w-100" src="{{$category->paquete->imagen}}" alt=""></a>
                                        <div class="position-absolute-bottom rgba-black-gradient-bottom px-3 py-3">
                                            <h5 class="text-white h6 font-weight-bold pb-2 m-0">{{$category->paquete->url}}</h5>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <p class="font-weight-bold text-white h6 pr-2 m-0">{{ $category->paquete->duracion }} days</p>
                                                </div>
                                                <div class="col-auto">

                                                    @foreach($category->paquete->precio_paquetes as $precio)
                                                        @if($precio->estrellas == 2)
                                                            @if($precio->precio_d > 0)
                                                                <p class="font-weight-bold small text-white m-0">
                                                                    <sup class="small"><small>from</small></sup> ${{$precio->precio_d}}<small>USD</small>
                                                                </p>

                                                            @else
                                                                <span class="text-danger font-weight-bold">inquire</span>
                                                            @endif
                                                        @endif
                                                    @endforeach



                                                </div>
                                            </div>

                                            {{--                                                <small class="text-white">Cusco, Machu Picchu.</small>--}}
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
