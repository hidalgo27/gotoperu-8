@extends('layouts.page.app')
@section('content')
    @include('layouts.page.head')
    @foreach($destino as $destinos)
    <header class="header vh-70">
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
            {{--                        <h2 class="fw-lighter h4">Los mejores destinos en Perú operado por los mejores asesores de viaje.</h2>--}}
            {{--                        --}}{{--                    <a href="#consulte" class="btn btn-dark btn-lg h2 fw-bold mt-3">Diseña tu Viaje</a>--}}
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
{{--            <div class="position-absolute bottom-0 r-0 w-50">--}}


{{--                <div class="rgba-white-9 shadow-sm text-center">--}}
{{--                    <h1 class="h3 fw-bold t-corrido py-3">Destinations in {{ucwords(strtolower($destinos->nombre))}}</h1>--}}
{{--                    --}}{{--                    <h4 class="fw-semi-bold text-g-yellow">Included</h4>--}}

{{--                    @foreach($ubicacion->results as $ubicacions)--}}
{{--                        @foreach($ubicacions->geometry->location as  $ubicacion2)--}}
{{--                            @php $ubicacion3[] = $ubicacion2; @endphp--}}
{{--                        @endforeach--}}
{{--                    @endforeach--}}


{{--                    <div id="map"></div>--}}

{{--                </div>--}}


{{--            </div>--}}
        </div>
    </header>

    <section class="bg-white py-5" id="title_section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-7 col-md-8 col-xl-9">
                    <div class="row g-2" id="tours">
                        <div class="col-12">
                            {{--<h3 class="text-g-yellow fw-bold">Tours</h3>--}}
                            {{--                            <h1 class="text-secondary fw-bold">Cusco Tours</h1>--}}
                            {{$destinos->resumen}}
                            <div class="alert alert-g-yellow text-center rounded-0 my-5 shadow" role="alert">
                                <p class="fw-bold m-0">
                                    Operadores Locales en Perú: Los mejores guias de la región, encantadores hoteles, excursiones únicas, y amistosos representantes.
                                    #gotoperu #TuconexionconPeru
                                </p>
                            </div>
                        </div>

                        @foreach($paquetes_de as $paquetes_des)
                            @if(isset($paquetes_des->destinos))
                                @foreach($paquete->where('id',$paquetes_des->idpaquetes)->sortBy("duracion") as $paquetes)

                                    <div class="col-12 col-sm-12 col-md-6">
                                        <div class="w-100 shadow-sm">
                                            <div class="header-img-packages bx-img-destinohome position-relative">
                                                <a href="{{route('detail_path', $paquetes->url)}}"><img class="w-100" src="{{asset('images/p-cusco-1.jpg')}}" alt=""></a>
                                                <div class="position-absolute bottom-0 rgba-black-gradient-bottom p-3">
                                                    <h5 class="text-white h6 fw-bold pb-2 m-0">{{$paquetes->titulo}}</h5>
                                                    <p class="text-white lh-sm small">
                                                        @php
                                                            $i = 1;
                                                            $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                                        @endphp
                                                        @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                            {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@else.@endif
                                                            @php $i++; @endphp
                                                        @endforeach
                                                    </p>
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
                            @endif
                        @endforeach
                    </div>

                    <div class="row pt-5" id="maps">
                        <div class="col-12">
                            <h3 class="fw-bold">Maps</h3>
                            <div class="line-subtitle"></div>
                        </div>
                        <div class="col-12">

                            @foreach($ubicacion->results as $ubicacions)
                                @foreach($ubicacions->geometry->location as  $ubicacion2)
                                    @php $ubicacion3[] = $ubicacion2; @endphp
                                @endforeach
                            @endforeach


                            <div id="map"></div>

                        </div>
                    </div>

                    <div class="row pt-5" id="clima">

                        <div class="col-12">
                            <h3 class="fw-bold">Clima</h3>
                            <div class="line-subtitle"></div>
                        </div>
                        <div class="col-12">
                            <a class="weatherwidget-io" href="https://forecast7.com/en/n13d53n71d97/cusco/?unit=us" data-label_1="CUSCO" data-label_2="WEATHER" data-theme="original" >Cusco</a>
                        </div>

                    </div>

                    <div class="row" id="photos">

                    </div>

                </div>
                <div class="col-12 col-sm-5 col-md-4 col-xl-3 d-none d-sm-block">
                    <div class="sticky-top">
                        <nav id="navbar-scroll" class="navbar navbar-light nav-goto-side w-100">
                            <nav class="nav nav-pills flex-column w-100">
                                <a class="nav-link active text-capitalize" href="#tours">Cusco Tours</a>
                                <a class="nav-link" href="#maps">Localizacion</a>
                                {{--                                <a class="nav-link {{$h_resumen}}" href="#history">History</a>--}}
                                {{--                                <a class="nav-link {{$h_resumen}}" href="#geography">Geography</a>--}}
                                {{--                                <a class="nav-link" href="#hotels">Hoteles</a>--}}
                                <a class="nav-link" href="#clima">Clima</a>
                                {{--<a class="nav-link" href="#photos">Photos</a>--}}
                            </nav>
                        </nav>

{{--                        <div>--}}
{{--                            <div class="tl-1"></div>--}}
{{--                            <div class="tl-2"><img src="{{asset('images/logo-ave-grey.png')}}" alt="" class="w-100"></div>--}}
{{--                            <div class="tl-3"></div>--}}
{{--                        </div>--}}
                        <hr>

                        <div class="row mt-4">
                            <div class="col">
                                <ul class="list-group list-group-flush">
                                    @foreach($destinos_all as $destinos_alls)
                                        <a href="{{$destinos_alls->url}}" class="list-group-item fw-bold text-secondary">
                                            <img src="{{$destinos_alls->imagen}}" alt="" width="40" height="40" class="rounded-circle" data-toggle="tooltip" data-placement="top" title="{{$destinos_alls->nombre}}">
                                            <span class="pl-3">{{$destinos_alls->nombre}}</span>
                                        </a>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>

    @endforeach

@endsection

@push('scripts')
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDf1RN8KKGNdS-iEarIgXpaqa-khw7EmZI&callback=initMap">
    </script>
    <script>
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
