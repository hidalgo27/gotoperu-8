@extends('layouts.page.app')
@section('content')
    @include('layouts.page.head')
    <header class="header">
        <div class="overlay"></div>
        <div class="homepage-video">
            {{--            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
            {{--            <iframe src="https://player.vimeo.com/video/381676880?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
            <img src="{{asset('images/faq.jpg')}}" alt="">

        </div>
        <div class="container h-100">

            <div class="position-absolute-bottom w-100">

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="rgba-white-9 shadow-sm rounded-top text-center p-3 pb-5">

                                <h1 class="text-g-yellow font-weight-bold text-center mb-4 display-4">Frequently Asked <span class="text-g-green">Questions</span></h1>
                                {{--                                <p class="h2 text-secondary">Our biggest rewards are to have satisfied clients share their experience with us. Below are a few testimonials that we would like to share with you! would you like to be next...camera, action!</p>--}}
                                <p>A trip to Peru is an exciting adventure! There are a number of common questions first-time travelers to Peru frequently ask.</p>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </header>

    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <ul class="list-unstyled card p-3">
                        <li><a href="#faq1" class="page-scroll"><i class="fa fa-angle-right"></i> When Is the Best Time to Travel to Peru?</a></li>
                        <li><a href="#faq2" class="page-scroll"><i class="fa fa-angle-right"></i> Are There Any Tips for Staying Healthy During My Trip?</a></li>
                        <li><a href="#faq3" class="page-scroll"><i class="fa fa-angle-right"></i> What Are the Effects of Altitude? How Can I Prevent Altitude Sickness?</a></li>
                        <li><a href="#faq4" class="page-scroll"><i class="fa fa-angle-right"></i> What Kinds of Food Are Available in Peru?</a></li>
                        <li><a href="#faq5" class="page-scroll"><i class="fa fa-angle-right"></i> What Should I Do to Stay Safe in Peru?</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6">
                    <ul class="list-unstyled card p-3">
                        <li><a href="#faq6" class="page-scroll"><i class="fa fa-angle-right"></i> What Currency Do I Need in Peru?</a></li>
                        <li><a href="#faq7" class="page-scroll"><i class="fa fa-angle-right"></i> Do I Tip for Services in Peru?</a></li>
                        <li><a href="#faq8" class="page-scroll"><i class="fa fa-angle-right"></i> Can Yellow Fever or Malaria Affect Me While in Peru?</a></li>
                        <li><a href="#faq9" class="page-scroll"><i class="fa fa-angle-right"></i> Do Travelers from the UK Need a Visa to Travel to Peru?</a></li>
                        <li><a href="#faq10" class="page-scroll"><i class="fa fa-angle-right"></i> What Is the One Thing I Should Know Before Beginning My Trip?</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8">
                    <div class="row">
                        <div class="col">
                            <div class="row py-4" id="faq1">
                                <div class="col">
                                    <h3 class="text">When Is the Best Time to Travel to Peru?</h3>
                                    <p>If your travel dates are flexible, the majority of travelers prefer to go to Peru in the dry season, from May to October. If you plan on hiking, the best months to visit are April, May, September, and October—though the rainy season can sometimes end later or begin earlier than normal. Early in the dry season is ideal for visiting the Amazon too, and taking advantage of more Peru travel packages across the various regions.</p>
                                    <p>Plenty of people visit in the rainy season between November and March, when visitor numbers are fewer and you might find cheaper flights (with Christmastime as the exception). The mornings are generally clear and warm, but the days gradually become cloudy leading to possible rain in the afternoon.</p>
                                </div>
                            </div>
                            <div class="row py-4" id="faq2">
                                <div class="col">
                                    <h3 class="text">Are There Any Tips for Staying Healthy During My Trip?</h3>
                                    <p>It is important to drink plenty of water while in Peru, about 2-3 liters per day. At altitude, the low air pressure has diuretic effects, as does heat and humidity in the Amazon region. Drink treated, bottled, or pre-boiled water—the public water, though relatively safe and chlorinated, may cause mild stomach discomfort. To reduce waste, choose NB treated or boiled water.</p>
                                    <p>When at altitude, do not underestimate the strength of the sun’s UV rays. Overexposure to the sun can contribute to altitude sickness, especially in its early stages. Wear a sunhat with a broad brim for protection.</p>
                                    <p>It is best to avoid eating food from street vendors, unless you are sure that it has been freshly prepared and cooked, and has been served on clean dishes.</p>
                                </div>
                            </div>
                            <div class="row py-4" id="faq3">
                                <div class="col">
                                    <h3 class="text">What Are the Effects of Altitude? How Can I Prevent Altitude Sickness?</h3>
                                    <p>When in the tropics, being at altitude feels like a treat as it provides relief from the heat, the air is crisp and clear, and there are less insects. When you arrive at altitude, begin by resting for a few hours, and engaging in minimal activity the first couple days. Even if you feel fine on arrival, avoid the temptation to go straight to your normal level of exertion—oxygen still in your blood, brought up from sea level, might make you think you feel normal.</p>
                                    <p>Avoid dehydration by drinking plenty of water, as altitude is a diuretic. The local beverage mate de coca, or coca tea, assists in alleviating symptoms. Light, low fat, low protein, and high carbohydrate meals should be eaten. Allow for digestion time before bed by dining early.</p>
                                    <p>It is best to eliminate, or at least minimize, the consumption of alcohol, cigarettes, and sleeping pills.</p>
                                </div>
                            </div>
                            <div class="row py-4" id="faq4">
                                <div class="col">
                                    <h3 class="text">What Kinds of Food Are Available in Peru?</h3>
                                    <p>Peru has a wonderful variety of fruits and vegetables! Any vegetable or tropical fruit you could name is available here, as are 2,000 varieties of potatoes. Native Peruvians are especially fond of aji, a chili pepper, and ajo, or garlic. The range of local specialty dishes is broad, with each region featuring its own distinct style of cuisine.</p>
                                    <p>The coast of Peru and Lima are well known for delicious ‘creole’ cuisine—a delicious and sophisticated choice. Such dishes typically incorporate shellfish, prepared with a lemon juice marinade, onions, and red peppers—though a wide spectrum of scrumptious seafood specialties are served!.</p>
                                    <p>Though less diverse and sophisticated, Andean cuisine can also be delicious. Typical dishes of the region include cuy, or guinea pig, and chicharron de chancho, or deep fried pork. Vegetarians will also find a variety of suitable options in Peru.</p>
                                </div>
                            </div>
                            <div class="row py-4" id="faq5">
                                <div class="col">
                                    <h3 class="text">What Should I Do to Stay Safe in Peru?</h3>
                                    <p>If you are acclimating to Peruvian culture, the Miraflores suburb of Lima is a good home base. When it comes to organized tours Cusco, Lima, and other urban areas are often best initially explored in a group. This is known as a safe district, though it is highly recommendable to take the following safety precautions:</p>
                                    <ul>
                                        <li>Leave your valuables in the caja fuerte, or safe, at your hotel. Only take what you absolutely need for the day with you. </li>
                                        <li>Be sure to carry a copy of your passport, leaving the original in the hotel safe.</li>
                                        <li>Carry your valuables in a money belt hidden from view under clothing. Avoid using a conspicuous ‘fanny pack’ or ‘bum bag.’</li>
                                        <li>Be wary of overly friendly tourists or local men and women—they may be con artists.</li>
                                        <li>It is best to avoid the beaches during the off season, and never leave items unattended on the beach as bag snatchers are prevalent.</li>
                                        <li>It is to recommendable to exchange currency on the street. It is best to go to a casa de cambio, or money exchange office, an ATM machine, or a bank. </li>
                                        <li>Take extra special care in downtown Lima. Only use a backpack if you are on guided Lima tours or with a large group, and carry it on your front. </li>
                                        <li>Avoid downtown Lima when alone at night. </li>
                                        <li>Keep your camera in a bag, and put it back after taking any photographs. </li>
                                        <li>Beware of techniques to distract you and steal your belongings. Take special care in the bus stations and markets in Central Lima, at Arequipa’s San Camilo market, and the San Pedro market in Cusco. Never take valuables, purses, or bags into these areas, which are rife with pickpockets, thieves who slash bags to remove valuables, and jewelry and watch robbers. </li>
                                        <li>Use caution at night—especially when alone. Avoid streets with poor lighting, or quiet streets. Take taxis at night, no matter where in Peru you are. </li>
                                        <li>Always keep your bags with you, never leaving them unattended. This is especially true for bus terminals, hotel lobbies, airports, and other heavy tourist areas.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row py-4" id="faq6">
                                <div class="col">
                                    <h3 class="text">What Currency Do I Need in Peru?</h3>
                                    <p>If you are acclimating to Peruvian culture, the Miraflores suburb of Lima is a good home base. When it comes to organized tours Cusco, Lima, and other urban areas are often best initially explored in a group. This is known as a safe district, though it is highly recommendable to take the following safety precautions:</p>
                                    <p>While Peru uses its own monetary unit, the ‘Nuevo Sol,’ it is wise for travelers to carry some US dollars just in case. If you bring US dollars, it is best to bring medium- to high-denomination cash bank notes. If dollar bills are marked or damaged, they might not be accepted in Peru.</p>
                                    <p>It is best to carry an ATM card, as ‘hole in the wall’ ATM machines are generally available in Peru’s cities and large towns, and widely available in Arequipa, Cusco, Huaraz, Lima, Puno, and the Lima Airport. Travelers’ Checks in US dollars can be changed in most cities and large towns, though there may be a commission fee.</p>
                                    <p>Major credit cards from international providers are often accepted in shops and restaurants, though you may be charged a fee.</p>
                                    <p>Never change currency with cambistas, or street money exchangers. It is best to use a casa de cambio, or exchange bureau, or a bank when changing money. Ask the agent to provide you with billetes chicos, or small notes, like 10 or 20 sol notes. It can be difficult to get change for larger bills once outside of Lima. Before you turn over any US currency, count your soles carefully, also checking for forged notes.</p>
                                </div>
                            </div>

                            <div class="row py-4" id="faq7">
                                <div class="col">
                                    <h3 class="text">Do I Tip for Services in Peru?</h3>
                                    <p>Tipping is a part of everyday life in Latin America. At restaurants, it is normal to tip about 10%. It is also appropriate to leave a tip for local staff when trekking, when on rafting, biking, and jungle expeditions, when on Machu Picchu tours, and when on organized Peru tours.</p>
                                    <p>The amount of gratuity you choose should depend on the length of time the staff spent assisting you, and your satisfaction with the level of service provided. Please bear in mind that overly generous tips are counterproductive. When on multi-day Peru travel expeditions, consider giving $5-10 USD per day to the guide, and smaller amounts to staff like cooks, assistants, and drivers. It is best to tip in the local currency, using small bills.</p>
                                </div>
                            </div>

                            <div class="row py-4" id="faq8">
                                <div class="col">
                                    <h3 class="text">Can Yellow Fever or Malaria Affect Me While in Peru?</h3>
                                    <p>If you are travelling to the Amazon basin, a Yellow Fever vaccination is required. Plan ahead, as inoculations are only effective after 10-14 days. Apply this same advice to Malaria.</p>
                                </div>
                            </div>

                            <div class="row py-4" id="faq9">
                                <div class="col">
                                    <h3 class="text">Do Travelers from the UK Need a Visa to Travel to Peru?</h3>
                                    <p>No prior visa is required for UK nationals to enter Peru. A visa valid for six months (183 days) will be issued upon entry.</p>
                                </div>
                            </div>

                            <div class="row py-4" id="faq10">
                                <div class="col">
                                    <h3 class="text">What Is the One Thing I Should Know Before Beginning My Trip?</h3>
                                    <p>The best piece of advice is to take half the clothing you think you will need, and two times the money. In a pinch, there are many markets to buy clothing and ample laundromats. Only bring one formal outfit if you plan to go all out at a fine restaurant. The lighter your pack the better—leave space for souvenirs when you travel Peru!.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
