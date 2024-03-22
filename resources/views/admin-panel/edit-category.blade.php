@extends('_adminLayout.app')

@section('content')
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="bg-primary text-white p-3">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/admin/index') }}" class="text-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/add-category') }}" class="text-dark">Add Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Category</li>
        </ol>
    </nav>
    <div class="col-md-12">
        <div class="wrapper">
            <div class="row no-gutters">
                <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
                    <div class="contact-wrap w-100 p-md-5 p-4">
                        <h3 class="mb-4">Add Category</h3>
                        <div id="form-message-warning" class="mb-4"></div>
                        <form method="POST" action="{{ route('update.category') }}" id="contactForm" name="contactForm"
                            class="contactForm">

                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="name">Category Name</label>
                                        <input type="text" class="form-control" name="category" id="category"
                                            placeholder="House No e.g. Duplex,storey,bedsitter e.t.c" value="{{ $category->name}}">
                                        @error('category')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                     <input type="hidden" name="id" value="{{ $category->id }}">
                                
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" value="UpdateHouse" class="btn btn-primary">
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
@endsection
