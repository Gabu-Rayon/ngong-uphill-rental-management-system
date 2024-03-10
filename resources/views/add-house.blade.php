@extends('layout.app')

@section('content')
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="bg-primary text-white p-3">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/user-profile') }}" class="text-dark">User Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Your House</li>
        </ol>
    </nav>

    <div class="col-md-12">
        <div class="wrapper">
            <div class="row no-gutters">
                <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
                    <div class="contact-wrap w-100 p-md-5 p-4">
                        <h3 class="mb-4">Add House</h3>
                        <div id="form-message-warning" class="mb-4"></div>
                        <div id="form-message-success" class="mb-4">
                            Please Confirm you details before adding!
                        </div>
                        <form method="POST" id="contactForm" action="users/update-house" name="contactForm"
                            class="contactForm">

                            @csrf

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="payment_method">House</label>
                                        <select class="form-control" name="house" id="house" value="">
                                            <option value="#">Select House</option>
                                            @foreach ($houses as $house)
                                                <option value="{{ $house->id }}">
                                                    Category: {{ $house->category->name }},
                                                    House No: {{ $house->house_no }},
                                                    Price: {{ $house->price }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                        required>
                                    <label class="form-check-label" for="invalidCheck">
                                        By click and slecting you house you agree to terms and conditions as Tenants as sign
                                        in the mutual Agreement of terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="">
                                <div class="form-group">
                                    <input type="submit" value="Add Now" class="btn btn-primary">
                                    <div class="submitting"></div>
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
@endsection
