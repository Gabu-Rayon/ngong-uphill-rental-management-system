@extends('layout.app')

@section('content')
    <div id="userContentContainer">

        @if (session('request_alert'))
            <script>
                alert("{{ session('request_alert') }}");
            </script>
        @endif

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Check if the user has added a house
                @if (!$userHasHouse)
                    // Display a SweetAlert popup
                    Swal.fire({
                        title: 'Reminder',
                        text: 'Please add your house for future ease of rental payment and other benefits.',
                        icon: 'info',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Add House',
                        cancelButtonText: 'Later'
                    }).then((result) => {
                        // Redirect to the add-house page if the user clicks "Add House"
                        if (result.isConfirmed) {
                            window.location.href = '{{ url('/add-house') }}';
                        }
                    });
                @endif
            });
        </script>
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
                <h3>Welcome {{ $tenant->username }}</h3>
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
                    <a href="pay-rental">Pay Rental</a>
                </li>
                <hr>
                <li>
                    <a href="add-house">Add My houses</a>
                </li>
                <hr>
                <li>
                    <a href="maintainance-request">Ask For Maintenance</a>
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
                                    <h4>Payments</h4>
                                    <br>
                                    @if ($tenant->payments->isNotEmpty())
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Amount</th>
                                                        <th>House No.</th>
                                                        <th>Category</th>
                                                        <th>Payment Method</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($tenant->payments as $payment)
                                                        <tr>
                                                            <td>{{ $payment->created_at->format('Y-m-d') }}</td>
                                                            <td>{{ $payment->amount }}</td>
                                                            <td>{{ $payment->house_no }}</td>
                                                            <td>{{ $payment->category }}</td>
                                                            <td>{{ $payment->payment_method }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    @else
                                        <p>No payment yet.</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
                                <h4>House Information</h4>
                                @if ($userHasHouse)
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th>Category</th>
                                                    <td>{{ $tenant->house->category->name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>House No</th>
                                                    <td>{{ $tenant->house->house_no }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Letting Price ./Monthly</th>
                                                    <td>Ksh.{{ $tenant->house->price }}</td>
                                                </tr>
                                                <!-- Add more details as needed -->
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <p>No house information available. Please add your house.</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
                            <h4>Maintenance Requests</h4>
                            @if ($tenant->maintenanceRequests->isNotEmpty())
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Subject</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tenant->maintenanceRequests as $maintenanceRequest)
                                                <tr>
                                                    <td>{{ $maintenanceRequest->subject }}</td>
                                                    <td>
                                                        @if ($maintenanceRequest->status == 0)
                                                            Pending
                                                        @else
                                                            Approved
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <p>No maintenance requests available.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endsection
