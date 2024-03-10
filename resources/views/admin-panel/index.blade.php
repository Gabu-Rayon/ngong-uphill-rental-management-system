@extends('_adminLayout.app')

@section('content')
    <div id="userContentContainer">
        <nav id="userSideBar">
            <div class="image">
                <div class="text-center mt-3">
                    <img src="https://via.placeholder.com/100" alt="User Profile Image"
                        class="rounded-circle user-profile-image" width="150">
                    <a href="#" class="update-profile-icon" data-toggle="tooltip" data-placement="bottom"
                        title="Update Profile Image">
                        <span class="fa fa-plus-circle text-dark"></span>
                    </a>
                </div>
            </div>
            <div class="userSideBar-header text-center">
                <h3>Welcome, {{ $user->username }}
                </h3>
                <p>Email: {{ $user->email }}</p>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Profile</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Profile</a>
                        </li>
                        <li>
                            <a href="#">Edit Profile</a>
                        </li>
                        <li>
                            <a href="#">Update Password</a>
                        </li>
                    </ul>
                </li>
                <hr>
                <li>
                    <a href="pay-rental">Edit Profile</a>
                </li>
                <hr>
                <li>
                    <a href="add-house">Update Password</a>
                </li>
                <hr>
                <li>
                    <a href="#">Settings</a>
                </li>
            </ul>
        </nav>

        <div id="mainContent">
            <section class="ftco-section bg-light">
                <div class="container">

                    <div class="col-md-12">
                        <div class="wrapper">
                            <div class="row no-gutters">
                                <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
                                    <div class="row d-flex">
                                        <div class="col-md-4 d-flex ftco-animate">
                                            <div class="blog-entry align-self-stretch">
                                                {{-- show Number of  categories --}}
                                                <h6>Number of Categories</h6>
                                                <p>{{ $categoryCount }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-flex ftco-animate">
                                            <div class="blog-entry align-self-stretch">
                                                <h6>Number of Houses</h6>
                                                <p>{{ $houseCount }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-flex ftco-animate">
                                            <div class="blog-entry align-self-stretch">
                                                <h6>Number of Registered Tenants</h6>
                                                <p>{{ $tenantCount }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-flex ftco-animate">
                                            <div class="blog-entry align-self-stretch">
                                                <h6>Number of Payments</h6>
                                                <p>{{ $paymentCount }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
                                    <h4>HOUSES</h4>
                                    <br>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>House No</th>
                                                <th>House category</th>
                                                <th>Description</th>
                                                <th>Letting /Month Price</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($houses as $house)
                                                <tr>
                                                    <td>{{ $house->id }}</td>
                                                    <td>{{ $house->house_no }}</td>
                                                    <td>{{ $house->category->name }}</td>
                                                    <td>{{ $house->description }}</td>
                                                    <td>{{ $house->price }}</td>
                                                    <td>
                                                        <a href="{{ route('house.edit', $house->id) }}"
                                                            class="btn btn-primary">Edit</a>
                                                        <br>
                                                        <a href="{{ route('house.delete', $house->id) }}"
                                                            class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
                                    <h4>Houses Categories</h4>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category Name</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td>{{ $category->id }}</td>
                                                    <td>{{ $category->name }}</td>
                                                     <td>
                                                        <a href="{{ route('category.edit', $category->id) }}"
                                                            class="btn btn-primary">Edit</a>
                                                        <br>
                                                        <a href="{{ route('category.delete', $category->id) }}"
                                                            class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
                                    <h4>Registered Tenants</h4>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>House No</th>
                                                <th>House Category</th>
                                                <th>Letting Price</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tenants as $tenant)
                                                <tr>
                                                    <td>{{ $tenant->id }}</td>
                                                    <td>{{ $tenant->name }}</td>
                                                    <td>{{ $tenant->house->house_no ?? 'N/A' }}</td>
                                                    <td>{{ optional($tenant->house->category)->name ?? 'N/A' }}</td>
                                                    <td>Ksh {{ $tenant->house->price ?? 'N/A' }}</td>
                                                    <td>
                                                        <a href="{{ route('tenant.edit', $tenant->id) }}"
                                                            class="btn btn-primary">Edit</a>
                                                        <br>
                                                        <a href="{{ route('tenant.delete', $tenant->id) }}"
                                                            class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
                                    <h4>Paid Rent payments</h4>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tenant Name</th>
                                                <th>House No</th>
                                                <th>paid Amount</th>
                                                <th>Paid Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($payments as $payment)
                                                <tr>
                                                    <td>{{ $payment->id }}</td>
                                                    <td>{{ $payment->name }}</td>
                                                    <td>{{ $payment->house_no }}</td>
                                                    <td>{{ $payment->amount }}</td>
                                                    <td>{{ $payment->amount }}</td>
                                                    <td>
                                                        <a href="{{ route('payment.edit', $payment->id) }}"
                                                            class="btn btn-primary">Edit</a>
                                                        <br>
                                                        <a href="{{ route('payment.delete', $payment->id) }}"
                                                            class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
