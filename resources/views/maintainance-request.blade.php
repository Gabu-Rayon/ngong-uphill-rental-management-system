@extends('layout.app')

@section('content')
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/images/bg_1.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Maintainance Request <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Maintainance Request</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Maintainance Request</h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <div id="form-message-success" class="mb-4">
                                        Request Maintainance Ticket, thank you!
                                    </div>
                                    <form method="POST" action="/users/request-maintainance" id="contactForm"
                                        name="contactForm" class="contactForm">

                                        @csrf

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Request Subject</label>
                                                    <input type="text" class="form-control" name="request_subject"
                                                        id="requestSubject" placeholder="Request Subject"
                                                        value="{{ old('request_subject') }}">
                                                    @error('request_subject')
                                                        <p class="text-danger  mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Request Maintainance </label>
                                                    <textarea name="maintainance_message" class="form-control" id="maintainanceMessage" cols="30" rows="4"
                                                        placeholder="Enter you maintainance Request" value="{{ old('maintainance_message') }}"></textarea>
                                                    @error('maintainance_message')
                                                        <p class="text-danger  mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" name="request_maintainance" value="Request Now"
                                                        class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
