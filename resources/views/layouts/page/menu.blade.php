<nav class="navbar w-100 py-1 rgba-white-8 shadow border-top border-bottom yamm nav-justified navbar-expand-sm" id="main_navbar">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
{{--        <span class="navbar-toggler-icon">MENU</span>--}}
            <i data-feather="align-justify" stroke-width="1"></i>
    </button>

    <div class="w-25 d-sm-none">
        <a href="{{route('home_path')}}"><img src="{{asset('images/logos/logo-gotoperu-black.png')}}" alt="logo destino" class="w-100"></a>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-justified w-100 mr-auto">
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link dropdown-toggle" href="{{route('destination_path')}}" id="navbarDropdown" role="button"--}}
{{--                   aria-haspopup="true" aria-expanded="false">--}}
{{--                    DESTINATIONS--}}
{{--                </a>--}}
{{--                <ul class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdown">--}}
{{--                    @foreach($destino_menu as $destinos_m)--}}
{{--                        <li><a class="dropdown-item" href="{{route('destination_show_path', $destinos_m->url)}}"><i data-feather="check" width="15" stroke-width="3" class="text-info"></i> {{$destinos_m->nombre}}</a></li>--}}
{{--                    @endforeach--}}
{{--                    --}}{{--                    <div class="dropdown-divider"></div>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{route('tours_path')}}">--}}
{{--                    MACHUPICCHU TOURS--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{route('tours_path')}}">--}}
{{--                    TOURS--}}
{{--                </a>--}}
{{--                <ul class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdown">--}}
{{--                    <li><a class="dropdown-item" href="#">Tours 1</a></li>--}}
{{--                    <li><a class="dropdown-item" href="#">Tours 2</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link dropdown-toggle" href="{{route('packages_path')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    PERU TRAVEL PACKAGES--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu animate slideIn w-100" aria-labelledby="navbarDropdown">--}}
{{--                    <a class="dropdown-item" href="#">Machu Picchu Tours</a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a class="dropdown-item" href="#">Luxury Packages</a>--}}
{{--                </div>--}}
{{--            </li>--}}

{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link dropdown-toggle" href="{{route('packages_path')}}" id="navbarDropdown" role="button"--}}
{{--                   aria-haspopup="true" aria-expanded="false">--}}
{{--                    TRAVEL PACKAGES--}}
{{--                </a>--}}
{{--                <ul class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdown">--}}
{{--                    <li><a class="dropdown-item" href="{{route('luxury_path')}}">Luxury Packages</a></li>--}}
{{--                    <li><a class="dropdown-item" href="{{route('luxury_path')}}">Luxury Packages</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link dropdown-toggle" href="{{route('packages_path')}}" id="navbarDropdown" role="button"--}}
{{--                   aria-haspopup="true" aria-expanded="false">--}}
{{--                    TRAVEL PACKAGES--}}
{{--                </a>--}}
{{--                <ul class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdown">--}}
{{--                    <li><a class="dropdown-item" href="{{route('luxury_path')}}">Luxury Packages</a></li>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <li class="nav-item text-left dropdown">--}}
{{--                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"--}}
{{--                           aria-haspopup="true" aria-expanded="false">--}}
{{--                            By Destinations--}}
{{--                        </a>--}}
{{--                        <ul class="dropdown-menu animate slideIn " aria-labelledby="navbarDropdown1">--}}
{{--                            @foreach($destino_menu as $destinos_m)--}}
{{--                                <li><a class="dropdown-item" href="{{route('destination_show_path', $destinos_m->url)}}"><i data-feather="check" width="15" stroke-width="3" class="text-info"></i> {{$destinos_m->nombre}}</a></li>--}}
{{--                            @endforeach--}}

{{--                        </ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

            <li class="nav-item">
                <a class="nav-link" href="{{route('packages_path')}}">TRAVEL PACKAGES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('destination_path')}}">DESTINATIONS</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('social_path')}}">SOCIAL RESPONSABILITY</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{route('about_path')}}">ABOUT US</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('review_path')}}">GUEST REVIEWS</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('review_path')}}">BLOG</a>
            </li>

        </ul>
    </div>
</nav>
