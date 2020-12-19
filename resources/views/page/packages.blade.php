@extends('layouts.page.app')
@section('content')
    @include('layouts.page.head')
    <header class="header">
        <div class="overlay"></div>
        <div class="homepage-video">
            <img src="http://gotoperu-mx.s3-us-west-1.amazonaws.com/package/slider/mapi2_1574182691.jpg" alt="">
        </div>
        <div class="position-absolute w-25 left-0 p-5 h-100 bg-e-dark ml-5">
            <h1 class="h3 fw-bold text-g-yellow py-3">PERU TRAVEL FEATURED PACKAGES</h1>
            <h4 class="fw-semi-bold text-g-green pb-3">Itineraries to inspire</h4>
            <p class="text-white"> GOTOPERU have tailored a few signature itineraries just for you!!
                Please browse them below at your leisure and see what inspires you.
        </div>
    </header>

    <section class="bg-white">
        <div class="container">
            <div class="row py-5">
                <div class="col">
                    <h1 class="text-g-yellow fw-bold text-center">Viajes a Perú <span class="text-g-green">PAQUETES DESTACADOS</span></h1>
                    <p class="text-center m-0">Nuestros paquetes más populares <b>En Perú</b>, Estos <strong>paquetes</strong> pueden ser usados como referencia para personalizar tu viaje. En <strong>GOTOPERU</strong> Nos especializamos en la elaboración de experiencias personalizadas basadas en sus preferencias; invitamos a revisar estos programas para tener una idea de los destinos más importantes, por ejemplo, Machu Picchu, Lake Titicaca, Nazca y el Amazonas.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-4">
                <div class="container sticky-top">
                    <div class="row">
                        <div class="col">
                            <div id="navbar-scroll" class="list-group list-group-horizontal text-center" id="navbar-scroll">
                                <a class="list-group-item list-group-item-action py-1" href="#travel_packages">
                                    Peru travel
                                </a>
                                <a class="list-group-item list-group-item-action py-1" href="#machupicchu_tours">Machu Picchu Tours</a>
                                <a class="list-group-item list-group-item-action py-1" href="#luxury_travel">Luxury Travel</a>
                            </div>

                        </div>
                    </div>
                </div>


        <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example">
            <div class="container-fluid pt-5" id="travel_packages">
                <div class="row g-2">
                    <div class="col-12 pt-1 px-5">
                        <h2 class="fw-bold h4">Peru travel <span class="text-g-green">packages</span></h2>
                    </div>
                    @foreach($paquete as $paquetes)
                        <div class="col-12 col-sm-12 col-md-3">
                            <div class="w-100 shadow-sm">
                                <div class="header-img-packages bx-img-destinohome position-relative">
                                    <a href="{{route('detail_path', $paquetes->url)}}"><img class="w-100" src="{{asset('images/p-cusco-1.jpg')}}" alt=""></a>
                                    <div class="position-absolute bottom-0 rgba-black-gradient-bottom p-3">
                                        <h5 class="text-white h6 fw-bold pb-2 m-0">{{$paquetes->titulo}}</h5>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <p class="fw-bold text-white h6 pr-2 m-0">{{$paquetes->duracion}} days</p>
                                            </div>
                                            <div class="col-auto">
                                                @foreach($paquetes->precio_paquetes as $precio)
                                                    @if($precio->estrellas == 3)
                                                        @if($precio->precio_d > 0)
                                                            <p class="fw-bold h6 text-g-yellow m-0">
                                                                <sup class="small">
                                                                    <small>
                                                                        {{--                                                                <del>500</del>--}}
                                                                        from
                                                                    </small>
                                                                </sup>
                                                                ${{$precio->precio_d}}
                                                                <small>USD</small>
                                                            </p>
                                                        @else
                                                            <span class="text-danger">Consulte</span>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>



                <div class="container-fluid pt-5" id="machupicchu_tours">
                    <div class="row no-gutters">
                        <div class="col-12 pt-1 px-5">
                            <h2 class="fw-bold h4">Tours <span class="text-g-green">Machu Picchu</span></h2>
                        </div>
                        @foreach($paquetes_t as $paquete)
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 d-flex p-2">
                                <div class=" w-100">
                                    <div class="header-img-packages bx-img-destinohome position-relative">
                                        <a href="{{route('detail_path', $paquete->url)}}"><img class="w-100" src="{{$paquete->imagen}}" alt=""></a>
                                        <div class="position-absolute-bottom rgba-black-gradient-bottom p-2">
                                            <h5 class="text-white h6 fw-bold text-center pb-2 m-0">{{$paquete->titulo}}</h5>

                                            @foreach($paquete->precio_paquetes as $precio)
                                                @if($precio->estrellas == 2)
                                                    @if($precio->precio_d > 0)
                                                        <p class="fw-bold text-g-yellow text-center h6 pt-1 m-0">
                                                            ${{$precio->precio_d}}
                                                        </p>
                                                    @else
                                                        <span class="text-danger">inquire</span>
                                                    @endif
                                                @endif
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>

                <div class="container-fluid pt-5" id="luxury_travel">
                    <div class="row no-gutters">
                        <div class="col-12 pt-1 px-5">
                            <h2 class="fw-bold h4">Luxury <span class="text-g-green">Packages</span></h2>
                        </div>
                        @foreach($categoria_luxury as $category)

                            @if (isset($category->categoria))
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4 d-flex p-2">
                                    <div class="w-100">
                                        <div class="header-img-packages bx-img-destinohome position-relative">
                                            <a href="{{route('detail_path', $category->paquete->url)}}"><img class="w-100" src="{{$category->paquete->imagen}}" alt=""></a>
                                            <div class="position-absolute-bottom rgba-black-gradient-bottom px-3 py-3">
                                                <h5 class="text-white h6 fw-bold pb-2 m-0">{{$category->paquete->url}}</h5>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <p class="fw-bold text-white h6 pr-2 m-0">{{ $category->paquete->duracion }} days</p>
                                                    </div>
                                                    <div class="col-auto">

                                                        @foreach($category->paquete->precio_paquetes as $precio)
                                                            @if($precio->estrellas == 2)
                                                                @if($precio->precio_d > 0)
                                                                    <p class="fw-bold small text-white m-0">
                                                                        <sup class="small"><small>from</small></sup> ${{$precio->precio_d}}<small>USD</small>
                                                                    </p>

                                                                @else
                                                                    <span class="text-danger fw-bold">inquire</span>
                                                                @endif
                                                            @endif
                                                        @endforeach



                                                    </div>
                                                </div>

                                                {{--                                                <small class="text-white">Cusco, Machu Picchu.</small>--}}
                                            </div>

                                        </div>
                                        <!--            <div class="card-body">-->

                                        <!--                <span class="fw-normal text-secondary">-->
                                        <!--                    <i class="fa fa-map-marker-alt"></i>-->

                                        <!--                </span>-->
                                        <!--            </div>-->
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>

        </div>

    </section>

@endsection
