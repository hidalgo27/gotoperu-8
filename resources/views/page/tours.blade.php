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
                                <h1 class="h3 font-weight-bold text-g-green py-3">PERU TOURS FEATURED</h1>
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

    <section>
        <div class="container">
            <div class="row">
                @foreach($paquetes as $paquete)



                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4 d-flex">
                        <div class=" w-100">
                            <div class="header-img-packages bx-img-destinohome position-relative">
                                <a href="{{route('detail_path', $paquete->url)}}"><img class="w-100" src="{{$paquete->imagen}}" alt=""></a>
                                <div class="position-absolute-bottom rgba-black-gradient px-3 py-3">
                                    <div class="row no-gutters align-items-center">
{{--                                        <div class="col-auto">--}}
{{--                                            <p class="font-weight-bold text-white small pr-2 m-0">{{ $paquete->duracion }} Días</p>--}}
{{--                                        </div>--}}
                                        <div class="col-auto">


                                        </div>
                                    </div>

                                    <h5 class="text-white m-0">{{$paquete->titulo}}</h5>
{{--                                    <small class="text-white">--}}
{{--                                        @php--}}
{{--                                            $i = 1;--}}
{{--                                            $num_des = count($destinations->where('idpaquetes',$paquete->id));--}}
{{--                                        @endphp--}}
{{--                                        @foreach($destinations->where('idpaquetes',$paquete->id) as $paquete_destino)--}}
{{--                                            {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@else.@endif--}}
{{--                                            @php $i++; @endphp--}}
{{--                                        @endforeach--}}
{{--                                    </small>--}}
                                </div>
                                <div class="position-absolute-top p-2 text-center">
                                    <div class="box-offers-circle mx-auto rounded-circle bg-info clearfix text-center p-2">
                                        <span class="mt-4 d-block small font-weight-bold text-white">
                                            @foreach($paquete->precio_paquetes as $precio)
                                                @if($precio->estrellas == 2)
                                                    @if($precio->precio_d > 0)

                                                        <p class="font-weight-bold text-white h6 pt-1 m-0">
                                                            ${{$precio->precio_d}}
                                                        </p>

                                                    @else
                                                        <span class="text-danger">inquire</span>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </span>
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
