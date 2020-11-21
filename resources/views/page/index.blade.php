@extends('layouts.page.app')
@section('content')
    @include('layouts.page.head')
    <header class="header position-relative">
        <div class="overlay"></div>

        <div class="homepage-video">
            {{--            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
{{--            <iframe src="https://player.vimeo.com/video/381676880?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
        </div>
        <div class="container h-100">
            <div class="row d-flex h-75 text-center align-items-end">
                <div class="col w-100 text-white">
                    <h1 class="h1 font-weight-bold text-g-lime">Peru small groups and private tours</h1>
                    <h2 class="font-weight-lighter h4">Unique experiences and connections like no other.</h2>
                </div>
            </div>
        </div>
{{--        <pop-form></pop-form>--}}

{{--        <div class="position-absolute-top l-0 w-25">--}}
{{--            <div class="p-2 text-white">--}}
{{--                <h3 class="font-weight-bold">Travel with Confidence</h3>--}}
{{--                <p class="small">we will continue to keep you safe and healthy on our tours and make you feel even better about choosing to book with GOTOPERU, including our new fully flexible terms. Lock our special deals and travel until Dec 2021.</p>--}}
{{--                <p class="t-small-6 m-0">Founder & Director</p>--}}
{{--                <img src="{{asset('images/firma-paul.png')}}" alt="">--}}
{{--                <p class="t-small-6">Paul Catano</p>--}}
{{--            </div>--}}
{{--        </div>--}}
    </header>

    <section class="fixed-bottom f-2030">
        <div class="container">
            <div class="row">
                <div class="col">
                    <example-component></example-component>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light clearfix begin">
        <div class="container">

            <div class="row pt-5">
                <div class="col-12 text-center">
                    <p class="m-0 text-secondary">Experience Peru with an award-winning team on a completely customized, private or small group tour for an authentic trip of a lifetime. With our 97% satisfaction rate, round-the-clock local support and 100% financial protection, explore 20+ enchanting destinations around the land of the Incas safely and seamlessly. Our 9,000+ enchanted guests will vouch for us.</p>
                    <img src="{{asset('images/logos/logo-gotoperu-black.png')}}" alt="" class="py-4">
{{--                    <p class="text-g-yellow m-0 mt-3 font-weight-semi-bold">GOTOPERU</p>--}}

{{--                    <div id="TA_rated710" class="TA_rated">--}}
{{--                        <ul id="YY0i4f5wv" class="TA_links Lnb1hI">--}}
{{--                            <li id="1bDUpgr" class="6zjMa6">--}}
{{--                                <a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g294314-d15202262-Reviews-Gotoperu-Cusco_Cusco_Region.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/badges/ollie-11424-2.gif" alt="TripAdvisor"/></a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

                </div>
            </div>
        </div>
    </section>

{{--    <section class="bg-white my-5">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col text-center">--}}
{{--                    <h2 class="font-weight-semi-bold h3">Travel deals</h2>--}}
{{--                    <p class="font-weight-bold text-g-yellow"><mark>Valid for Bookings made before Dec2020 and travel before Dec2021</mark></p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            @foreach($offer as $offers)--}}

{{--                @switch($offers->descuento)--}}
{{--                    @case(10)--}}
{{--                        @php $maleta = 'sombrero-b'; $color_off = 'alert-info'; @endphp--}}
{{--                    @break--}}

{{--                    @case(15)--}}
{{--                        @php $maleta = 'sombrero-y'; $color_off = 'alert-g-yellow'; @endphp--}}
{{--                    @break--}}

{{--                    @case(20)--}}
{{--                    @php $maleta = 'sombrero-b'; $color_off = 'alert-success'; @endphp--}}
{{--                    @break--}}

{{--                    @case(25)--}}
{{--                    @php $maleta = 'sombrero-p'; $color_off = 'alert-danger'; @endphp--}}
{{--                    @break--}}

{{--                    @default--}}
{{--                    @php $maleta = ''; $color_off = ''; @endphp--}}
{{--                @endswitch--}}

{{--            <div class="row no-gutters mb-5 align-items- {{$color_off}} shadow-sm">--}}
{{--                <div class="col">--}}
{{--                    <div class="position-relative bx-img-destinohome">--}}
{{--                        <a href="{{route('detail_path', $offers->url)}}" class="text-dark d-block">--}}
{{--                            <img src="{{asset('images/'.$offers->descuento.'.png')}}" alt="" class="w-100">--}}
{{--                        </a>--}}
{{--                        <div class="position-absolute m-3 t--50-0 l--50-0">--}}
{{--                            <img src="{{asset('images/descuentos/'.$offers->descuento.'.png')}}" alt="" class="w-50">--}}
{{--                            <div class="box-offers-circle rounded-circle bg-g-dark clearfix text-center p-2">--}}
{{--                                <span class="mt-3 d-block h4 font-weight-bold text-warning">25%<small class="d-block t-small-6 font-weight-bold">OFF</small></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col position-relative">--}}
{{--                    <div class="row no-gutters justify-content-end">--}}
{{--                        <div class="col-4">--}}
{{--                            <a href="{{route('detail_path', $offers->url)}}" class="btn btn-g-dark text-warning btn-block rounded-0 btn-sm"><small class="font-weight-bold">VIEW SPECIAL OFFER</small></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row no-gutters align-items-end position-absolute-bottom">--}}
{{--                            <div class="col-3 position-relative">--}}
{{--                                <img src="{{asset('images/'.$maleta.'.png')}}" alt="" class="w-100 ">--}}
{{--                            </div>--}}
{{--                            <div class="col-9 px-3">--}}

{{--                                <div class="h4 font-weight-bold">{{$offers->duracion}} days </div>--}}

{{--                                <h2 class="h5 font-weight-bold">{{$offers->titulo}}</h2>--}}
{{--                                <div class="small">{!! $offers->descripcion !!}</div>--}}
{{--                                    @foreach($offers->precio_paquetes as $precio)--}}
{{--                                        @if($precio->estrellas == 2)--}}
{{--                                            @if($precio->precio_d > 0)--}}
{{--                                                @php $porcentaje_decuento = ($precio->precio_d * $offers->descuento) / 100 @endphp--}}

{{--                                                <div class="h4 font-weight-bold text-right px-3 mb-3"><del class="text-muted">${{$precio->precio_d}}</del> <span class="text-g-yellow">${{round($precio->precio_d - $porcentaje_decuento)}}</span></div>--}}
{{--                                            @else--}}
{{--                                                <span class="text-danger">Consulte</span>--}}
{{--                                            @endif--}}
{{--                                        @endif--}}
{{--                                    @endforeach--}}
{{--                            </div>--}}
{{--                    </div>--}}


{{--                </div>--}}
{{--            </div>--}}

{{--            @endforeach--}}

{{--            <div class="row no-gutters mb-5 align-items-end alert-g-yellow shadow-sm">--}}
{{--                <div class="col">--}}
{{--                    <div class="position-relative bx-img-destinohome">--}}
{{--                        <a href="" class="text-dark d-block">--}}
{{--                            <img src="{{asset('images/offers1.png')}}" alt="" class="w-100">--}}
{{--                        </a>--}}
{{--                        <div class="position-absolute m-3 t--50-0 l--50-0">--}}
{{--                            <img src="{{asset('images/descuentos/15.png')}}" alt="" class="w-50">--}}

{{--                            <div class="box-offers-circle rounded-circle bg-g-dark clearfix text-center p-2">--}}
{{--                                <span class="mt-3 d-block h4 font-weight-bold text-warning">25%<small class="d-block t-small-6 font-weight-bold">OFF</small></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col px-4 position-relative">--}}
{{--                    <div class="row  mb-2">--}}
{{--                        <div class="col">--}}
{{--                            <div class="h4 font-weight-bold">6 days <sup><del class="text-muted">$760</del></sup> <span class="text-g-yellow">$570</span></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-4">--}}
{{--                            <button type="button" class="btn btn-g-dark text-warning btn-block rounded-0 btn-sm"><small class="font-weight-bold">VIEW SPECIAL OFFER</small></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row align-items-end">--}}
{{--                        <div class="col-auto">--}}
{{--                            <img src="{{asset('images/sombrero-y.png')}}" alt="" width="100px">--}}
{{--                        </div>--}}
{{--                        <div class="col">--}}
{{--                            <h2 class="h4 text-g-green font-weight-bold">Cusco y machuícchu</h2>--}}
{{--                            <p class="m-0 small mb-4">The mountains and valleys around Cusco all behold a fascinating story. On this Andean adventure, discover these tales and make new ones as you wander through a world wonder as MachuPicchu , natural landscapes at the Rainbow Mountain and live history in Cusco.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row no-gutters mb-5 align-items-end alert-danger shadow-sm">--}}
{{--                <div class="col">--}}
{{--                    <div class="position-relative bx-img-destinohome">--}}
{{--                        <a href="" class="text-dark d-block">--}}
{{--                            <img src="{{asset('images/offers1.png')}}" alt="" class="w-100">--}}
{{--                        </a>--}}
{{--                        <div class="position-absolute m-3 t--50-0 l--50-0">--}}
{{--                            <img src="{{asset('images/descuentos/20.png')}}" alt="" class="w-50">--}}
{{--                            <div class="box-offers-circle rounded-circle bg-g-dark clearfix text-center p-2">--}}
{{--                                <span class="mt-3 d-block h4 font-weight-bold text-warning">25%<small class="d-block t-small-6 font-weight-bold">OFF</small></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col px-4 position-relative">--}}
{{--                    <div class="row  mb-2">--}}
{{--                        <div class="col">--}}
{{--                            <div class="h4 font-weight-bold">6 days <sup><del class="text-muted">$760</del></sup> <span class="text-g-yellow">$570</span></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-4">--}}
{{--                            <button type="button" class="btn btn-g-dark text-warning btn-block rounded-0 btn-sm"><small class="font-weight-bold">VIEW SPECIAL OFFER</small></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row align-items-end">--}}
{{--                        <div class="col-auto">--}}
{{--                            <img src="{{asset('images/sombrero-p.png')}}" alt="" width="100px">--}}
{{--                        </div>--}}
{{--                        <div class="col">--}}
{{--                            <h2 class="h4 text-g-green font-weight-bold">Cusco y machuícchu</h2>--}}
{{--                            <p class="m-0 small mb-4">The mountains and valleys around Cusco all behold a fascinating story. On this Andean adventure, discover these tales and make new ones as you wander through a world wonder as MachuPicchu , natural landscapes at the Rainbow Mountain and live history in Cusco.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}


{{--            <div class="row no-gutters align-items-center bg-light shadow-sm">--}}
{{--                <div class="col">--}}
{{--                    <div class="position-relative bx-img-destinohome">--}}
{{--                        <a href="" class="text-dark d-block">--}}
{{--                            <img src="{{asset('images/director.png')}}" alt="" class="w-100">--}}
{{--                        </a>--}}
{{--                        <div class="position-absolute-top m-3">--}}
{{--                            <div class="box-offers-circle rounded-circle bg-g-green clearfix text-center p-2">--}}
{{--                                <span class="mt-4 d-block small font-weight-bold text-white">DIRECTOR</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="position-absolute-bottom p-3 rgba-black-gradient">--}}
{{--                            <p class="m-0 small text-white">11 Days: From $7590 / person</p>--}}
{{--                            <h5 class="h6 m-0 font-weight-bold text-white">Peru: Luxury Honeymoon and Beach</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="p-4">--}}
{{--                        <p>Ideal for Families, this itinerary will explore Spanish colonial architecture, ancient inca ruins and local markets; staying at hand-picked accommodations with a unique sense of style and place;  big finale at MachuPicchu , priceless memories guarantee!.</p>--}}

{{--                        <div class="row align-items-center justify-content-between pt-3">--}}
{{--                            <div class="col-auto">--}}
{{--                                <div class="row align-items-center">--}}
{{--                                    <div class="col-auto">--}}
{{--                                        <a href="">--}}
{{--                                            <div class="rounded-circle overflow-hidden box-commnet-video position-relative">--}}
{{--                                                <img src="https://gotoperu.com.mx/images/video-testimonial/2.jpg" alt="">--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-auto">--}}
{{--                                        <p class="font-weight-bold m-0 text-secondary">Alison Love x2</p>--}}
{{--                                        <small class="text-muted">Traveled to USA in 2017</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-auto">--}}
{{--                                <button type="button" class="btn btn-g-yellow rounded-0 btn-sm"><small class="font-weight-bold">VIEW THIS VACATION</small></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--    </section>--}}

    <section class="bg-light py-3 d-none d-md-block contenido2">
        <div class="container-fluid">
            <div class="col">
                <div class="row pb-3"><!--.row -->
                    <div class="col">
                        <img src="https://www.gotoperu.com.pe/images/logos/apavit.png" alt="logo apavit" class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="https://www.gotoperu.com.pe/images/logos/apotur.png" alt="logo apotur" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img src="https://www.gotoperu.com.pe/images/logos/asta.png"  alt="logo asta" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img src="https://www.gotoperu.com.pe/images/logos/expedia.png"  alt="logo expedia" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img src="https://www.gotoperu.com.pe/images/logos/facebook.png"  alt="logo facebook" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img src="https://www.gotoperu.com.pe/images/logos/meetup.png" alt="logo meetup" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img src="https://www.gotoperu.com.pe/images/logos/new.png" alt="logo the new york times" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img src="https://www.gotoperu.com.pe/images/logos/peru.png"  alt="logo marca peru" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img src="https://www.gotoperu.com.pe/images/logos/prom-peru.png" alt="logo prom peru" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img src="https://www.gotoperu.com.pe/images/logos/tripadvisor.png" alt="logo tripadvisor" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img src="https://www.gotoperu.com.pe/images/logos/yelp.png" alt="logo yelp" class="img-fluid lazy has-webp">
                    </div>
                    <div class="col">
                        <img src="https://www.gotoperu.com.pe/images/logos/youtube.png" alt="logo youtube" class="img-fluid lazy has-webp">
                    </div>
                </div><!-- /.row -->
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container py-0">
            <div class="row align-items-center border-top border-bottom no-gutters">
                <div class="col border-right">
                    <div class="py-5 pr-5">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <p class="text-secondary small"><i data-feather="check" class="text-g-yellow" stroke-width="2"></i> 100% Tailor Made, Private Tours</p>
                                <p class="text-secondary small"><i data-feather="check" class="text-g-yellow" stroke-width="2"></i> Authentic & Unique Experiences</p>
                                <p class="text-secondary small"><i data-feather="check" class="text-g-yellow" stroke-width="2"></i> 24/7 Local Support While You Travel</p>
                                <p class="text-secondary small"><i data-feather="check" class="text-g-yellow" stroke-width="2"></i> Travel with an Award-Winning Team</p>
                                <p class="text-secondary small"><i data-feather="check" class="text-g-yellow" stroke-width="2"></i> 100% Financial Protection</p>
                            </div>
                            <div class="col text-center">
                                <p class="h1 m-0 font-weight-bold">97%</p>
                                <span class="t-small-6">GUEST SATISFACTION RATE</span>
                                <hr>
                                <p class="h3 m-0 font-weight-bold">9 000+</p>
                                <span class="t-small-6">GOTOPERU GUESTS</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="py-5 pl-4">
                                <i data-feather="message-circle" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                                <p class="t-corrido font-weight-light  text-secondary small pt-4">"... company locally based, their enthusiasm of looking after clients and trying to get good deals for them are evident to us.I recommend GOTOPERU to future Peru travelers."</p>
                                <div class="row align-items-center pt-3">
                                    <div class="col-auto">
                                        <a href="">
                                            <div class="rounded-circle overflow-hidden box-commnet-video position-relative">
                                                <img src="https://gotoperu.com.mx/images/video-testimonial/2.jpg" alt="">
                                                <div class="position-absolute-bottom mb-4 text-center">
                                                    <i data-feather="play" class="d-block mx-auto text-white" width="30" height="30" stroke-width="2"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-auto">
                                        <p class="h6 font-weight-bold m-0 text-secondary">Alison Love x2</p>
                                        <small class="text-muted">Traveled to USA in 2017</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 bg-light rounded">
                            <img src="https://gotoperu.com.mx/images/icons/tripadvisor.png" alt="" class="w-100 d-block my-3">
                            <img src="https://gotoperu.com.mx/images/icons/yelp.png" alt="" class="w-100 d-block my-3">
                            <img src="https://gotoperu.com.mx/images/icons/trust.png" alt="" class="w-100 d-block my-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 d-flex">
                            <div class="w-100 shadow-sm">
                                <div class="header-img-packages bx-img-destinohome position-relative">
                                    <a href=""><img class="w-100" src="{{asset('images/mapi')}}" alt=""></a>
                                    <div class="position-absolute-bottom w-40 l-0 rgba-black-gradient-top h-100 p-4">

                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <p class="font-weight-bold text-white h6 pr-2 m-0">51 Days</p>
                                            </div>
                                            <div class="col-auto">
                                                <p class="font-weight-bold small text-white m-0"><sup class="small"><small><del>500</del></small></sup> $50<small>USD</small></p>
                                                {{--                                                    <span class="text-g-yellow small font-weight-bold">Inquire</span>--}}

                                            </div>
                                        </div>
                                        <h5 class="text-white h6 font-weight-bold m-0">Paquete !</h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 d-flex mb-3">
                            <div class="w-100 shadow-sm">
                                <div class="header-img-packages bx-img-destinohome position-relative">
                                    <a href=""><img class="w-100" src="{{asset('images/asc.jpg')}}" alt=""></a>
                                    <div class="position-absolute-bottom w-40 h-100 rgba-black-gradient-top p-4">

                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <p class="font-weight-bold text-white h6 pr-2 m-0">5 Days</p>
                                            </div>
                                            <div class="col-auto">
                                                <p class="font-weight-bold small text-white m-0"><sup class="small"><small><del>500</del></small></sup> $50<small>USD</small></p>
                                                {{--                                                    <span class="text-g-yellow small font-weight-bold">Inquire</span>--}}

                                            </div>
                                        </div>
                                        <h5 class="text-white h6 font-weight-bold m-0">Paquete !</h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 d-flex">
                            <div class="w-100 shadow-sm">
                                <div class="header-img-packages bx-img-destinohome position-relative">
                                    <a href=""><img class="w-100" src="{{asset('images/asc.jpg')}}" alt=""></a>
                                    <div class="position-absolute-bottom rgba-black-gradient-bottom p-4">

                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <p class="font-weight-bold text-white h6 pr-2 m-0">5 Days</p>
                                            </div>
                                            <div class="col-auto">
                                                <p class="font-weight-bold small text-white m-0"><sup class="small"><small><del>500</del></small></sup> $50<small>USD</small></p>
                                                {{--                                                    <span class="text-g-yellow small font-weight-bold">Inquire</span>--}}

                                            </div>
                                        </div>
                                        <h5 class="text-white h6 font-weight-bold m-0">Paquete !</h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="d-none mt-5 d-xl-block">
            <div class=" rounded-0 m-0">
                <div class="container">
                    <div class="row justify-content-center no-gutters">
                        <div class="col-9  text-center rounded">
                            <div class="row">
                                <div class="col">
                                    {{--<img data-src="{{asset('images/icons/include/assistances.png')}}" data-srcset="{{asset('images/icons/include/assistances.png')}}" alt="assistances" class="w-100 lazy has-webp">--}}
                                    <img src="{{asset('images/include/assistances.png')}}" alt="" class="w-100">
                                    <small>Assistances</small>
                                </div>
                                <div class="col">
                                    {{--<img data-src="{{asset('images/icons/include/breakfast.png')}}" data-srcset="{{asset('images/icons/include/breakfast.png')}}" alt="breakfast" class="w-100 lazy has-webp">--}}
                                    <img src="{{asset('images/include/breakfast.png')}}" alt="" class="w-100">
                                    <small>Breakfast</small>
                                </div>
                                <div class="col">
                                    {{--<img data-src="{{asset('images/icons/include/entrances.png')}}" data-srcset="{{asset('images/icons/include/entrances.png')}}" alt="entrances" class="w-100 lazy has-webp">--}}
                                    <img src="{{asset('images/include/entrances.png')}}" alt="" class="w-100">
                                    <small>Entrances</small>
                                </div>
                                <div class="col">
                                    {{--                                    <img data-src="{{asset('images/icons/include/flight.png')}}" data-srcset="{{asset('images/icons/include/flight.png')}}" alt="flight" class="w-100 lazy has-webp">--}}
                                    <img src="{{asset('images/include/flight.png')}}" alt="" class="w-100">
                                    <small>Flight</small>
                                </div>

                                <div class="col">
                                    {{--<img data-src="{{asset('images/icons/include/hotels.png')}}" data-srcset="{{asset('images/icons/include/hotels.png')}}" alt="hotels" class="w-100 lazy has-webp">--}}
                                    <img src="{{asset('images/include/hotels.png')}}" alt="" class="w-100">
                                    <small>Hotels</small>
                                </div>
                                <div class="col">
                                    {{--<img data-src="{{asset('images/icons/include/tours.png')}}" data-srcset="{{asset('images/icons/include/tours.png')}}" alt="tours" class="w-100 lazy has-webp">--}}
                                    <img src="{{asset('images/include/tours.png')}}" alt="" class="w-100">
                                    <small>Tours</small>
                                </div>
                                <div class="col">
                                    {{--<img data-src="{{asset('images/icons/include/trains.png')}}" data-srcset="{{asset('images/icons/include/trains.png')}}" alt="trains" class="w-100 lazy has-webp">--}}
                                    <img src="{{asset('images/include/trains.png')}}" alt="" class="w-100">
                                    <small>Trains</small>
                                </div>
                                <div class="col">
                                    <img src="{{asset('images/include/transfers.png')}}" alt="" class="w-100">
                                    <small>Transfers</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </section>




    <section class="bg-light pb-4">

        <div class="container d- bg-light">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <hr>
                        </div>
                        <div class="col text-center">
                            <h4 class="font-weight-bold">¿Deseas ver más paquetes?</h4>
                            <p class="font-weight-nomal mb-0">Explore todo nuestros paquetes que tenemos para usted</p>
                        </div>
                        <div class="col-3">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5 justify-content-center">
                <div class="col">
                    <!-- Swiper -->
                    <div class="swiper-category overflow-hidden">
                        <div class="swiper-wrapper">
                            @foreach($categoria as $categorias)
                            <div class="swiper-slide">
                                <a href="" class="p-0 m-0 text-decoration-none font-weight-bold text-dark bx-category">
                                <div class="row no-gutters position-relative">
                                    <div class="card w-100 shadow-sm">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-5">
                                                <img src="{{$categorias->imagen}}" alt="" class="rounded-left w-100 img-gray">
                                            </div>
                                            <div class="col-md position-static px-3 py-2">
                                                    {{$categorias->nombre}}
                                                    <span class="small d-block text-muted">2 packages</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        {{--                    <div class="swiper-pagination"></div>--}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col text-center">
                    <a :href="'#consulte'" class="btn btn-outline btn-outline-dark font-weight-bold">View more</a>
                </div>
            </div>
        </div>

    </section>

    <section class="py-5 pb-3">
        <div class="container">
            <div class="row no-gutters pb-4">
                <div class="col">
                    <h2 class="font-weight-semi-bold h3">Peru destinations</h2>
                    <p class="font-weight-light m-0">from the Coast , to the Andes and to the Rainforest! Go with the peruvian experts, GO with GOTOPERU:</p>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row no-gutters align-items-center">



                    @foreach($destino->take(6) as $destinos)
                    <div class="col-4">

{{--                            <div class="position-relative bx-img-destinohome">--}}
{{--                                <a href="" class="text-dark d-block">--}}
{{--                                    <img src="{{$destinos->imagen}}" alt="" class="w-100">--}}
{{--                                </a>--}}
{{--                                <div class="position-absolute-bottom p-3 text-white rgba-black-1 t-corrido font-weight-bold">--}}
{{--                                    {{$destinos->nombre}}--}}
{{--                                </div>--}}
{{--                            </div>--}}

                        <div class="box16">
                            <img src="{{$destinos->imagen}}" alt="" class="w-100">
                            <div class="box-content">
                                <h3 class="title h6 font-weight-normal">{{ucwords(strtolower($destinos->nombre))}}</h3>
                                <span class="post t-corrido">{{$destinos->pais}}</span>
                                <ul class="social">
                                    <small class="d-block">{{$destinos->resumen}}</small>
                                    <a href="{{route('destination_show_path', $destinos->url)}}" class="btn btn-info mt-3 btn-sm">View programs</a>
                                </ul>
                            </div>
                        </div>

                    </div>
                    @endforeach


                <div class="col d-none">
                    <h3 class="t-corrido">Cusco</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias aut blanditiis dolor eius fuga id illo nemo omnis pariatur, porro quas reiciendis sit suscipit velit veniam vero vitae voluptates?</p>

                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <a href="">
                                        <div class="rounded-circle overflow-hidden box-commnet-video position-relative">
                                            <img src="https://gotoperu.com.mx/images/video-testimonial/2.jpg" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-auto">
                                    <p class="font-weight-bold m-0 text-secondary">Alison Love x2</p>
                                    <small class="text-muted">Traveled to USA in 2017</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-g-yellow rounded-0 btn-sm"><small class="font-weight-bold">VIEW THIS VACATION</small></button>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row no-gutters">
                <div class="col text-center">
                    <a href="{{route('destination_path')}}" class="btn btn-outline-dark font-weight-bold mt-5">Explore todos nuestros destinos en Perú</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-semi-bold h3">Testimonials</h2>
{{--                    <p class="font-weight-light m-0">from the Coast , to the Andes and to the Rainforest! Go with the peruvian experts, GO with GOTOPERU:</p>--}}
                </div>
            </div>
            <div class="row slider-video-testimonio mt-4">
                @foreach($testimonio_video as $testimonio_videos)
                    <div class="col">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="{{$testimonio_videos->codigo}}">
                            <div class="position-relative">
                                {{--<img src="{{asset('images/video-tertimonio/'.$testimonio_videos->imagen.'')}}" alt="" class="w-100 shadow-sm rounded">--}}

                                {{--                                    <picture>--}}
                                {{--                                        <source type="image/webp"--}}
                                {{--                                                data-srcset="{{asset('images/video-testimonio/'.$testimonio_videos->imagen.'')}}"--}}
                                {{--                                                data-sizes="100w">--}}
                                {{--                                        <img alt="gotoperu" class="lazy w-100 shadow-sm rounded"--}}
                                {{--                                             data-src="{{asset('images/video-testimonio/'.$testimonio_videos->imagen.'')}}"--}}
                                {{--                                             data-srcset="{{asset('images/video-testimonio/'.$testimonio_videos->imagen.'')}}"--}}
                                {{--                                             data-sizes="100w">--}}
                                {{--                                    </picture>--}}

                                <img src="{{$testimonio_videos->imagen}}" alt="" class="w-100 shadow-sm rounded">

                                <div class="position-absolute-bottom text-white p-3 icon-play">
                                    <i class="fas fa-play fa-2x"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <a href="{{route('review_path')}}" class="btn btn-primary font-weight-bold">View all testimonials</a>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative">
        <div class="offer py-5">
            <div class="container my-5">
                <div class="row text-center">
                    <div class="col text-center">
                        <h2 class="h1 font-weight-semi-bold text-white">Why <span class="text-g-yellow">Go</span>  With GotoPeru</h2>
                    </div>
                </div>
                    <div class="row pt-5">
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="users" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">Small Groups and Private tours.</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="clock" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">We live here, trully a 24/7 Assistance.</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="pen-tool" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">Book Now option or Customize a dream trip!</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="map-pin" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">Cutting the middlemen, headquarters at Peru.</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="thumbs-up" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">We take pride of our tripadvisor reviews!</span>
                        </div>
                        <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                            <i data-feather="calendar" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                            <span class="text-white small mt-3 d-block">We can adapt to any arrival and departure.</span>
                        </div>
                    </div>
                    <div class="row mt-5 pt-5">
                        <div class="col text-white text-white text-center">
                            <p class="small m-0 font-weight-light">Since 2009</p>
                        </div>
                    </div>
            </div>
        </div>
    </section>





    {{--    <section>--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col">--}}
    {{--                    <form action="https://api.rd.services/platform/contacts/{identifier}:{value}" method="post">--}}
    {{--                        @csrf--}}
    {{--                        <input type="text" name="email" placeholder="email">--}}
    {{--                        <input type="text" name="nombre" placeholder="nombre">--}}
    {{--                        <input type="submit" value="enviar">--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

@endsection

@push('scripts')
    <script>
        var swiper = new Swiper('.swiper-category', {
            slidesPerView: 4,
            spaceBetween: 30,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        var swiper = new Swiper('.swiper-destino', {

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

    </script>
@endpush
