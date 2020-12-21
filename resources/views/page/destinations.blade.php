@extends('layouts.page.app')
@section('content')
    @include('layouts.page.head')
    <header class="header vh-70">
        <div class="overlay"></div>
        <div class="homepage-video">
            <img src="http://gotoperu-mx.s3-us-west-1.amazonaws.com/package/slider/mapi2_1574182691.jpg" alt="">
        </div>
{{--        <div class="container h-100">--}}
{{--            <div class="position-absolute bottom-0 l-0 w-50">--}}
{{--                <div class="rgba-white-9 shadow-sm text-center p-3">--}}
{{--                    <h1 class="h3 font-weight-bold t-corrido py-3">Peru destinations</h1>--}}
{{--                    <p class="m-0">Offering you an authentic and reliable travel experience in peru welcoming you to explore the many fully customized travel packages we have that suit every budget. let us plan your unforgettable trip to our majestic machu picchu and the rest of our homeland… peru!</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </header>

    <section class="py-4" id="title_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="fw-bold display-4 text-g-yellow text-center">Destinos en <span class="text-g-green">Perú</span></h2>

                    <p class="fw-normal text-center">Offering you an authentic and reliable travel experience in peru welcoming you to explore the many fully customized travel packages we have that suit every budget. let us plan your unforgettable trip to our majestic machu picchu and the rest of our homeland… peru!</p>
                    <div class="alert alert-g-yellow text-center rounded-0 my-5 shadow" role="alert">
                        <p class="fw-bold m-0">Trabajaremos de acuerdo con su agenda y sus intereses de viaje para construir juntos los planes de viaje más exclusivos.</p>
                    </div>



                </div>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <div class="container-fluid">
            <div class="row g-2 align-items-center align-items-resumen bg-white">
            @foreach($destino as $destinos)
                    <div class="col-6 col-md-6">
                        @foreach($destinos->destino_imagen as $imagen_destinos)
                            <div class="box19">
                                <img src="{{$imagen_destinos->nombre}}" class="w-100">
                                <div class="box-content">
                                    <ul class="icon">
                                        <li>
                                            <a href="{{route('destination_show_path', $destinos->url)}}" class="stretched-link">
                                                <i class="bi bi-link-45deg"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="title t-corrido font-weight-normal">{{$destinos->nombre}}</h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        var swiper = new Swiper('.swiper-container-gallery', {
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            // navigation: {
            //     nextEl: '.swiper-button-next',
            //     prevEl: '.swiper-button-prev',
            // },
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



    </script>
@endpush
