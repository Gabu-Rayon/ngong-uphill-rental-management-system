@extends('layout.app')

@section('content')
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/images/Rental-Sign-up.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Sign Up <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Sign Up</h1>
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
                                    <h3 class="mb-4">Register Here</h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <div id="form-message-success" class="mb-4">
                                        Create your Account
                                    </div>
                                    <form method="POST" id="contactForm" action="/users/create" name="contactForm"
                                        class="contactForm">

                                        @csrf
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Full Name</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Name" value="{{old('name')}}">
                                                    @error('name')
                                                        <p class="text-danger  mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Username</label>
                                                    <input type="text" class="form-control" name="username"
                                                        id="username" placeholder="Username" value="{{old('username')}}">
                                                    @error('username')
                                                        <p class="text-danger  mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Email Address" value="{{old('email')}}">
                                                    @error('email')
                                                        <p class="text-danger  mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="contact">Contact</label>
                                                    <input type="number" class="form-control" name="contact" id="contact"
                                                        placeholder="Contact" value="{{old('contact')}}">
                                                    @error('contact')
                                                        <p class="text-danger  mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="City">City/Town</label>
                                                    <input type="text" class="form-control" name="town" id="town"
                                                        placeholder="City/Town" value="{{old('town')}}">
                                                    @error('town')
                                                        <p class="text-danger  mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Password</label>
                                                    <input type="password" class="form-control" name="password"
                                                        id="password" placeholder="Password">
                                                    @error('password')
                                                        <p class="text-danger  mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label"
                                                        for="password-confirmation">ConfirmPassword</label>
                                                    <input type="password" class="form-control" name="password_confirmation"
                                                        id="passwordConfirmation" placeholder="Confirm Password">
                                                    @error('password_confirmation')
                                                        <p class="text-danger  mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Sign Up" name="register"
                                                        class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                Already Have an Account ?
                                                <a href="sign-in"> Sign in Here</a>
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
