@extends('layout.app')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/images/bg_1.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>About us <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">About Us</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
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
                                    <p>I have been a tenants for Ngong Uphill's over a decade and I can complain the
                                        management is workinf doing there work as expected deleivery is on time and give
                                        them a 5 stars </p>
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
                                    <p>I have been a tenants for Ngong Uphill's over a decade and I can complain the
                                        management is workinf doing there work as expected deleivery is on time and give
                                        them a 5 stars </p>
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
                                    <p>I have been a tenants for Ngong Uphill's over a decade and I can complain the
                                        management is workinf doing there work as expected deleivery is on time and give
                                        them a 5 stars </p>
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
                                    <p>I have been a tenants for Ngong Uphill's over a decade and I can complain the
                                        management is workinf doing there work as expected deleivery is on time and give
                                        them a 5 stars </p>
                                    <p class="name">Rodel Golez</p>
                                    <span class="position">Businesswoman</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img"
                                    style="background-image: url('{{ asset('assets/images/person_1.jpg') }}');">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                    <p>I have been a tenants for Ngong Uphill's over a decade and I can complain the
                                        management is workinf doing there work as expected deleivery is on time and give
                                        them a 5 stars </p>
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
                        rental today! </p>
                </div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class="heading-section">
                        <div class="pl-md-5">
                            <h2 class="mb-2">What we offer</h2>
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
                            well-maintained estates, and a variety of rentals, including single-story homes. Learn more and
                            find your perfect rental today!</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-workout"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Hot Showers</h3>
                                    <p>We are the most trusted name in real estate. We offer exceptional tenant services,
                            well-maintained estates, and a variety of rentals, including single-story homes. Learn more and
                            find your perfect rental today!</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-diet-1"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Laundry</h3>
                                    <p>We are the most trusted name in real estate. We offer exceptional tenant services,
                            well-maintained estates, and a variety of rentals, including single-story homes. Learn more and
                            find your perfect rental today!</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-first"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Air Conditioning</h3>
                                    <p>We are the most trusted name in real estate. We offer exceptional tenant services,
                            well-maintained estates, and a variety of rentals, including single-story homes. Learn more and
                            find your perfect rental today!</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-first"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Faiba Fast Wifi</h3>
                                    <p>We are the most trusted name in real estate. We offer exceptional tenant services,
                            well-maintained estates, and a variety of rentals, including single-story homes. Learn more and
                            find your perfect rental today!</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-first"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Kitchen</h3>
                                    <p>We are the most trusted name in real estate. We offer exceptional tenant services,
                            well-maintained estates, and a variety of rentals, including single-story homes. Learn more and
                            find your perfect rental today!</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-first"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Ironing</h3>
                                    <p>We are the most trusted name in real estate. We offer exceptional tenant services,
                            well-maintained estates, and a variety of rentals, including single-story homes. Learn more and
                            find your perfect rental today!</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-first"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Lovkers</h3>
                                    <p>We are the most trusted name in real estate. We offer exceptional tenant services,
                            well-maintained estates, and a variety of rentals, including single-story homes. Learn more and
                            find your perfect rental today!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
