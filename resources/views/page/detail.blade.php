@extends('layouts.page.app')
@section('content')
    @foreach($paquete as $paquetes)
        @include('layouts.page.head')
        <header class="header vh-70">
            <div class="overlay"></div>
            <div class="homepage-video">
                @foreach($paquetes->imagen_paquetes->take(1) as $imagen)
                    <img src="{{$imagen->nombre}}" alt="{{$paquetes->titulo}}">
                @endforeach
            </div>
            <div class="container">
                <div class="row vh-100 justify-content-end">
                    <div class="col-4 z-index-2 d-flex">
                        <div class="bg-e-amber p-5">
{{--                        <div class="w-25 p-5 h-100 ">--}}
                            <p class="fw-bold t-small-6 mb-2 text-g-green">PACKAGE</p>
                            <h1 class="fs-3 fw-bold">{{$paquetes->titulo}}</h1>
                            <div class="fw-bold my-1">
                                @foreach($paquetes->precio_paquetes->where('estrellas', 2)->sortBy('estrellas') as $precio)
                                    @if($precio->precio_d > 0)
                                        From ${{$precio->precio_d}} USD / {{$paquetes->duracion}} days
                                    @else
                                        <span class="text-danger">
                                                    Inquire
                                                </span>
                                    @endif
                                @endforeach
                            </div>
                            <p class="lh-sm"> Lima, cusco, machu picchu, puno</p>
                            <div class="position-relative mt-4">
                                <p class="fw-bold fs-5 lh-sm">We can customize any itinerary.</p>
                                <itinerary-component :paquetes-titulo="{{json_encode($paquetes->titulo)}}" :paquetes-duracion="{{$paquetes->duracion}}"></itinerary-component>
                            </div>
                            <div class="row justify-content-center mt-4">
                                <div class="col-7">
                                    <img src="https://gotoperu.com.mx/images/icons/trust.png" alt="" class="w-100">
                                </div>
                            </div>
{{--                        </div>--}}
                        </div>
                    </div>
                </div>
            </div>

