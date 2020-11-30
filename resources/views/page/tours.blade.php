@extends('layouts.page.app')
@section('content')
    @include('layouts.page.head')
    <header class="header">
        <div class="overlay"></div>
        <div class="homepage-video">
            <img src="http://gotoperu-mx.s3-us-west-1.amazonaws.com/package/slider/mapi2_1574182691.jpg" alt="">
        </div>
        <div class="position-absolute w-25 right-0 p-5 h-100 bg-e-yellow mr-5">
            <h1 class="h3 font-weight-bold text-white py-3">PERU TOURS FEATURED</h1>
            <h4 class="font-weight-semi-bold text-white pb-3">Itineraries to inspire</h4>
            <p class="text-white"> GOTOPERU have tailored a few signature itineraries just for you!!
                Please browse them below at your leisure and see what inspires you.
        </div>
    </header>

    <section class="mt-5">
        <div class="container">
            <div class="row no-gutters pb-4">
                <div class="col">
                    <h2 class="font-weight-bold h4">Peru <span class="text-g-yellow">tours</span></h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-gutters">
                @foreach($paquetes as $paquete)
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4 d-flex p-2">
                        <div class=" w-100">
                            <div class="header-img-packages bx-img-destinohome position-relative">
                                <a href="{{route('detail_path', $paquete->url)}}"><img class="w-100" src="{{$paquete->imagen}}" alt=""></a>
                                <div class="position-absolute-bottom rgba-black-gradient-bottom p-2">
                                    <h5 class="text-white h6 font-weight-bold text-center pb-2 m-0">{{$paquete->titulo}}</h5>

                                    @foreach($paquete->precio_paquetes as $precio)
                                        @if($precio->estrellas == 2)
                                            @if($precio->precio_d > 0)
                                                <p class="font-weight-bold text-g-yellow text-center h6 pt-1 m-0">
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

    </section>
@endsection
