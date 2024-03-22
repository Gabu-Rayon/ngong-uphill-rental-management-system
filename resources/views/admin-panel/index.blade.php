@extends('_adminLayout.app')

@section('content')
    <div id="userContentContainer">
        @if (session('success'))
            <script>
                alert("{{ session('success') }}");
            </script>
        @endif
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
                                        <div class="col-md-4 d-flex ftco-animate">
                                            <div class="blog-entry align-self-stretch">
                                                <h6>Number of Maintainance Request</h6>
                                                <p>{{ $maintainanceCount }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-8 col-md-7 d-flex align-items-stretch">

                                    <h4>HOUSES</h4>
                                    <div class="col-md-4"><a href="{{ route('add.house') }}" class="btn btn-success">Add
                                            House</a>
                                    </div>
                                    <br><br>
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
                                                        <a href="{{ route('edit.house', $house->id) }}"
                                                            class="btn btn-primary">Edit</a>
                                                        <br><br>
                                                        <button
                                                            onclick="confirmDelete('{{ $house->house_no }}', {{ $house->id }})"
                                                            class="btn btn-danger">Delete</button>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
                                    <h4>Houses Categories</h4>
                                    <div class="col-md-4">
                                        <a href="{{ route('add.category') }}" class="btn btn-success">Add
                                            Category
                                        </a>
                                    </div>
                                    <br><br>
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
                                                        <a href="{{ route('edit.category', $category->id) }}"
                                                            class="btn btn-primary">Edit</a>
                                                        <br><br>
                                                        <button class="btn btn-danger delete-category-btn"
                                                            data-category-id="{{ $category->id }}">Delete</button>
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
                                                        <br><br>
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
                                                    <td> Ksh {{ $payment->amount }}</td>
                                                    <td>{{ $payment->created_at }}</td>
                                                    <td>
                                                        <br><br>
                                                        <a href="{{ route('delete.payment', $payment->id) }}"
                                                            class="btn btn-danger">Delete</a>
                                                        <br><br>
                                                        <a href="{{ route('print.payment', $payment->id) }}"
                                                            class="btn btn-danger">Print</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3"><strong>Total per Month:</strong></td>
                                                <td colspan="4">Ksh {{ $totalPerMonth }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"><strong>Total per Year:</strong></td>
                                                <td colspan="4">Ksh {{ $totalPerYear }}</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    </table>
                                </div>
                                <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
                                    <h4>Maintainance Requests</h4>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tenant Name</th>
                                                <th>House No</th>
                                                <th>Subject</th>
                                                <th>Request</th>
                                                <th>Status</th>
                                                <span></span>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($maintainances as $maintainance)
                                                <tr>
                                                    <td>{{ $maintainance->id }}</td>
                                                    <td>{{ $maintainance->tenant->name }}</td>
                                                    <td>{{ $maintainance->tenant->house_no }}</td>
                                                    <td>{{ $maintainance->subject }}</td>
                                                    <td>{{ $maintainance->request }}</td>
                                                    <td>
                                                    <td>
                                                        @if ($maintainance->status == 1)
                                                            <button class="btn btn-success"
                                                                onclick="toggleStatus({{ $maintainance->id }}, 0, this)">Approved</button>
                                                        @else
                                                            <button class="btn btn-secondary"
                                                                onclick="toggleStatus({{ $maintainance->id }}, 1, this)">Pending</button>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        <a href="{{ route('maintainance.delete', $maintainance->id) }}"
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
                <!-- Confirmation Modal -->
                <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog"
                    aria-labelledby="confirmationModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this category?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-danger" id="confirmDelete">Yes, Delete</button>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endsection
