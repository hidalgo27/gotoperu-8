<nav class="navbar w-100 py-1 rgba-white-9 shadow border-top border-bottom yamm nav-justified navbar-expand-sm yamm" id="main_navbar">

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
            <li class="nav-item">
                <a class="nav-link" href="{{route('tours_path')}}">
                    MACHUPICCHU TOURS
                </a>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{route('tours_path')}}">--}}
{{--                    TOURS--}}
{{--                </a>--}}
{{--                <ul class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdown">--}}
{{--                    <li><a class="dropdown-item" href="#">Tours 1</a></li>--}}
{{--                    <li><a class="dropdown-item" href="#">Tours 2</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
            <li class="nav-item">
                <a class="nav-link" href="{{route('packages_path')}}">
                    TRAVEL PACKAGES
                </a>
            </li>
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
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"--}}
{{--                   aria-haspopup="true" aria-expanded="false">--}}
{{--                    ESPECIAL OFFERS--}}
{{--                </a>--}}
{{--                <ul class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdown">--}}
{{--                    <li><a class="dropdown-item" href="#">Offers 1</a></li>--}}
{{--                    <li><a class="dropdown-item" href="#">Offers 2</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}

            <li class="nav-item">
                <a class="nav-link" href="{{route('luxury_path')}}">LUXURY PACKAGES</a>
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
        </ul>
    </div>
</nav>
{{--<nav class="navbar w-100 py-1 rgba-white-9 shadow border-top border-bottom nav-justified navbar-expand-sm yamm">--}}
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" aria-controls="navbar-collapse-grid" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}
{{--    <div id="navbar-collapse-grid" class="navbar-collapse collapse">--}}
{{--        <ul class="nav navbar-nav w-100 nav-justified">--}}
{{--            <!-- Grid 12 Menu -->--}}
{{--            <li class="nav-item dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle">TOURS<b class="caret"></b></a>--}}
{{--                <ul class="dropdown-menu animate slideIn">--}}
{{--                    <a class="dropdown-item small" href="#">Tours 1</a>--}}
{{--                    <a class="dropdown-item small" href="#">Tours 1</a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a class="dropdown-item small" href="#">View all tours</a>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle">TRAVEL PACKAGES<b class="caret"></b></a>--}}
{{--                <ul class="dropdown-menu l-0 r-0 animate slideIn">--}}
{{--                    <li class="grid-demo">--}}
{{--                        <div class="p-4">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-6">--}}
{{--                                    <h5 class="small text-center font-weight-bold">CLASSIC</h5>--}}
{{--                                    <div class="row mt-4">--}}
{{--                                        <div class="col">--}}
{{--                                            <div class="list-group list-group-flush">--}}
{{--                                                <a href="#" class="list-group-item small list-group-item-action font-weight-semi-bold p-2"><span class="bg-info text-white t-small-6 rounded px-1">3 days:</span> Andes and Jungle</a>--}}
{{--                                                <a href="#" class="list-group-item small list-group-item-action font-weight-semi-bold p-2"><span class="bg-info text-white t-small-6 rounded px-1">3 days:</span> Andes and Jungle</a>--}}
{{--                                                <a href="#" class="list-group-item small list-group-item-action font-weight-semi-bold p-2"><span class="bg-info text-white t-small-6 rounded px-1">3 days:</span> Andes and Jungle</a>--}}
{{--                                                <a href="#" class="list-group-item small list-group-item-action font-weight-semi-bold p-2"><span class="bg-info text-white t-small-6 rounded px-1">3 days:</span> Andes and Jungle</a>--}}
{{--                                                <a href="#" class="list-group-item small list-group-item-action font-weight-semi-bold p-2"><span class="bg-info text-white t-small-6 rounded px-1">3 days:</span> Andes and Jungle</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col">--}}
{{--                                            <div class="list-group list-group-flush">--}}
{{--                                                <a href="#" class="list-group-item small list-group-item-action font-weight-semi-bold p-2"><span class="bg-info text-white t-small-6 rounded px-1">3 days:</span> Andes and Jungle</a>--}}
{{--                                                <a href="#" class="list-group-item small list-group-item-action font-weight-semi-bold p-2"><span class="bg-info text-white t-small-6 rounded px-1">3 days:</span> Andes and Jungle</a>--}}
{{--                                                <a href="#" class="list-group-item small list-group-item-action font-weight-semi-bold p-2"><span class="bg-info text-white t-small-6 rounded px-1">3 days:</span> Andes and Jungle</a>--}}
{{--                                                <a href="#" class="list-group-item small list-group-item-action font-weight-semi-bold p-2"><span class="bg-info text-white t-small-6 rounded px-1">3 days:</span> Andes and Jungle</a>--}}
{{--                                                <a href="#" class="list-group-item small list-group-item-action font-weight-semi-bold p-2"><span class="bg-info text-white t-small-6 rounded px-1">3 days:</span> Andes and Jungle</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    <h5 class="small text-center font-weight-bold">TREK</h5>--}}

{{--                                    <div class="row mt-4">--}}
{{--                                        <div class="col">--}}
{{--                                            <div class="list-group list-group-flush">--}}
{{--                                                <a href="#" class="list-group-item small list-group-item-action font-weight-semi-bold p-2">--}}
{{--                                                    <img src="http://gotoperu-mx.s3-us-west-1.amazonaws.com/destinations/1574356950633lima_1574356947.jpg" width="30" height="30" class="rounded-circle shadow-sm" alt="">--}}
{{--                                                     Andes and Jungle--}}
{{--                                                </a>--}}
{{--                                                <a href="#" class="list-group-item small list-group-item-action font-weight-semi-bold p-2">--}}
{{--                                                    <img src="http://gotoperu-mx.s3-us-west-1.amazonaws.com/destinations/1574356950633lima_1574356947.jpg" width="30" height="30" class="rounded-circle shadow-sm" alt="">--}}
{{--                                                     Andes and Jungle--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    <h5 class="small text-center font-weight-bold">Galapagos</h5>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle">SPECIAL OFFERS<b class="caret"></b></a>--}}
{{--                <ul class="dropdown-menu animate slideIn">--}}
{{--                    <li class="grid-demo">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-sm-12">.col-sm-12</div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle">LUXURY PACKAGES<b class="caret"></b></a>--}}
{{--                <ul class="dropdown-menu animate slidein">--}}
{{--                    <li class="grid-demo">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-sm-12">.col-sm-12</div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle">DESTINATIONS<b class="caret"></b></a>--}}
{{--                <ul class="dropdown-menu animate slideIn">--}}
{{--                    <li class="grid-demo">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-sm-12">.col-sm-12</div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <!----}}
{{--                    <Aside>Menu </Aside>--}}
{{--                    -->--}}
{{--            <li class="nav-item decora dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="nav-link  text-decoration-none dropdown-toggle">ABOUT US<b class="caret"></b></a>--}}
{{--                <ul class="dropdown-menu animate slideIn">--}}
{{--                    <li class="grid-demo">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-sm-3"><br>--}}
{{--                                <h3>3</h3><br>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <!----}}
{{--                    <Nesting>Menu </Nesting>--}}
{{--                    -->--}}
{{--            <li class="nav-item dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle">GUEST REVIEWS<b class="caret"></b></a>--}}
{{--                <ul class="dropdown-menu l-0 r-0 animate slideIn">--}}
{{--                    <li class="grid-demo">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-sm-12">12</div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-sm-12">12--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-4">4</div>--}}
{{--                                    <div class="col-sm-4">4</div>--}}
{{--                                    <div class="col-sm-4">4</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</nav>--}}
