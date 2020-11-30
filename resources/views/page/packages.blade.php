@extends('layouts.page.app')
@section('content')
    @include('layouts.page.head')
    <header class="header">
        <div class="overlay"></div>
        <div class="homepage-video">
            <img src="http://gotoperu-mx.s3-us-west-1.amazonaws.com/package/slider/mapi2_1574182691.jpg" alt="">
        </div>
        <div class="position-absolute w-25 left-0 p-5 h-100 bg-e-dark ml-5">
            <h1 class="h3 font-weight-bold text-g-yellow py-3">PERU TRAVEL FEATURED PACKAGES</h1>
            <h4 class="font-weight-semi-bold text-g-green pb-3">Itineraries to inspire</h4>
            <p class="text-white"> GOTOPERU have tailored a few signature itineraries just for you!!
                Please browse them below at your leisure and see what inspires you.
        </div>
    </header>

    <section class="mt-5">
        <div class="container">
            <div class="row no-gutters pb-4">
                <div class="col">
                    <h2 class="font-weight-bold h4">Peru travel <span class="text-g-green">packages</span></h2>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row no-gutters">
                @foreach($paquete as $paquetes)
                <div class="col-12 col-sm-12 col-md-4 d-flex p-2">
                    <div class="w-100 shadow-sm">
                        <div class="header-img-packages bx-img-destinohome position-relative">
                            <a href="{{route('detail_path', $paquetes->url)}}"><img class="w-100" src="{{$paquetes->imagen}}" alt=""></a>
                            <div class="position-absolute-bottom rgba-black-gradient-bottom p-3">
                                <h5 class="text-white h6 font-weight-bold pb-2 m-0">{{$paquetes->titulo}}</h5>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <p class="font-weight-bold text-white h6 pr-2 m-0">{{$paquetes->duracion}} days</p>
                                    </div>
                                    <div class="col-auto">
                                        @foreach($paquetes->precio_paquetes as $precio)
                                            @if($precio->estrellas == 3)
                                                @if($precio->precio_d > 0)
                                                    <p class="font-weight-bold h6 text-g-yellow m-0">
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

    </section>
@endsection
