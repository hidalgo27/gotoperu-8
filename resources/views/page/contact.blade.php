@extends('layouts.page.app')
@section('content')
    @include('layouts.page.head')
    <header class="header">
        <div class="overlay"></div>
        <div class="homepage-video">
            {{--            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
            {{--            <iframe src="https://player.vimeo.com/video/381676880?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
            <img src="{{asset('images/contact.jpg')}}" alt="">

        </div>
        <div class="container h-100">

            <div class="position-absolute-bottom w-100">

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="rgba-white-9 shadow-sm rounded-top text-center p-3 pb-5">

                                <h1 class="font-weight-bold text-center">Thank you for your interest in GOTOPERU</h1>
                                {{--                                <p class="h2 text-secondary">Our biggest rewards are to have satisfied clients share their experience with us. Below are a few testimonials that we would like to share with you! would you like to be next...camera, action!</p>--}}
                                <p>Please fill out this form and a Travel Advisor will contact you as soon as possible. Your personal and contact information will remain confidential and will be used solely in accordance with our Privacy Policy.</p>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </header>


<section class="bg-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <h2 class="text-secondary h5"><strong>Contact form:</strong></h2>
                <form class="card bg-light mb-4" id="c_form" role="form">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm col-md-12 col-lg-6">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="text-secondary small"><strong>NAME <span class="text-primary">*</span></strong></h2>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="c_name" placeholder="Full name" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4 mt-sm-0 col-sm col-md-12 mt-md-4 col-lg-6 mt-lg-0">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="text-secondary small"><strong>EMAIL <span class="text-primary">*</span></strong></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                            </div>
                                            <input type="email" class="form-control" id="c_email" placeholder="Email address" aria-label="Phone" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-4">
                            <div class="col-12 col-sm col-md-12 col-lg-6">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="text-secondary small"><strong>PHONE</strong></h2>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                            </div>
                                            <input type="tel" class="form-control" id="c_phone" placeholder="Phone number" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4 mt-sm-0 col-sm col-md-12 mt-md-4 col-lg-6 mt-lg-0">

                                <div class="row">
                                    <div class="col">
                                        <h2 class="text-secondary small"><strong>CITY</strong></h2>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-location-arrow"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="c_city" placeholder="City" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="row mt-4">
                            <div class="col-12 col-sm col-md-12 col-lg-6">

                                <div class="row">
                                    <div class="col">
                                        <h2 class="text-secondary small"><strong>ABOUT YOU?</strong></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="exampleFormControlSelect1"><i class="fa fa-question-circle"></i></span>
                                            </div>
                                            <select class="form-control" id="c_about">
                                                <option class="Travel Inquire"> Travel Inquire</option>
                                                <option value="Travel Agents">Travel Agent</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>

                        <div class="form-group mt-4">
                            <h2 class="text-secondary small"><strong>WRITE YOUR MESSAGE</strong></h2>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-comment"></i></span>
                                </div>
                                <textarea class="form-control" id="c_comment" aria-label="With textarea"></textarea>
                            </div>
                        </div>

                        <div class="row justify-content-center py-4">
                            <div class="col-6 text-center">
                                <button type="button" class="btn btn-g-lime btn-block" onclick="contactus()" id="c_submit">Send</button>
                                <i class="fas fa-spinner fa-pulse fa-2x text-primary d-none" id="c_load"></i>

                            </div>
                        </div>
                        <div class="row mt-3 justify-content-center d-none" id="c_alert">
                            <div class="col-10">
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <b><strong>THANK YOU</strong> for contacting us, a <strong>GOTOPERU</strong> representative will contact you shortly. </b>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-4">
                <h2 class="text-secondary h5"><strong>Or also you can contact us:</strong></h2>
                <ul class="card p-0 sticky-top sticky-top-50">
                    <div class="card-body">
                        <p class="pb-3 mb-3 border-bottom"><i class="fa fa-map-marker-alt"></i> Av. El Sol 449, Oficina 301.</p>
                        <p class="pb-3 mb-3 border-bottom"><i class="fa fa-phone"></i> <strong>PERU:</strong> +51 (084) 206931 Headquarters</p>
                        <p class="pb-3 mb-3 border-bottom"><i class="fa fa-phone"></i> <b>Worldwide:</b> (202) 996-3000 USA number</p>
                        <p class="pb-3 mb-3 border-bottom"><i class="fa fa-envelope"></i> info@gotoperu.com</p>
                        <i class="mb-0 text-g-yellow">Director : Paul Catano : paul@gotoperu.com</i>
                    </div>
                    {{--<li><i class="fa fa-page4"> Av. Collasuyo 896</i></li>--}}
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
