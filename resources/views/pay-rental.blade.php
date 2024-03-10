@extends('layout.app')

@section('content')
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="bg-primary text-white p-3">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/user-profile') }}" class="text-dark">User Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pay My Rental</li>
        </ol>
    </nav>

    <div class="col-md-12">
        <div class="wrapper">
            <div class="row no-gutters">
                <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
                    <div class="contact-wrap w-100 p-md-5 p-4">
                        <h3 class="mb-4">Pay My Rental</h3>
                        <div id="form-message-warning" class="mb-4"></div>
                        <div id="form-message-success" class="mb-4">
                            Please Confirm you details before payment!
                        </div>
                        <form method="POST" id="contactForm" action="users/rent-payment" name="contactForm"
                            class="contactForm">

                            @csrf

                            <div class="row">
                                    <input type="hidden" name="user_id" value="{{ $tenant ? $tenant->id : '' }}">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="name">Full Name</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Name" value="{{ $tenant->name }}" value="{{ old('name') }}">
                                        @error('name')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="email">Email Address</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Email" value="{{ $tenant->email }}" value="{{ old('email') }}">
                                        @error('email')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="house_no">House Number</label>
                                        <input type="text" class="form-control" name="house_no" id="house_no"
                                            placeholder="House Number" value="{{ $tenant->house->house_no }}"
                                            value="{{ old('house_name') }}">
                                        @error('house_no')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="category">Category</label>
                                        <input type="text" class="form-control" name="category" id="category"
                                            placeholder="Category" value="{{ $tenant->house->category->name }}"
                                            value="{{ old('category') }}">
                                        @error('category')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="rent_amount">Rent Amount</label>
                                        <input type="text" class="form-control" name="rent_amount" id="rent_amount"
                                            placeholder="Rent Amount" value="{{ $tenant->house->price }}"
                                            value="{{ old('rent_amount') }}">
                                        @error('rent_amount')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="payment_method">Payment Method</label>
                                        <select class="form-control" name="payment_method" id="payment_method"
                                            value="{{ old('payment_method') }}">
                                            <option value="#">Select Method of Payment</option>
                                            <option value="credit_card">Credit Card</option>
                                            <option value="paypal">Paypal</option>
                                            <option value="mpesa">Mpesa</option>
                                            <option value="bank_account">Bank Account</option>
                                            <option value="visa">Visa</option>
                                        </select>
                                        @error('payment_method')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!-- Payment details for Credit Card -->
                                    <div id="credit_card_details" class="payment-details">
                                        <div>
                                            <p>Bank Account No: 1223454</p>
                                            <p>Bank: Czesch Bank </p>
                                            <p>Bank Account Name:Swqswee</p>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label class="label" for="card_holder_name">Enter Code After Payment
                                                :</label>
                                            <input type="text" class="form-control" id="card_account_code"
                                                name="card_account_code" placeholder="Card Account Code"
                                                value="{{ old('card_account_code') }}">
                                            @error('card_account_code')
                                                <p class="text-danger mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <!-- Payment details for Paypal -->
                                    <div id="paypal_details" class="payment-details">
                                        <p class="text-bold text-danger">Paypal Email: info@ngonguphillsrental.co.ke</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <!-- Payment details for Mpesa -->
                                <div id="mpesa_details" class="payment-details">
                                    <div class="d-flex text-bold text-dark">
                                        <!-- Card 1 -->
                                        <div class="card mr-3">
                                            <div class="card-body">
                                                <p class="card-text">Mpesa Paybill: 3344066</p>
                                                <p class="card-text">Store Number: 560343</p>
                                                <p class="card-text">Account Name: Scedh</p>
                                            </div>
                                        </div>

                                        <!-- Card 2 -->
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="card-text">Buy Good Till Number: 90807</p>
                                                <p class="card-text">Account Name: trweedad</p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label class="label" for="card_holder_name">Enter Mpesa Code After Payment
                                            :</label>
                                        <input type="text" class="form-control" id="mpesa_account_code"
                                            name="mpesa_account_code" placeholder="Mpesa Account Code"
                                            value="{{ old('mpesa_account_code') }}">
                                        @error('mpesa_account_code')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <!-- Payment details for Bank Account -->
                                <div id="bank_account_details" class="payment-details">
                                    <div class="card text-bold text-dark">
                                        <p class="card-text">Bank Account No: 12200000000</p>
                                        <p class="card-text">Bank: Czesch Bank </p>
                                        <p class="card-text">Bank Account Name:Swee</p>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label class="label" for="card_holder_name">Enter Bank Code After Payment
                                            :</label>
                                        <input type="text" class="form-control" id="bank_account_code"
                                            name="bank_account_code" placeholder="Bank Account Code"
                                            value="{{ old('bank_account_code') }}">
                                        @error('bank_account_code')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div id="visa_details" class="payment-details">
                                    <div class="form-group">
                                        <label class="label" for="card_holder_name">Card Holder Name</label>
                                        <input type="text" class="form-control" id="card_holder_name"
                                            name="card_holder_name" placeholder="Card Holder Name">
                                        @error('card_holder_name')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="label" for="expiry_date">Expiry Date</label>
                                        <input type="date" class="form-control" id="expiry_date" name="expiry_date"
                                            placeholder="MM/YYYY" value="{{ old('expiry_date') }}">
                                        @error('expiry_date')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="label" for="cvv">CVV</label>
                                        <input type="text" class="form-control" id="cvv" name="cvv"
                                            placeholder="CVV" value="{{ old('cvv') }}">
                                        @error('cvv')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="label" for="last_three_digits">Last 3 Digits of Visa</label>
                                        <input type="text" class="form-control" id="last_three_digits"
                                            name="last_three_digits" placeholder="Last 3 Digits"
                                            value="{{ old('last_three_digits') }}">
                                        @error('last_three_digits')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="">
                                <div class="form-group">
                                    <input type="submit" value="Pay Now" class="btn btn-primary">
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
