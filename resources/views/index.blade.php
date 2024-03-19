@extends('layout.app')

@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('assets/images/bg_1.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                    <h2 class="subheading">Welcome to Ngong Uphill's Rentals</h2>
                    <h1 class="mb-4">Rent an apartment for your Stay</h1>
                    <p><a href="about" class="btn btn-primary">Learn more</a> <a href="contact"
                            class="btn btn-white">Contact us</a></p>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block services-wrap text-center">
                        <div class="img" style="background-image: url('{{ asset('assets/images/services-1.jpg') }}');">
                        </div>
                        <div class="media-body py-4 px-3">
                            <h3 class="heading">Map Direction</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block services-wrap text-center">
                        <div class="img" style="background-image: url('{{ asset('assets/images/services-2.jpg') }}');">
                        </div>
                        <div class="media-body py-4 px-3">
                            <h3 class="heading">Accomodation Services</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block services-wrap text-center">
                        <div class="img" style="background-image: url('{{ asset('assets/images/services-3.jpg') }}');">
                        </div>

                        <div class="media-body py-4 px-3">
                            <h3 class="heading">Great Experience</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container-fluid px-md-0">
            <div class="row no-gutters justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Apartment Room</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img"
                            style="background-image: url('{{ asset('assets/images/room-1.jpg') }}');"></a>
                        <div class="half left-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span></p>
                                <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                                <h3 class="mb-3"><a href="rooms.html">Suite Room</a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Max:</span> 3 Persons</li>
                                    <li><span>Size:</span> 45 m2</li>
                                    <li><span>View:</span> Sea View</li>
                                    <li><span>Bed:</span> 1</li>
                                </ul>
                                <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Room Details
                                        <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img"
                            style="background-image: url('{{ asset('assets/images/room-2.jpg') }}');"></a>
                        <div class="half left-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span></p>
                                <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                                <h3 class="mb-3"><a href="rooms.html">Standard Room</a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Max:</span> 3 Persons</li>
                                    <li><span>Size:</span> 45 m2</li>
                                    <li><span>View:</span> Sea View</li>
                                    <li><span>Bed:</span> 1</li>
                                </ul>
                                <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Room Details
                                        <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img order-md-last"
                            style="background-image: url('{{ asset('assets/images/room-3.jpg') }}');"></a>
                        <div class="half right-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span></p>
                                <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                                <h3 class="mb-3"><a href="rooms.html">Family Room</a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Max:</span> 3 Persons</li>
                                    <li><span>Size:</span> 45 m2</li>
                                    <li><span>View:</span> Sea View</li>
                                    <li><span>Bed:</span> 1</li>
                                </ul>
                                <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Room
                                        Details <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img order-md-last"
                            style="background-image: url('{{ asset('assets/images/room-3.jpg') }}');"></a>
                        <div class="half right-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0"><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span><span
                                        class="fa fa-star"></span><span class="fa fa-star"></span></p>
                                <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                                <h3 class="mb-3"><a href="rooms.html">Deluxe Room</a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Max:</span> 3 Persons</li>
                                    <li><span>Size:</span> 45 m2</li>
                                    <li><span>View:</span> Sea View</li>
                                    <li><span>Bed:</span> 1</li>
                                </ul>
                                <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Room
                                        Details <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Happy Clients &amp; Feedbacks</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img"
                                    style="background-image: url('{{ asset('assets/images/person_1.jpg') }}');">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                    <p>I have been a tenants for Ngong Uphill's over a decade and I can complain  the management is workinf doing there work as expected deleivery is on time and give them a 5 stars </p>
                                    <p class="name">Racky Henderson</p>
                                    <span class="position">Father</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img"
                                    style="background-image: url('{{ asset('assets/images/person_2.jpg') }}');">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                    <p>I have been a tenants for Ngong Uphill's over a decade and I can complain  the management is workinf doing there work as expected deleivery is on time and give them a 5 stars </p>
                                    <p class="name">Henry Dee</p>
                                    <span class="position">Businesswoman</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img"
                                    style="background-image: url('{{ asset('assets/images/person_3.jpg') }}');">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                    <p>I have been a tenants for Ngong Uphill's over a decade and I can complain  the management is workinf doing there work as expected deleivery is on time and give them a 5 stars </p>
                                    <p class="name">Mark Huff</p>
                                    <span class="position">Businesswoman</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img"
                                    style="background-image: url('{{ asset('assets/images/person_3.jpg') }}');">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                    <p>I have been a tenants for Ngong Uphill's over a decade and I can complain  the management is workinf doing there work as expected deleivery is on time and give them a 5 stars </p>
                                    <p class="name">Rodel Golez</p>
                                    <span class="position">Businesswoman</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img"
                                    style="background-image: url('{{ asset('assets/images/person_4.jpg') }}');">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                    <p>I have been a tenants for Ngong Uphill's over a decade and I can complain  the management is workinf doing there work as expected deleivery is on time and give them a 5 stars </p>
                                    <p class="name">Ken Bosh</p>
                                    <span class="position">Businesswoman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 wrap-about">
                    <div class="img img-2 mb-4" style="background-image: url('{{ asset('assets/images/about.jpg') }}');">
                    </div>
                    <h2>The most recommended Rental's in Ngong</h2>
                    <p>We are the most trusted name in real estate. We offer exceptional tenant services, well-maintained
                        estates, and a variety of rentals, including single-story homes. Learn more and find your perfect
                        rental today!</p>
                </div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class="heading-section">
                        <div class="pl-md-5">
                            <h2 class="mb-2">What you will get Letting with Us.</h2>
                        </div>
                    </div>
                    <div class="pl-md-5">
                        <p>We are the most trusted name in real estate. We offer exceptional tenant services,
                            well-maintained estates, and a variety of rentals, including single-story homes. Learn more and
                            find your perfect rental today!</p>
                        <div class="row">
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-diet"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Tea Coffee</h3>
                                    <p>We are the most trusted name in real estate. We offer exceptional tenant services,
                                        well-maintained estates, and a variety of rentals, including single-story homes.
                                        Learn more and find your perfect rental today!</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-workout"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Hot Showers</h3>
                                    <p>We are the most trusted name in real estate. We offer exceptional tenant services,
                                        well-maintained estates, and a variety of rentals, including single-story homes.
                                        Learn more and find your perfect rental today!</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-diet-1"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Laundry</h3>
                                    <p>We are the most trusted name in real estate. We offer exceptional tenant services,
                                        well-maintained estates, and a variety of rentals, including single-story homes.
                                        Learn more and find your perfect rental today!</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-first"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Air Conditioning</h3>
                                    <p>We are the most trusted name in real estate. We offer exceptional tenant services,
                                        well-maintained estates, and a variety of rentals, including single-story homes.
                                        Learn more and find your perfect rental today!</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-first"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Faiba Fast Wifi</h3>
                                    <p>We are the most trusted name in real estate. We offer exceptional tenant services,
                                        well-maintained estates, and a variety of rentals, including single-story homes.
                                        Learn more and find your perfect rental today!</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-first"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Kitchen</h3>
                                    <p>We are the most trusted name in real estate. We offer exceptional tenant services,
                                        well-maintained estates, and a variety of rentals, including single-story homes.
                                        Learn more and find your perfect rental today!</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-first"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Ironing</h3>
                                    <p>We are the most trusted name in real estate. We offer exceptional tenant services,
                                        well-maintained estates, and a variety of rentals, including single-story homes.
                                        Learn more and find your perfect rental today!</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-first"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Lovkers</h3>
                                    <p>We are the most trusted name in real estate. We offer exceptional tenant services,
                                        well-maintained estates, and a variety of rentals, including single-story homes.
                                        Learn more and find your perfect rental today!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro" style="background-image: url('{{ asset('assets/images/bg_1.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 text-center">
                    <h2>Ready to get started</h2>
                    <p class="mb-4">Get your dream stay in clicks or drop us a line
                        with your questions.</p>
                    <p class="mb-0"><a href="sign-in" class="btn btn-primary px-4 py-3">Let Now</a> <a href="contact"
                            class="btn btn-white px-4 py-3">Contact us</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Latest news from our blog</h2>
                    <span class="subheading">News &amp; Blog</span>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded"
                            style="background-image: url('{{ asset('assets/images/image_1.jpg') }}');">
                        </a>
                        <div class="text p-4 text-center">
                            <h3 class="heading"><a href="#">Get a Rental to rise  and grow your Family</a>
                            </h3>
                            <div class="meta mb-2">
                                <div><a href="#">January 30, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                            </div>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded"
                            style="background-image: url('{{ asset('assets/images/image_1.jpg') }}');">
                        </a>
                        <div class="text p-4 text-center">
                            <h3 class="heading"><a href="#">Get a Rental to rise  and grow your Family</a>
                            </h3>
                            <div class="meta mb-2">
                                <div><a href="#">January 30, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                            </div>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded"
                            style="background-image: url('{{ asset('assets/images/image_1.jpg') }}');">
                        </a>
                        <div class="text p-4 text-center">
                            <h3 class="heading"><a href="#">Get a Rental to rise  and grow your Family</a>
                            </h3>
                            <div class="meta mb-2">
                                <div><a href="#">January 30, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                            </div>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
