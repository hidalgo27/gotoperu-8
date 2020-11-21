@extends('layouts.page.app')
@section('content')
    @include('layouts.page.head')
    @foreach($destino as $destinos)
    <header class="header">
        <div class="overlay"></div>
        <div class="homepage-video homepage-image">
            {{--            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
            {{--            <iframe src="https://player.vimeo.com/video/381676880?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
            @foreach($destinos->destino_imagen->take(1) as $imagen)
                <img src="{{$imagen->nombre}}" alt="{{$destinos->nombre}}">
            @endforeach

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
            <div class="position-absolute-bottom r-0 w-50">


                <div class="rgba-white-9 shadow-sm text-center">
                    <h1 class="h3 font-weight-bold t-corrido py-3">Destinations in {{ucwords(strtolower($destinos->nombre))}}</h1>
                    {{--                    <h4 class="font-weight-semi-bold text-g-yellow">Included</h4>--}}

                    @foreach($ubicacion->results as $ubicacions)
                        @foreach($ubicacions->geometry->location as  $ubicacion2)
                            @php $ubicacion3[] = $ubicacion2; @endphp
                        @endforeach
                    @endforeach


                    <div id="map"></div>

                </div>


            </div>
        </div>
    </header>

    <section class="my-0 contenido_init">
        <div class="container-fluid p-0">
            <div class="row no-gutters align-items-center align-items-resumen bg-white">
                @foreach($paquetes_de as $paquetes_des)
                    @if(isset($paquetes_des->destinos))
                        @foreach($paquete->where('id',$paquetes_des->idpaquetes)->sortBy("duracion") as $paquetes)

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex">
                                <div class=" w-100">
                                    <div class="header-img-packages position-relative">
                                        <a href="{{route('detail_path', $paquetes->url)}}"><img class="card-img-top" src="{{$paquetes->imagen}}" alt=""></a>
                                        <div class="position-absolute-top">
                                            <img src="{{asset('images/descuentos/'.$paquetes->descuento.'.png')}}" alt="" class="w-25 float-right">
                                            {{--                            <div class="box-offers-circle rounded-circle bg-g-dark clearfix text-center p-2">--}}
                                            {{--                                <span class="mt-3 d-block h4 font-weight-bold text-warning">25%<small class="d-block t-small-6 font-weight-bold">OFF</small></span>--}}
                                            {{--                            </div>--}}
                                        </div>
                                        <div class="position-absolute-bottom rgba-black-gradient px-3 py-2">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <p class="font-weight-bold text-white small pr-2 m-0">{{ $paquetes->duracion }} Días</p>
                                                </div>
                                                <div class="col-auto">
                                                    @foreach($paquetes->precio_paquetes as $precio)
                                                        @if($precio->estrellas == 2)
                                                            @if($precio->precio_d > 0)
                                                                @php $porcentaje_decuento = ($precio->precio_d * $paquetes->descuento) / 100 @endphp
                                                                {{--                                                                <p class="text-info font-weight-bold m-0 h5"><small><sup>form $</sup></small>{{$precio->precio_d}}<small>USD</small></p>--}}
                                                                {{--                                        <p class="font-weight-bold text-primary h5 m-0"><sup class="small"><small>desde</small></sup> ${{$precio->precio_d}}<small>USD</small></p>--}}
                                                                <div class="h4 font-weight-bold"><sup><del class="text-white">${{$precio->precio_d}}</del></sup> <span class="text-g-yellow">${{round($precio->precio_d - $porcentaje_decuento)}}</span></div>
                                                            @else
                                                                <span class="text-danger">Consulte</span>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>

                                            <h5 class="text-white m-0">{{$paquetes->titulo}}</h5>
                                            <small class="text-white">
                                                @php
                                                    $i = 1;
                                                    $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                                @endphp
                                                @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                    {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@else.@endif
                                                    @php $i++; @endphp
                                                @endforeach
                                            </small>
                                        </div>
                                    </div>
                                    <!--            <div class="card-body">-->

                                    <!--                <span class="font-weight-normal text-secondary">-->
                                    <!--                    <i class="fa fa-map-marker-alt"></i>-->

                                    <!--                </span>-->
                                    <!--            </div>-->
{{--                                    <div class="card-footer bg-white">--}}
{{--                                        <div class="row align-items-center">--}}
{{--                                            <div class="col">--}}
{{--                                                <p class="font-weight-bold h5 m-0">{{$paquetes->duracion}} Días</p>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-auto">--}}
{{--                                                @foreach($paquetes->precio_paquetes as $precio)--}}
{{--                                                    @if($precio->estrellas == 2)--}}
{{--                                                        @if($precio->precio_d > 0)--}}
{{--                                                            --}}{{--                                                                <p class="text-info font-weight-bold m-0 h5"><small><sup>form $</sup></small>{{$precio->precio_d}}<small>USD</small></p>--}}
{{--                                                            <p class="font-weight-bold text-primary h5 m-0"><sup class="small"><small>desde</small></sup> ${{$precio->precio_d}}<small>USD</small></p>--}}
{{--                                                        @else--}}
{{--                                                            <span class="text-danger">Consulte</span>--}}
{{--                                                        @endif--}}
{{--                                                    @endif--}}
{{--                                                @endforeach--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>
    </section>





    <div class="alert alert-secondary alert-dismissible show m-0 elemento rounded-0 p-1" role="alert" id="aviso">
        <div class="container">
            <div class="row align-items-center">
                <div class="col text-center">
                    @foreach($destinos_all as $destinos_alls)

                    <a href="{{$destinos_alls->url}}">
                        <img src="{{$destinos_alls->imagen}}" alt="" width="60" height="60" class="@if($destinos_alls->nombre !== $destinos->nombre) img-gray @endif rounded-circle" data-toggle="tooltip" data-placement="top" title="{{ucwords(strtolower($destinos_alls->nombre))}}">
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    @endforeach
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#aviso').hide(0);
            $(window).scroll(function(){
                var windowHeight = $(window).scrollTop();
                var contenido_init = $(".contenido_init").offset();
                contenido_init = contenido_init.top;
                if(windowHeight >= contenido_init  ){
                    $('#aviso').fadeIn(500);
                }else{
                    $('#aviso').fadeOut(500);
                }
            });
        });

        var swiper = new Swiper('.swiper-container-gallery', {
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
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


        function initMap() {
            var lat1 = parseFloat("{{$ubicacion3[0]}}");
            var lng1 = parseFloat("{{$ubicacion3[1]}}");
            var uluru = {lat: lat1, lng: lng1};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 6,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');


    </script>


@endpush
