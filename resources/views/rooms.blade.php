@extends('layout.app')

@section('content')


    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/images/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Rooms <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Apartment Room</h1>
          </div>
        </div>
      </div>
    </section>
   
    <section class="ftco-section bg-light ftco-no-pt ftco-no-pb">
			<div class="container-fluid px-md-0">
				<div class="row no-gutters">
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="#" class="img" style="background-image: url('{{ asset('assets/images/room-1.jpg') }}');"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">Ksh. 12000.00</span> <span class="per">per month</span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Suite Room</a></h3>
	    						<ul class="list-accomodation">
	    							<li><span>Max:</span> 3 Persons</li>
	    							<li><span>Size:</span> 45 m2</li>
	    							<li><span>View:</span> Villas Aerial view</li>
	    							<li><span>Bed:</span> 1</li>
	    						</ul>
	    						<p class="pt-1"><a href="room-single" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="#" class="img" style="background-image: url('{{ asset('assets/images/room-2.jpg') }}');"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">Ksh. 12000.00</span> <span class="per">per month</span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Standard Room</a></h3>
									<ul class="list-accomodation">
	    							<li><span>Max:</span> 3 Persons</li>
	    							<li><span>Size:</span> 45 m2</li>
	    							<li><span>View:</span> Villas Aerial view</li>
	    							<li><span>Bed:</span> 1</li>
	    						</ul>
	    						<p class="pt-1"><a href="room-single" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>

    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="#" class="img order-md-last" style="background-image: url('{{ asset('assets/images/room-3.jpg') }}');"></a>
    					<div class="half right-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">Ksh. 12000.00</span> <span class="per">per month</span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Family Room</a></h3>
									<ul class="list-accomodation">
	    							<li><span>Max:</span> 3 Persons</li>
	    							<li><span>Size:</span> 45 m2</li>
	    							<li><span>View:</span> Villas Aerial view</li>
	    							<li><span>Bed:</span> 1</li>
	    						</ul>
	    						<p class="pt-1"><a href="room-single" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="#" class="img order-md-last" style="background-image: url('{{ asset('assets/images/room-4.jpg') }}');"></a>
    					<div class="half right-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">Ksh. 12000.00</span> <span class="per">per month</span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Deluxe Room</a></h3>
									<ul class="list-accomodation">
	    							<li><span>Max:</span> 3 Persons</li>
	    							<li><span>Size:</span> 45 m2</li>
	    							<li><span>View:</span> Villas Aerial view</li>
	    							<li><span>Bed:</span> 1</li>
	    						</ul>
	    						<p class="pt-1"><a href="room-single" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>

    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="#" class="img" style="background-image: url('{{ asset('assets/images/room-5.jpg') }}');"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Luxury Room</a></h3>
									<ul class="list-accomodation">
	    							<li><span>Max:</span> 3 Persons</li>
	    							<li><span>Size:</span> 45 m2</li>
	    							<li><span>View:</span> Villas Aerial view</li>
	    							<li><span>Bed:</span> 1</li>
	    						</ul>
	    						<p class="pt-1"><a href="room-single" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="#" class="img" style="background-image: url('{{ asset('assets/images/room-6.jpg') }}');"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Superior Room</a></h3>
									<ul class="list-accomodation">
	    							<li><span>Max:</span> 3 Persons</li>
	    							<li><span>Size:</span> 45 m2</li>
	    							<li><span>View:</span> Villas Aerial view</li>
	    							<li><span>Bed:</span> 1</li>
	    						</ul>
	    						<p class="pt-1"><a href="room-single" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
			</div>
		</section>
@endsection