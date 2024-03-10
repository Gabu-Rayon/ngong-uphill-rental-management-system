@extends('layout.app')

@section('content')
    <div id="userContentContainer">
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
                    <a href="#">Ask For Maintaince</a>
                </li>
            </ul>
        </nav>

        <div id="mainContent">
            <section class="ftco-section bg-light">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <div class="text p-4 text-center">
                                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                     Quisquam ea nihil a quaerat. Voluptas ducimus ut dolore explicabo reiciendis 
                                    dolorem hic iste pariatur optio, eius quod repellat, illum corrupti itaque.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <div class="text p-4 text-center">
                                    @if ($userHasHouse)
                                        <p>House Category: {{ $tenant->house->category->name }}</p>
                                        <p>House No: {{ $tenant->house->house_no }}</p>
                                        <p>Price: {{ $tenant->house->price }}</p>
                                        <!-- Add more details as needed -->
                                    @else
                                        <p>No house information available. Please add your house.</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4 d-flex ftco-animate">
                                <div class="blog-entry align-self-stretch">
                                    <div class="text p-4 text-center">
                                        <p>Show user All Maintaince Request</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
@endsection
