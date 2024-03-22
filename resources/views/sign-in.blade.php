@extends('layout.app')

@section('content')
    <!-- END nav -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Check if the registration_alert session variable exists
            var registrationAlert = '{{ session('registration_alert') }}';

            if (registrationAlert) {
                // Display an alert using JavaScript
                alert(registrationAlert);
            }
        });
    </script>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/images/Rental-Sign-up.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Sign in <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Sign in</h1>
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
                                    <h3 class="mb-4">Sign Here </h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <div id="form-message-success" class="mb-4">
                                        Sign in to your Account
                                    </div>
                                    @if ($errors->has('auth'))
                                        <p class="text-danger mt-1">{{ $errors->first('auth') }}</p>
                                    @endif
                                    <form method="POST" id="contactForm" action="/users/authenticate" name="contactForm"
                                        class="contactForm">

                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Username</label>
                                                    <input type="text" class="form-control" name="username"
                                                        id="username" placeholder="Username">
                                                    @error('username')
                                                        <p class="text-danger mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Password</label>
                                                    <input type="password" class="form-control" name="password"
                                                        id="password" placeholder="Password">
                                                    @error('password')
                                                        <p class="text-danger mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Sign In" name="signin" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                Don't Have an Account ?
                                                <a href="sign-up"> Sign up Here</a>
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
        </div>
        </div>
    </section>
@endsection
