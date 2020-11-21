@extends('layouts.page.app')
@section('content')
    @foreach($paquete as $paquetes)
        @include('layouts.page.head')
        <header class="header position-relative">
            <div class="overlay"></div>
            <div class="homepage-video">

                {{--            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
                {{--            <iframe src="https://player.vimeo.com/video/381676880?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
{{--                <img src="{{asset('images/placebg.jpg')}}" alt="">--}}
                @foreach($paquetes->imagen_paquetes->take(1) as $imagen)
                    <img src="{{$imagen->nombre}}" alt="{{$paquetes->titulo}}">
                @endforeach

            </div>

            <pop-form></pop-form>

            <div class="position-absolute-bottom l-0 w-25">
                <a href="" class="btn btn-g-yellow btn-block btn-sm font-weight-bold text-white">BOOK NOW</a>
                <a href="" class="btn btn-outline-light btn-block my-2 btn-sm">Download Itinerary PDF</a>
                <div class="rgba-white-9 text-left p-3">
                    <h1 class="h3 font-weight-bold text-g-green">{{$paquetes->titulo}}</h1>
                    <h4 class="font-weight-semi-bold text-g-yellow">Included</h4>
                    <div class="small included-list pl-3">
                        {!! $paquetes->incluye !!}
                    </div>
                </div>
                <a href="" class="btn btn-g-lime btn-lg btn-block my-2">Inquire</a>
            </div>
        </header>


        <section class="my-4">
            <div class="container">
                <div class="row align-items-">
                    <div class="col-8">
                        <span class="badge badge-pill badge-danger">New</span>
                        <small class="t-small-6 font-weight-bold text-muted d-block my-1">SMALL GROUP TOURS | GROUP SIZE: 6-14</small>
                        <h1 class="h3 font-weight-bold">{{$paquetes->titulo}} <span class="text-g-green">{{$paquetes->duracion}} days</span></h1>
                    </div>
{{--                    <div class="col">--}}
{{--                        <div class="font-weight-semi-bold">--}}
{{--                            <span class="@if($paquetes->is_tours == 1) d-none @endif h1">--}}
{{--                                {{$paquetes->duracion}}--}}
{{--                                days--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                        <small class="t-small-6 font-weight-bold text-muted d-block my-1">SMALL GROUP TOURS | GROUP SIZE: 6-14</small>--}}
{{--                        <h1 class="h3 font-weight-bold">{{$paquetes->duracion}} days</h1>--}}
{{--                    </div>--}}

                    <div class="col-4 position-relative">
                        @foreach($paquetes->precio_paquetes->where('estrellas', 2)->sortBy('estrellas') as $precio)
                            @if($precio->precio_d > 0)
                                <span class="badge badge-pill badge-g-yellow">Offer</span> <del class="small font-weight-bold">${{$precio->precio_d}}</del>
                            @else
                                <span class="text-danger">
                                                    Inquire
                                                </span>
                            @endif
                        @endforeach

                        <small class="t-small-6 font-weight-bold text-muted d-block my-1">precio basado en doble acomodacion en categoria 3 estrellas</small>
                        <h2 class="h3 font-weight-bold">
                            @foreach($paquetes->precio_paquetes->where('estrellas', 2)->sortBy('estrellas') as $precio)
                                @if($precio->precio_d > 0)
                                    @php $porcentaje_decuento = ($precio->precio_d * $paquetes->descuento) / 100 @endphp
                                    ${{round($precio->precio_d - $porcentaje_decuento)}}
                                @else
                                    <span class="text-danger">
                                                    Inquire
                                                </span>
                                @endif
                            @endforeach
                                per person
                        </h2>

                            <div class="position-absolute-top">
                                <img src="{{asset('images/descuentos/'.$paquetes->descuento.'.png')}}" alt="" class="w-25 float-right">
                            </div>

                    </div>

{{--                    <div class="col-3 position-relative">--}}

{{--                        <div class="bg-white p-3 text-center rounded shadow-sm">--}}
{{--                            <div class="row align-items-center no-gutters">--}}
{{--                                <div class="col-3">--}}
{{--                                    <img src="https://gotoperu.com.mx/images/icons/whatsapp-i.png" alt="" class="w-100">--}}
{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    <h6 class="font-weight-bold text-secondary">Consulte ahora por Whatsapp</h6>--}}
{{--                                    <a href="https://api.whatsapp.com/send?phone=5117059774" target="_blank" class="text-secondary h4 font-weight-bold stretched-link">+51 1 7059774</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>
            </div>
        </section>

        <section class="box-tab-detail shadow-sm mt-5 mb-4">

            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav class="tabs-detail">
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item text-muted nav-link py-3 rounded-0 active" id="nav-overview-tab" data-toggle="tab" href="#nav-overview" role="tab" aria-controls="nav-overview" aria-selected="true"><i data-feather="book-open" stroke-width="1"></i> Overview</a>
                                <a class="nav-item text-muted nav-link py-3 rounded-0" id="nav-itinerary-tab" data-toggle="tab" href="#nav-itinerary" role="tab" aria-controls="nav-itinerary" aria-selected="false"><i data-feather="map-pin" stroke-width="1"></i> Itinerary</a>
                                <a class="nav-item text-muted nav-link py-3 rounded-0 @if($paquetes->is_tours == 1) d-none @endif" id="nav-prices-tab" data-toggle="tab" href="#nav-prices" role="tab" aria-controls="nav-prices" aria-selected="false"><i data-feather="dollar-sign" stroke-width="1"></i> Prices</a>
                                <a class="nav-item text-muted nav-link py-3 rounded-0" id="before-tab" data-toggle="tab" href="#before" role="tab" aria-controls="before" aria-selected="false"><i data-feather="book-open" stroke-width="1"></i> Before you Go</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-overview" role="tabpanel" aria-labelledby="nav-overview-tab">

                                <div class="row">
                                    <div class="col">
                                        <div class="row mb-4">
                                            <div class="col">
                                                <h3 class="font-weight-semi-bold">Intro</h3>
                                                {!! $paquetes->descripcion !!}
                                            </div>
                                        </div>

{{--                                        <h3 class="font-weight-semi-bold mb-4">Outline</h3>--}}

                                        <div class="timeline-centered">
                                            @php $day = 1; @endphp
                                            @foreach($paquetes->paquete_itinerario as $itinerario)
                                                <article class="timeline-entry">

                                                    <div class="timeline-entry-inner">

                                                        @switch($day)
                                                            @case(1)
                                                                @php $bgit = 'bg-success'; $bgtext = 'Begin' @endphp
                                                            @break

                                                            @case($paquetes->duracion)
                                                                @php $bgit = 'bg-danger' ; $bgtext = 'End' @endphp
                                                            @break

                                                            @default
                                                                @php $bgit = 'bg-secondary'; $bgtext = '' @endphp
                                                        @endswitch

                                                            <div class="timeline-time"><span>Day {{$day}}</span> <span>{{$bgtext}}</span></div>
                                                            <a href="#">
                                                                <div class="timeline-icon {{$bgit}}">
                                                                    <i data-feather="image" class="text-white stretched-link" stroke-width="2" width="15"></i>
                                                                </div>
                                                            </a>
                                                        <div class="timeline-label">
                                                            <h2 class="mb-0 h6 font-weight-semi-bold text-secondary">{{ucwords(strtolower($itinerario->itinerarios->titulo))}}</h2>
                                                        </div>
                                                    </div>

                                                </article>
                                                @php $day++; @endphp
                                            @endforeach


                                            <article class="timeline-entry begin">

                                                <div class="timeline-entry-inner">

                                                    <div class="timeline-icon">
                                                        <i class="entypo-flight"></i>
                                                    </div>

                                                </div>

                                            </article>

                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <h6 class="font-weight-semi-bold mb-3">Your Journey</h6>
                                        <img src="{{$paquetes->imagen}}" alt="" class="w-100 shadow-sm">

                                        <hr>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae consequatur impedit in nisi non nostrum omnis similique veritatis. Assumenda consequuntur error in molestias nemo obcaecati officiis repellendus vel voluptatibus!</p>
                                        <hr>
{{--                                        <h6 class="font-weight-semi-bold mb-3">Climate Charts</h6>--}}
{{--                                        <a href="" class="btn btn-link font-weight-bold text-g-yellow"><i data-feather="sun" stroke-width="1" width="15" height="15"></i> view <i data-feather="arrow-right" stroke-width="1" width="15" height="15"></i></a>--}}
{{--                                        <hr>--}}


                                        <p class="text-left m-0"><i data-feather="code" class="text-primary" stroke-width="1" width="15"></i> <span class="font-weight-bold text-dark">Code:</span> <small class="font-weight-bold text-primary">{{$paquetes->codigo}}</small></p>
                                        <p class="text-left m-0"><i data-feather="map-pin" class="text-success" stroke-width="1" width="15"></i> <span class="font-weight-bold text-dark">Destinations:</span></p>

                                        <ul class="m-0">
                                            @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destinos)
                                                <li class="font-weight-semi-bold text-secondary">{{ucwords(strtolower($paquete_destinos->destinos->nombre))}}</li>
                                            @endforeach
                                        </ul>
{{--                                            <p>{!! $dificultades->dificultad->descripcion !!}</p>--}}

                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="nav-itinerary" role="tabpanel" aria-labelledby="nav-itinerary-tab">
                                <div class="row">
                                    <div class="col">
                                        <div class="row mb-4">
                                            <div class="col">
{{--                                                <h3 class="font-weight-semi-bold">Intro</h3>--}}
{{--                                                {!! $paquetes->descripcion !!}--}}
                                            </div>
                                        </div>

                                        {{--                                        <h3 class="font-weight-semi-bold mb-4">Outline</h3>--}}

                                        <div class="timeline-centered">
                                            @php $day2 = 1; @endphp
                                            @foreach($paquetes->paquete_itinerario as $itinerario)
                                                <article class="timeline-entry mb-5">

                                                    <div class="timeline-entry-inner">

                                                        @switch($day2)
                                                            @case(1)
                                                            @php $bgit = 'bg-success'; $bgtext = 'Begin' @endphp
                                                            @break

                                                            @case($paquetes->duracion)
                                                            @php $bgit = 'bg-danger' ; $bgtext = 'End' @endphp
                                                            @break

                                                            @default
                                                            @php $bgit = 'bg-secondary'; $bgtext = '' @endphp
                                                        @endswitch

                                                        <div class="timeline-time"><span>Day {{$day2}}</span> <span>{{$bgtext}}</span></div>

                                                            <a href="">
                                                                <div class="timeline-icon {{$bgit}}">
                                                                    <i data-feather="image" class="text-white stretched-link" stroke-width="2" width="15"></i>
                                                                </div>
                                                            </a>

                                                        <div class="timeline-label text-secondary">
                                                            <h2 class="mb-0 h6 font-weight-bold text-secondary">{{ucwords(strtolower($itinerario->itinerarios->titulo))}}</h2>
                                                            <hr>
                                                            {!! $itinerario->itinerarios->descripcion !!}
                                                        </div>
                                                    </div>

                                                </article>
                                                @php $day2++; @endphp
                                            @endforeach


                                            <article class="timeline-entry begin">

                                                <div class="timeline-entry-inner">

                                                    <div class="timeline-icon">
                                                        <i class="entypo-flight"></i>
                                                    </div>

                                                </div>

                                            </article>

                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="sticky-top sticky-top-20">
                                            <h6 class="font-weight-semi-bold mb-3">Your Journey</h6>
                                            <img src="{{$paquetes->imagen}}" alt="" class="w-100 shadow-sm">

                                            <hr>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae consequatur impedit in nisi non nostrum omnis similique veritatis. Assumenda consequuntur error in molestias nemo obcaecati officiis repellendus vel voluptatibus!</p>
                                            <hr>
                                            {{--                                        <h6 class="font-weight-semi-bold mb-3">Climate Charts</h6>--}}
                                            {{--                                        <a href="" class="btn btn-link font-weight-bold text-g-yellow"><i data-feather="sun" stroke-width="1" width="15" height="15"></i> view <i data-feather="arrow-right" stroke-width="1" width="15" height="15"></i></a>--}}
                                            {{--                                        <hr>--}}


                                            <p class="text-left m-0"><i data-feather="code" class="text-primary" stroke-width="1" width="15"></i> <span class="font-weight-bold text-dark">Code:</span> <small class="font-weight-bold text-primary">{{$paquetes->codigo}}</small></p>
                                            <p class="text-left m-0"><i data-feather="map-pin" class="text-success" stroke-width="1" width="15"></i> <span class="font-weight-bold text-dark">Destinations:</span></p>

                                            <ul class="m-0">

                                                    @foreach($paquete_destinos->where('idpaquetes', $paquetes->id) as $paque)
                                                        {{ $paque }}
                                                        <li class="font-weight-semi-bold text-secondary">{{ucwords(strtolower($paquete_destinos2->destinos->nombre))}}</li>
                                                    @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-prices" role="tabpanel" aria-labelledby="nav-prices-tab">

                                    <div class="row">
                                        <div class="col">

                                            <h6 class="font-weight-bold text-secondary"><span class="text-g-yellow">Precios:</span></h6>
                                            <p>Los precios estan basados en doble acomodación.</p>
                                            <div class="table-responsive">
                                                <table class="table table-borderless border">
                                                    <thead class="thead-dark">
                                                    <tr class="text-center">
                                                        <th scope="col">Económico</th>
                                                        <th scope="col">Normal</th>
                                                        <th scope="col">Superior</th>
                                                        <th scope="col">Lujo</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="{{asset('images/hotels/2star.jpg')}}" alt="" class="w-100">
                                                        </td>
                                                        <td>
                                                            <img src="{{asset('images/hotels/3star.jpg')}}" alt="" class="w-100">
                                                        </td>
                                                        <td>
                                                            <img src="{{asset('images/hotels/4star.jpg')}}" alt="" class="w-100">
                                                        </td>
                                                        <td>
                                                            <img src="{{asset('images/hotels/5start.jpg')}}" alt="" class="w-100">
                                                        </td>
                                                    </tr>
                                                    <tr class="text-center">
                                                        @foreach($paquetes->precio_paquetes->sortBy('estrellas') as $precio)
                                                            @php $porcentaje_decuento = ($precio->precio_d * $paquetes->descuento) / 100 @endphp
                                                            @if($precio->precio_d > 0)
                                                                <td><sup><small><del>${{$precio->precio_d}}</del></small></sup> ${{round($precio->precio_d - $porcentaje_decuento)}}<small>USD</small></td>
                                                            @else
                                                                <td class="font-weight-bold text-danger">Inquire</td>
                                                            @endif
                                                        @endforeach

                                                    </tr>
                                                    <tr>
                                                        @foreach($paquetes->precio_paquetes->sortBy('estrellas') as $precio)
                                                            <td>
                                                                @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                                    @foreach($hoteles_destinos->where('iddestinos', $paquete_destino->destinos->id) as $hoteles_destino)
                                                                        @foreach($hoteles->where('id', $hoteles_destino->hotel->id)->where('estrellas', $precio->estrellas) as $hotel)
                                                                            <a href="{{$hoteles_destino->hotel->url}}" target="_blank" data-toggle="tooltip" data-placement="top" title="{{$hotel->servicios}}"><small class="d-block"><i class="fas fa-angle-right"></i> {{ucwords(strtolower($hotel->nombre))}} <i class="text-secondary">({{ucwords(strtolower($paquete_destino->destinos->nombre))}})</i></small></a>
                                                                        @endforeach
                                                                    @endforeach
                                                                @endforeach
                                                            </td>
                                                        @endforeach
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="alert alert-primary">
                                                <p class="m-0">*Si tiene algún hotel en especifico con gusto lo prepararemos una cotización personalizada.</p>
                                            </div>
                                        </div>
                                    </div>

                                <div class="row">
                                    <div class="col">





                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="before" role="tabpanel" aria-labelledby="before-tab">
                                <div class="row">
                                    <div class="col d-flex">
                                        <div class="card alert-g-yellow">
{{--                                            <div class="card-header">--}}
{{--                                                --}}
{{--                                            </div>--}}
                                            <div class="card-body">
                                                <h5 class="card-title">Essential Information</h5>
                                                <p class="card-text small">About your destination(s); including vaccinations; baggage restrictions; a packing list; and tipping guidelines.</p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="" class="btn btn-link text-danger">Download PDF</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col d-flex">
                                        <div class="card alert-danger">
                                            <div class="card-body">
                                                <h5 class="card-text">Preparing for Your Journey</h5>
                                                <p class="card-text small">Quick travel tips to ensure you are prepared for your journey.</p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="" class="btn btn-link text-danger">Download PDF</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col d-flex">
                                        <div class="card alert-info">
                                            <div class="card-body">
                                                <h5 class="card-title">Passports & Visas</h5>
                                                <p class="card-text small">See passport requirements and GOTOPERU recommendations for obtaining necessary visas.</p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="" class="btn btn-link text-danger">Download PDF</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    @endforeach
@endsection