{{--            <div class="container position-relative z-index-2 h-100">--}}
{{--                <div class="row d-flex h-75 text-center align-items-end">--}}
{{--                    <div class="col w-100 text-white pt-5 rounded">--}}
{{--                        <h1 class="h1 fw-bold text-white">{{$paquetes->titulo}}</h1>--}}
{{--                        <h4 class="fw-bold text-g-yellow">{{$paquetes->duracion}} days</h4>--}}
{{--                        --}}{{--                        <p class="fw-lighter">{!! $paquetes->descripcion !!}</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </header>


{{--        <section class="fixed-bottom f-2030">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col">--}}
{{--                        <itinerary-component :paquetes-titulo="{{json_encode($paquetes->titulo)}}" :paquetes-duracion="{{$paquetes->duracion}}"></itinerary-component>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

        <section class="my-4">
            <div class="container">
                <div class="row align-items-">
                    <div class="col-8">
{{--                        <span class="badge badge-pill badge-danger">New</span>--}}
{{--                        <small class="t-small-6 fw-bold text-muted d-block my-1">SMALL GROUP TOURS | GROUP SIZE: 6-14</small>--}}
{{--                        <h1 class="h3 fw-bold">{{$paquetes->titulo}} <span class="text-g-green">{{$paquetes->duracion}} days</span></h1>--}}
                        <h3 class="fw-bold small my-5 text-g-orange">OVERVIEW</h3>
                        <p class="fw-normal lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur culpa ipsum iste itaque nostrum praesentium quo quos sed! Ab accusamus consequuntur doloribus eos exercitationem id laudantium officiis velit? Itaque, obcaecati?</p>

                        <article class="border-top border-bottom py-4 my-4">
                            <div class="row align-items-center">
                                <div class="col-2 fw-bold">
                                    <i class="bi bi-geo"></i> route
                                </div>
                                <div class="col">
                                    <div class="itinerary-summary fs-7">
                                        @foreach($paquetes->paquete_itinerario as $itinerario)
                                            <span class="fw-bold">Day 1 :</span> {{ucwords(strtolower($itinerario->itinerarios->titulo))}} <br>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </article>

                        <p class="fw-bold fs-5">Our tours are Fully Customizable and leave 365 days a year! Our travel experts are happy to help.</p>
                    </div>
{{--                    <div class="col">--}}
{{--                        <div class="font-weight-semi-bold">--}}
{{--                            <span class="@if($paquetes->is_tours == 1) d-none @endif h1">--}}
{{--                                {{$paquetes->duracion}}--}}
{{--                                days--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                        <small class="t-small-6 fw-bold text-muted d-block my-1">SMALL GROUP TOURS | GROUP SIZE: 6-14</small>--}}
{{--                        <h1 class="h3 fw-bold">{{$paquetes->duracion}} days</h1>--}}
{{--                    </div>--}}

                    <div class="col-4">
                        <div class="sticky-top">
                            <img src="https://www.peruforless.com/content-files/uploads/map-special-1-mini.jpg" alt="" class="w-100">
                        </div>
                    </div>

{{--                    <div class="col-3 position-relative">--}}

{{--                        <div class="bg-white p-3 text-center rounded shadow-sm">--}}
{{--                            <div class="row align-items-center no-gutters">--}}
{{--                                <div class="col-3">--}}
{{--                                    <img src="https://gotoperu.com.mx/images/icons/whatsapp-i.png" alt="" class="w-100">--}}
{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    <h6 class="fw-bold text-secondary">Consulte ahora por Whatsapp</h6>--}}
{{--                                    <a href="https://api.whatsapp.com/send?phone=5117059774" target="_blank" class="text-secondary h4 fw-bold stretched-link">+51 1 7059774</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>
            </div>
        </section>


        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="fw-bold small my-5 text-g-orange">DESTINATION HIGHLIGHTS</h3>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-0">

                        <div class="row position-relative g-0">
{{--                            <div class="col-4">--}}
{{--                                <div class="bg-e-amber w-100 position-relative overflow-hidden">--}}
{{--                                    @foreach($paquete_destinos->where('idpaquetes',$paquetes->id)->take(1) as $paquete_destinos_c)--}}

{{--                                        <img src="{{$paquete_destinos_c->destinos->imagen}}" alt="" class="w-100">--}}
{{--                                        <div class="position-absolute bottom-0 w-100 bg-dark text-white p-2 fw-bold small">--}}
{{--                                            {{$paquete_destinos_c->destinos->nombre}}--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="col-9">
                                <div class="row justify-content-center g-2">
                                    @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquetes_destinos)

                                        {{--                    {{$paquetes_destinos->destinos->destino_imagen->nombre}}--}}
                                        @foreach($paquetes_destinos->destinos->destino_imagen as $imagen)
                                            <div class="col-6">
                                                <div class="position-relative">
                                                    <img src="{{$imagen->nombre}}" alt="" class="w-100">
                                                    <div class="position-absolute bottom-0 w-100 text-white p-2 fw-bold small">
                                                        {{$paquetes_destinos->destinos->nombre}}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
{{--                                        <div class="col-4">--}}
{{--                                            <img src="{{$paquete_destinos->destinos->imagen}}" alt="" class="w-100">--}}
{{--                                            <div class="position-absolute bottom-0 w-100 text-white p-2 fw-bold small">--}}
{{--                                                {{$paquete_destinos->destinos->nombre}}--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

                                    @endforeach
{{--                                    <div class="col-6 bg-dark">--}}
{{--                                        df--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                            <div class="col-3 ps-2 position-relative">
                                <div class="bg-e-cream w-100 h-100 ">
                                    <div class="position-absolute top-50 start-50 w-100 px-5 translate-middle">
                                        @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destinos_c)
                                            <h3 class="fs-6 fw-bold">{{$paquete_destinos_c->destinos->nombre}}</h3>
                                            <p class="small lh-sm fw-bolder">Hundreds of years of history are on display in the outdoor museum that is Cusco.</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>

            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="fw-bold small my-5 text-g-orange">ITINERARY</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="accordion accordion-flush" id="accordionItinerary">
                            @php $day = 1; @endphp
                            @foreach($paquetes->paquete_itinerario as $itinerario)
                                @if($day === 1)
{{--                                    <div class="accordion-item">--}}
{{--                                        <h2 class="accordion-header" id="headingOne">--}}
{{--                                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                                Accordion Item #1--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionItinerary">--}}
{{--                                            <div class="accordion-body">--}}
{{--                                                <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading_{{$itinerario->itinerarios->id}}">
                                            <button class="accordion-button fw-bold fs-7" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{$itinerario->itinerarios->id}}" aria-expanded="false" aria-controls="collapse_{{$itinerario->itinerarios->id}}">
                                                Day {{$day}}: {{ucwords(strtolower($itinerario->itinerarios->titulo))}}
                                            </button>
                                        </h2>
                                        <div id="collapse_{{$itinerario->itinerarios->id}}" class="accordion-collapse collapse show" aria-labelledby="heading_{{$itinerario->itinerarios->id}}" data-bs-parent="#accordionItinerary">
                                            <div class="accordion-body fw-normal fs-7">
                                                <img src="https://www.peruforless.com/content-files/uploads/v2/it-lima-1.jpg" alt="" class="w-100 mb-3">
                                                {!! $itinerario->itinerarios->descripcion !!}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading_{{$itinerario->itinerarios->id}}">
                                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{$itinerario->itinerarios->id}}" aria-expanded="false" aria-controls="collapse_{{$itinerario->itinerarios->id}}">
                                                <small>Day {{$day}}: {{ucwords(strtolower($itinerario->itinerarios->titulo))}}</small>
                                            </button>
                                        </h2>
                                        <div id="collapse_{{$itinerario->itinerarios->id}}" class="accordion-collapse collapse" aria-labelledby="heading_{{$itinerario->itinerarios->id}}" data-bs-parent="#accordionItinerary">
                                            <div class="accordion-body fw-normal fs-7">
                                                <img src="https://www.peruforless.com/content-files/uploads/v2/it-lima-1.jpg" alt="" class="w-100 mb-3">
                                                {!! $itinerario->itinerarios->descripcion !!}
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @php $day++; @endphp
                            @endforeach


                        </div>
                    </div>
                    <div class="col">
                        <div class="sticky-top sticky-top-20">
                            <img src="https://www.peruforless.com/content-files/uploads/map-special-1-mini.jpg" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h6 class="fw-bold text-secondary"><span class="text-g-yellow">Precios:</span></h6>
                        <p>Los precios estan basados en doble acomodación.</p>
                        <div class="table-responsive">
                            <table class="table table-borderless">
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
                                <tr class="text-center fw-bold">
{{--                                    @foreach($paquetes->precio_paquetes->sortBy('estrellas') as $precio)--}}
{{--                                        @php $porcentaje_decuento = ($precio->precio_d * $paquetes->descuento) / 100 @endphp--}}
{{--                                        @if($precio->precio_d > 0)--}}
{{--                                            <td><sup><small><del>${{$precio->precio_d}}</del></small></sup> ${{round($precio->precio_d - $porcentaje_decuento)}}<small>USD</small></td>--}}
{{--                                        @else--}}
{{--                                            <td class="fw-bold text-danger">Inquire</td>--}}
{{--                                        @endif--}}
{{--                                    @endforeach--}}
                                    @foreach($paquetes->precio_paquetes->sortBy('estrellas') as $precio)
                                        @if($precio->precio_d > 0)
                                            <td>
                                                ${{$precio->precio_d}}
                                                <small>USD</small>
                                            </td>
                                        @else
                                            <td class="fw-bold text-danger">Inquire</td>
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
            </div>
        </section>

        <section class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="fw-bold small my-5 text-g-orange">BEFORE YOU GO</h3>
                    </div>
                </div>
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
        </section>

        <section class="box-tab-detail shadow-sm mt-5 mb-4 d-none">

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

        <section class="d-none">
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
{{--                                        <a href="" class="btn btn-link fw-bold text-g-yellow"><i data-feather="sun" stroke-width="1" width="15" height="15"></i> view <i data-feather="arrow-right" stroke-width="1" width="15" height="15"></i></a>--}}
{{--                                        <hr>--}}


                                        <p class="text-left m-0"><i data-feather="code" class="text-primary" stroke-width="1" width="15"></i> <span class="fw-bold text-dark">Code:</span> <small class="fw-bold text-primary">{{$paquetes->codigo}}</small></p>
                                        <p class="text-left m-0"><i data-feather="map-pin" class="text-success" stroke-width="1" width="15"></i> <span class="fw-bold text-dark">Destinations:</span></p>

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
                                                            <h2 class="mb-0 h6 fw-bold text-secondary">{{ucwords(strtolower($itinerario->itinerarios->titulo))}}</h2>
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
                                            {{--                                        <a href="" class="btn btn-link fw-bold text-g-yellow"><i data-feather="sun" stroke-width="1" width="15" height="15"></i> view <i data-feather="arrow-right" stroke-width="1" width="15" height="15"></i></a>--}}
                                            {{--                                        <hr>--}}


                                            <p class="text-left m-0"><i data-feather="code" class="text-primary" stroke-width="1" width="15"></i> <span class="fw-bold text-dark">Code:</span> <small class="fw-bold text-primary">{{$paquetes->codigo}}</small></p>
                                            <p class="text-left m-0"><i data-feather="map-pin" class="text-success" stroke-width="1" width="15"></i> <span class="fw-bold text-dark">Destinations:</span></p>

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

                                            <h6 class="fw-bold text-secondary"><span class="text-g-yellow">Precios:</span></h6>
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
                                                                <td class="fw-bold text-danger">Inquire</td>
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
