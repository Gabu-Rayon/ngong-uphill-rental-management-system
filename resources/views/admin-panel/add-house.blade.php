@extends('_adminLayout.app')

@section('content')
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="bg-primary text-white p-3">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/admin/index') }}" class="text-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/add-house') }}" class="text-dark">Add House</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add House</li>
        </ol>
    </nav>
    <div class="col-md-12">
        <div class="wrapper">
            <div class="row no-gutters">
                <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
                    <div class="contact-wrap w-100 p-md-5 p-4">
                        <h3 class="mb-4">Edit House</h3>
                        <div id="form-message-warning" class="mb-4"></div>
                        <form method="POST" action="{{ route('create.house') }}" id="contactForm" name="contactForm"
                            class="contactForm">
                            @csrf

                            <div class="row">
                                <input type="hidden" class="form-control" name="house_no" id="house_no"
                                    placeholder="House No e.g. 23450" value="{" required>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="name">House No</label>
                                        <input type="text" class="form-control" name="house_no" id="house_no"
                                            placeholder="House No e.g. 23450" value="">
                                        @error('house_no')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="category_id">House Category</label>
                                        <select class="form-control" name="category_id" id="category_id">
                                            <option value="">Select Category</option> <!-- Default option -->
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="house_no">Description</label>
                                        <input type="text" class="form-control" name="description" id="description"
                                            placeholder="description" value="">
                                        @error('house_no')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="category">Letting Price ./Monthly</label>
                                        <input type="text" class="form-control" name="price" id="price"
                                            placeholder="Letting Price ./monthly" value="">
                                        @error('price')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="">
                                    <div class="form-group">
                                        <input type="submit" value="Add House" class="btn btn-primary">
                                        <div class="submitting"></div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
