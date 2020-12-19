<div class="rgba-white-9">
    <div class="container-fluid rgba-white-8">
        <div class="row justify-content-between align-items-center d-none d-sm-flex">
            <div class="col-auto py-3">
                <div class="row align-items-center">
                    <div class="col-5">
                        <a href="{{route('home_path')}}"><img src="https://gotoperu-com.s3-us-west-1.amazonaws.com/logos/logo-gotoperu-black.png" alt="logo destino" class="w-100"></a>
                    </div>
                    <div class="col text-left">
                        <small class="font-weight-semi-bold text-secondary">| Private tailor-made journeys of a lifetime</small>
                    </div>
                </div>
            </div>
            {{--                <div class="col-4 d-none d-sm-inline">--}}
            {{--                    <a href="https://www.facebook.com/GOTOPERUcom/" target="_blank" class="mx-2">--}}
            {{--                        <i data-feather="facebook" class="text-white" stroke-width="1"></i>--}}
            {{--                    </a>--}}
            {{--                    <a href="https://twitter.com/GOTOPERUCOM" target="_blank" class="mx-2">--}}
            {{--                        <i data-feather="twitter" class="text-white" stroke-width="1"></i>--}}
            {{--                    </a>--}}
            {{--                    <a href="https://www.youtube.com/channel/UCWjJ10j-_BfNTDnmjBug8Ng" target="_blank" class="mx-2">--}}
            {{--                        <i data-feather="youtube" class="text-white" stroke-width="1"></i>--}}
            {{--                    </a>--}}
            {{--                    <a href="https://www.instagram.com/go.to.peru/" target="_blank" class="mx-2">--}}
            {{--                        <i data-feather="instagram" class="text-white" stroke-width="1"></i>--}}
            {{--                    </a>--}}

            {{--                </div>--}}

{{--            <div class="col">--}}
{{--                <img src="{{asset('images/logos/tripadvisor-h.png')}}" alt="" class="p-2 w-100">--}}
{{--            </div>--}}

{{--            <div class="col">--}}
{{--                <img src="{{asset('images/logos/trustpilot.png')}}" alt="" class="p-2 w-100">--}}
{{--            </div>--}}

            <div class="col-4 d-none py-0 d-sm-inline text-right">
                <div class="row align-items-center">
                    <div class="col d-none d-sm-inline text-right">
                        <a href="" class="fw-bold text-dark">+1 202-491-1478</a>
                    </div>
                    <div class="col"><a href="{{route('contact_path')}}" class="btn btn-block btn-sm btn-outline-g-yellow float-right ml-3 fw-bold px-4">CONTACT US</a></div>
                </div>
                {{--                    <img src="{{asset('images/icons/mx.svg')}}" alt="" width="30" class="w-"> +52 (33) 41625836 |--}}
                {{--                    <img src="{{asset('images/icons/mx.svg')}}" alt="" width="30" class="w-"> +52 (33) 41625836--}}
            </div>
        </div>
    </div>
    @include('layouts.page.menu')

</div>
