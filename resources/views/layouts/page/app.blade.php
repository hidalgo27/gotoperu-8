<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Paquetes de Viaje a Perú | Perú Tours</title>
    <link href="{{asset('icons/favicon.ico')}}" rel="icon" type="image/x-icon">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token()  }}">
{{--    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>--}}
{{--    <script async src="https://www.jscache.com/wejs?wtype=rated&amp;uniq=710&amp;locationId=15202262&amp;lang=en_US&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>--}}

</head>
<body data-spy="scroll" data-target="#navbar-scroll">
<div id="app">


    @yield('content')

{{--    <div id="redes">--}}
    {{--        <div class="container-fluid">--}}
    {{--            <div class="row justify-content-end">--}}
    {{--                <div class="col-auto">--}}
    {{--                    <div class="bg-dark rounded px-3 mx-3 shadow clearfix float-right">--}}
    {{--                        <a href="https://api.whatsapp.com/send?phone=5117059774" target="_blank" class="font-weight-bold text-white stretched-link">--}}
    {{--                            Escríbenos por WhatsApp--}}
    {{--                            <img src="{{asset('images/icons/whatsapp-i.png')}}" class="py-1" alt="logo whatsapp" width="50" data-toggle="tooltip" data-placement="top" title="Perú">--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}



    <footer class="position-relative">
        <div class="bg-secondary d-block w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="row pt-4">
                        <div class="col-6 col-sm mb-3 text-white">
                            <p class="small text-g-yellow font-weight-bold">GENERAL</p>
                            <ul class="m-0 text-g-yellow list-unstyled">
                                <li><a href="/" class="text-light font-weight-semi-bold small">Home</a></li>
{{--                                <li><a href="#" class="text-light font-weight-semi-bold small">Request a Brochure</a></li>--}}
                                <li><a href="{{route('contact_path')}}" class="text-light font-weight-semi-bold small">Contact Us</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm mb-3 text-white">
                            <p class="small text-g-yellow font-weight-bold">About Us</p>
                            <ul class="m-0 list-unstyled">
                                <li><a href="{{route('about_path')}}" class="text-light font-weight-semi-bold small">Our History</a></li>
                                <li><a href="{{route('social_path')}}" class="text-light font-weight-semi-bold small">Social Responsability</a></li>
                                <li><a href="https://www.google.com/maps/place/GOTOPERU/@-13.5226792,-71.9748372,15z/data=!4m2!3m1!1s0x0:0xad9b34583ce776a0?sa=X&ved=2ahUKEwjZ86PazerjAhXuuFkKHb1dAaAQ_BIwE3oECAoQCA" target="_blank" class="text-light font-weight-semi-bold small">Offices</a></li>
{{--                                <li><a href="https://www.gotoperu.com/join-our-team" class="text-light font-weight-semi-bold small">Join Our Team</a></li>--}}
                                <li><a href="#" class="text-light font-weight-semi-bold small" data-toggle="modal" data-target="#certificates">Certificates</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm mb-3 text-white">
                            <p class="small text-g-yellow font-weight-bold">Resources</p>
                            <ul class="m-0 list-unstyled">
{{--                                <li><a href="https://www.gotoperu.com/frequently-asked-questions" class="text-light font-weight-semi-bold small">FAQ</a></li>--}}
{{--                                <li><a href="https://www.gotoperu.com/packages/category" class="text-light font-weight-semi-bold small">Travel Categories</a></li>--}}
                                <li><a href="{{route('destination_path')}}" class="text-light font-weight-semi-bold small">Destinations</a></li>
                                <li><a href="{{route('faq_path')}}" class="text-light font-weight-semi-bold small">FAQ</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm mb-3 text-white">
                            <p class="small text-g-yellow font-weight-bold">Community</p>
                            <ul class="m-0 text-g-yellow list-unstyled">
{{--                                <li><a href="#" class="text-light font-weight-semi-bold small">GOTOPERU Blog</a></li>--}}
                                <li><a href="{{route('review_path')}}" class="text-light font-weight-semi-bold small">Video Testimonials</a></li>
{{--                                <li><a href="https://www.gotoperu.com/testimonials" class="text-light font-weight-semi-bold small">Reviews</a></li>--}}
                                <li><a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d15202262-Reviews-Gotoperu-Cusco_Cusco_Region.html" class="text-light font-weight-semi-bold small" target="_blank">Tripadvisor</a></li>
                                <li><a href="https://www.trustpilot.com/review/gotoperu.com" class="text-light font-weight-semi-bold small" target="_blank">Trustpilot</a></li>
                                <li><a href="https://www.yelp.com/biz/gotoperu-washington?osq=gotoperu.com" class="text-light font-weight-semi-bold small" target="_blank">Yelp</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm mb-3 text-white">
                            <p class="small text-g-yellow font-weight-bold">Travel Agents</p>
                            <div class="rgba-black-5 p-4">
                                <p class="small text-light">As an agent of change, you have the power to change the world.</p>
                                <a href="{{route('contact_path')}}" class="btn btn-g-green font-weight-semi-bold btn-sm btn-block rounded-0">Contact Us</a>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="certificates" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-4 mb-2">
                                                <img src="{{asset('images/certificates/certificate-1.jpg')}}" alt="certificate gotoperu" class="w-100">
                                                {{--<div class="modal fade" id="certificate-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                                {{--<div class="modal-dialog modal-lg" role="document">--}}
                                                {{--<div class="modal-content">--}}
                                                {{--<div class="modal-body p-0">--}}
                                                {{--<img src="{{asset('images/certificates/certificate-1.jpg')}}" alt="certificate gotoperu" class="img-fluid rounded">--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-4 mb-2">
                                                <img src="{{asset('images/certificates/certificate-2.jpg')}}" alt="certificate gotoperu" class="w-100">
                                                {{--<div class="modal fade" id="certificate-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                                {{--<div class="modal-dialog modal-lg" role="document">--}}
                                                {{--<div class="modal-content">--}}
                                                {{--<div class="modal-body p-0">--}}
                                                {{--<img src="{{asset('images/certificates/certificate-2.jpg')}}" alt="certificate gotoperu" class="img-fluid rounded">--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-4 mb-2">
                                                <img src="{{asset('images/certificates/certificate-3.jpg')}}" alt="certificate gotoperu" class="w-100">
                                                {{--<div class="modal fade" id="certificate-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                                {{--<div class="modal-dialog modal-lg" role="document">--}}
                                                {{--<div class="modal-content">--}}
                                                {{--<div class="modal-body p-0">--}}
                                                {{--<img src="{{asset('images/certificates/certificate-3.jpg')}}" alt="certificate gotoperu" class="img-fluid rounded">--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <section class="bg-light">
            <div class="container-fluid">
                {{--            <div class="row mb-3">--}}
                {{--                <div class="col text-center">--}}
                {{--                    <h2 class="h1 font-weight-bold text-g-dark">Peru Authentic Experiences</h2>--}}
                {{--                    <a href="{{route('')}}" class="font-weight-bold">@lang('home.see_our_publications')</a>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                <div class="row">
                    <div class="col">
                        {{--<h6 class="text-secondary"><strong><a href=""><i class="fab fa-instagram"></i></a> #gotoperu check out these #gotoperu photos from past travelers. After your trip, come back and share some of your owm!</strong></h6>--}}
                        {{--<h2 class="text-g-green">GREAT ADVENTURE <strong>PACKAGES</strong> FOR EVERYONE WITH GOTOPERU</h2>--}}
                        {{--<h2 class="text-g-green h3 font-weight-light">THE BEST <strong>PERU VACATIONS</strong> AND <strong>MACHU PICCHU TOURS</strong></h2>--}}
                        {{--<p class=" font-weight-light">You are already in the "neighborhood" here are some possible multi countries travel programs for your review, rest assure we can fully customize any travel lenght and any combination of countries, we can even design a comprehensive 30 days South America escape.</p>--}}
                    </div>
                </div>
                <div class="row">
                    <div class="col p-0">
                        <div class="elfsight-app-ba7c9526-9468-4d5b-b378-68ec76259e00"></div>

                    </div>
                </div>

            </div>
        </section>

        <div class="container my-4">
            <div class="row">
                <div class="col">
                    <div class="position-relative text-center">
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <div class="p-4">
                                    <div class="row">
                                        <div class="col text-center">
                                            <img src="{{asset('images/logos/logo-gotoperu-black.png')}}" alt="" class="w-100">
                                            <p class="small font-weight-bold text-secondary pt-3 m-0">Offices.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124130.91048588227!2d-72.00928965263964!3d-13.530009562312076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd5d826598431%3A0x2aa996cc2318315d!2sCusco!5e0!3m2!1ses-419!2spe!4v1587843412901!5m2!1ses-419!2spe" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <p class="small font-weight-bold text-secondary text-center m-0">Av. El Sol 449</p>
                </div>
                <div class="col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249743.72044709852!2d-77.12786600649636!3d-12.02660339953776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c5f619ee3ec7%3A0x14206cb9cc452e4a!2sLima!5e0!3m2!1ses-419!2spe!4v1587843507975!5m2!1ses-419!2spe" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <p class="small font-weight-bold text-secondary text-center m-0">Avenida Jose Larco 1232</p>
                </div>
                <div class="col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254508.51641077636!2d-74.2478940828109!3d4.648283717287737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2sBogot%C3%A1%2C%20Colombia!5e0!3m2!1ses-419!2spe!4v1587843538327!5m2!1ses-419!2spe" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <p class="small font-weight-bold text-secondary text-center m-0">78 SW 7th St, Miami, FL 33130</p>
                </div>
                <div class="col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.53925899963!2d-80.29949884279218!3d25.782390733236642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C%20Florida%2C%20EE.%20UU.!5e0!3m2!1ses-419!2spe!4v1587843561199!5m2!1ses-419!2spe" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <p class="small font-weight-bold text-secondary text-center m-0">Calle 26 # 92-32, Bogotá 110911</p>
                </div>


            </div>

        </div>
        <div class="alert-g-yellow mt-5 p-3">
            <div class="container">

                        <div class="row">
                            <div class="col">
                                <div class="position-relative text-center">
                                    {{--                        <small class="footer-title text-uppercase text-muted small">CONNECT</small>--}}
                                    {{--                        <span class="footer-line-title"></span>--}}
                                    <div class="row justify-content-center">
                                        <div class="col-9">

                                            <div class="row">
                                                <div class="col">
                                                    <i data-feather="facebook" class="" stroke-width="1"></i>
                                                    <small class="t-small-6">FACEBOOK</small>
                                                </div>
                                                <div class="col">
                                                    <i data-feather="twitter" class="" stroke-width="1"></i>
                                                    <small class="t-small-6">TWITTER</small>
                                                </div>
                                                <div class="col">
                                                    <i data-feather="instagram" class="" stroke-width="1"></i>
                                                    <small class="t-small-6">INSTAGRAM</small>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col">
                                <div class="position-relative text-center">
                                    {{--                        <small class="footer-title text-uppercase text-muted small">NEWSLETTER</small>--}}
                                    {{--                        <span class="footer-line-title"></span>--}}
                                    <div class="row justify-content-center">
                                        <div class="col">

                                            <input type="text" class="form-control form-control-sm rounded-0 d-block text-center t-corrido" placeholder="email">


                                        </div>
                                        <div class="col">
                                            <button type="submit" class="btn btn-dark rounded-0 btn-sm btn-block"><span class="small">SUSCRIBE</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

            </div>
        </div>
        <div class="d-block bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <small class="small text-white">© 2020 gotoperu</small>
                    </div>
                    <div class="col text-right">
                        <a href="" class="t-small-6 text-white-50">PAQUETES DE VIAJE</a>
                        <a href="" class="t-small-6 text-white-50"> | DESTINOS EN PERÚ | </a>
                        <a href="" class="t-small-6 text-white-50">SOBRE NOSOTROS</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
{{--    <div class="alert bg-white alert-dismissible m-0 rounded-0 fade show" role="alert" id="aviso">--}}
{{--        <example-component></example-component>--}}
{{--        <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--            <span aria-hidden="true">&times;</span>--}}
{{--        </button>--}}
{{--    </div>--}}
</div>

{{--    <div class="alert alert-secondary alert-dismissible show m-0 elemento rounded-0 p-1" role="alert" id="aviso">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-12 text-center text-sm-left text-md-right col-sm-7 col-md-7 col-lg-auto">--}}
{{--                    dfdfdfdfddf--}}
{{--                </div>--}}
{{--                <div class="col-12 text-left text-sm-left text-md-right col-sm-2 col-md-2 col-lg-auto">--}}
{{--                    <button type="button" class="close p-0 float-left float-md-right" data-dismiss="alert" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="https://apps.elfsight.com/p/platform.js"></script>

{{--<script src="https://player.vimeo.com/api/player.js"></script>--}}
{{--<script src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/d1b447b4-892c-4562-a6dc-536d0eb23944-loader.js" ></script>--}}
@stack('scripts')
<script>
    feather.replace();
    $(document).ready(function(){
        $('.venobox').venobox();
    });
    // $('a[href^="#"]').on('click', function(event) {
    //     var target = $(this.getAttribute('href'));
    //     if( target.length ) {
    //         event.preventDefault();
    //         $('html, body').stop().animate({
    //             scrollTop: target.offset().top
    //         }, 1000);
    //     }
    // });
</script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    // $('.navbar [data-toggle="dropdown"]').bootstrapDropdownHover({
    //     // see next for specifications
    // });

    (function($) {
        var defaults={
            sm : 540,
            md : 720,
            lg : 960,
            xl : 1140,
            navbar_expand: 'lg',
            animation: true,
            animateIn: 'fadeIn',
        };
        $.fn.bootnavbar = function(options) {

            var screen_width = $(document).width();
            settings = $.extend(defaults, options);

            if(screen_width >= settings.lg){
                $(this).find('.dropdown').hover(function() {
                    $(this).addClass('show');
                    $(this).find('.dropdown-menu').first().addClass('show');
                    if(settings.animation){
                        $(this).find('.dropdown-menu').first().addClass('animated ' + settings.animateIn);
                    }
                }, function() {
                    $(this).removeClass('show');
                    $(this).find('.dropdown-menu').first().removeClass('show');
                });
            }

            $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
                if (!$(this).next().hasClass('show')) {
                    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
                }
                var $subMenu = $(this).next(".dropdown-menu");
                $subMenu.toggleClass('show');

                $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                    $('.dropdown-submenu .show').removeClass("show");
                });

                return false;
            });
        };
    })(jQuery);

</script>

<script>
    $(function () {
        $('#main_navbar').bootnavbar();
    });
    $(document).ready(function(){
        $('.venobox').venobox();
    });


    // $(document).ready(function() {
    //     $('#aviso').hide(0);
    //     $(window).scroll(function(){
    //         var windowHeight = $(window).scrollTop();
    //         var contenido2 = $(".begin").offset();
    //         contenido2 = contenido2.top;
    //         if(windowHeight >= contenido2  ){
    //             $('#aviso').fadeIn(500);
    //         }else{
    //             $('#aviso').fadeOut(500);
    //         }
    //     });
    // });
    // function ideal_trip(){
    //     $("#aviso").addClass('d-none');
    //     window.location.href="#inquire";
    // }
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDf1RN8KKGNdS-iEarIgXpaqa-khw7EmZI&callback=initMap">
</script>

</body>
</html>
