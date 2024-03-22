<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ngong Rentals Management Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="wrap">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col d-flex align-items-center">
                    <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+254 7123 99340</a> or
                        <span class="mailus">email us:</span> <a href="#">info@ngonguphillsrental.co.ke</a>
                    </p>
                </div>
                <div class="col d-flex justify-content-end">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>


                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">NGONG UPHILL'S<span>Rental</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">

                    @auth('web')
                        <!-- Show Admin Logout when admin is logged in -->
                        <li class="nav-item"><a href="/admin/admin-logout" class="nav-link">Admin Logout</a></li>
                    @else
                        <!-- Show Admin Login when admin is not logged in -->
                        <li class="nav-item"><a href="/admin/admin-login" class="nav-link">Admin Login</a></li>
                    @endauth
                    {{-- <li class="nav-item"><a href="/admin/admin-login" class="nav-link">Admin Login</a></li> --}}
                </ul>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <main>

        @yield('content');

    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading"><a href="#" class="logo">Ngong Uphill's Rentals </a></h2>
                    <p>We are the most trusted name in real estate. We offer exceptional tenant services, well-maintained estates, and a variety of rentals, including single-story homes. Learn more and find your perfect rental today!</p>
                    <a href="/about">Read more <span class="fa fa-chevron-right" style="font-size: 11px;"></span></a>
                </div>
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading">Services</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-1 d-block">Map Direction</a></li>
                        <li><a href="#" class="py-1 d-block">Accomodation Services</a></li>
                        <li><a href="#" class="py-1 d-block">Great Experience</a></li>
                        <li><a href="#" class="py-1 d-block">Perfect central location</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading">Tag cloud</h2>
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">apartment</a>
                        <a href="#" class="tag-cloud-link">home</a>
                        <a href="#" class="tag-cloud-link">vacation</a>
                        <a href="#" class="tag-cloud-link">rental</a>
                        <a href="#" class="tag-cloud-link">rent</a>
                        <a href="#" class="tag-cloud-link">house</a>
                        <a href="#" class="tag-cloud-link">place</a>
                        <a href="#" class="tag-cloud-link">drinks</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading">Subcribe</h2>
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control rounded-left"
                                placeholder="Enter email address">
                            <button type="submit" class="form-control submit rounded-right"><span
                                    class="sr-only">Submit</span><i class="fa fa-paper-plane"></i></button>
                        </div>
                    </form>
                    <h2 class="footer-heading mt-5">Follow us</h2>
                    <ul class="ftco-footer-social p-0">
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="Twitter"><span class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="Facebook"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="Instagram"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-100 mt-5 border-top py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-8">

                        <p class="copyright mb-0">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This Website is made with by <a
                                href="#" target="_blank">ePledge Inc.</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-4 text-md-right">
                        <p class="mb-0 list-unstyled">
                            <a class="mr-md-3" href="#">Terms</a>
                            <a class="mr-md-3" href="#">Privacy</a>
                            <a class="mr-md-3" href="#">Compliances</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollax.min.js') }}"></script>
    <!-- Load Google Maps API with your API key -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&sensor=false"></script>
    <script src="{{ asset('assets/js/google-map.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Additional scripts -->
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

        /************************************************************************************/
        $(document).ready(function() {
            $(".payment-details").hide();
            $("#payment_method").change(function() {
                var selectedPaymentMethod = $(this).val();
                $(".payment-details").hide();
                $("#" + selectedPaymentMethod + "_details").show();
            });
        });
        /************************************************************************************/
        function validateForm() {
            if (!document.getElementById('invalidCheck').checked) {
                alert('Please agree to the terms and conditions before adding your house.');
                event.preventDefault();
            }
        }

        /************************************************************************************/
        //function to change maitainance status
        function toggleStatus(id, status, button) {
            // Send an AJAX request to toggle the status
            $.ajax({
                url: '/maintainance/toggle-status/' + id,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    status: status
                },
                success: function(response) {
                    // Update the button text and class based on the new status
                    if (status == 1) {
                        $(button).removeClass('btn-secondary').addClass('btn-success').text('Approved');
                    } else {
                        $(button).removeClass('btn-success').addClass('btn-secondary').text('Pending');
                    }
                },
                error: function(xhr) {
                    // Handle errors
                    console.error(xhr.responseText);
                }
            });
        }
        function confirmDelete(houseNo, houseId) {
            if (confirm("Are you sure you want to delete house number " + houseNo + "?")) {
                // If user confirms, redirect to the delete route
                window.location.href = "{{ url('/admin/delete-house') }}/" + houseId;
            }
        }



          $(document).ready(function () {
        var categoryIdToDelete;

        $('.delete-category-btn').click(function () {
            categoryIdToDelete = $(this).data('category-id');
            $('#confirmationModal').modal('show');
        });

        $('#confirmDelete').click(function () {
            // Perform deletion via AJAX or redirect to delete route
            // Example: Redirect to delete route using window.location.href
            window.location.href = "{{ url('/admin/delete-category') }}/" + categoryIdToDelete;
        });
    });
    </script>
</body>

</html>
