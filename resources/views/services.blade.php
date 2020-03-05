@extends('layouts.master')

@section('content')
	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">Services</h1>
			<div class="breadcrumb-main">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="/">Home</a>
					</li>
					<li class="breadcrumb-item active">Services</li>
				</ol>
			</div>
		</div>
	</div>
	
    <!-- Page Content -->
    <div class="container">
		<!-- Image Header -->
		<img class="img-fluid rounded mb-4" src="images/services-big.jpg" alt="" />
	</div>
	<div class="services-bar">
		<div class="container">
			<h1 class="py-4">Our Best Services </h1>
			<!-- Services Section -->
			<div class="row">
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="images/services-img-01.jpg" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Analytics </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="images/services-img-02.jpg" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Applications </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="images/services-img-03.jpg" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Business Process </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="images/services-img-04.jpg" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Consulting </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>						
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="images/services-img-05.jpg" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Infrastructure </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>						
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="images/services-img-06.jpg" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Product Engineering </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>
					</div>
			   </div>
			</div>
			<!-- /.row -->
		</div>
	</div>
	
	<div class="container">
		<!-- Our Customers -->
		<div class="customers-box"> 
			<h2>Our Customers</h2>
			<div class="row">
				<div class="col-lg-12">
					<div id="customers-slider" class="owl-carousel">
						<div class="mb-4">
							<img class="img-fluid" src="images/logo_01.png" alt="" />
						</div>
						<div class="mb-4">
							<img class="img-fluid" src="images/logo_02.png" alt="" />
						</div>
						<div class="mb-4">
							<img class="img-fluid" src="images/logo_03.png" alt="" />
						</div>
						<div class="mb-4">
							<img class="img-fluid" src="images/logo_04.png" alt="" />
						</div>
						<div class="mb-4">
							<img class="img-fluid" src="images/logo_05.png" alt="" />
						</div>
						<div class="mb-4">
							<img class="img-fluid" src="images/logo_06.png" alt="" />
						</div>
					</div>
				</div>
			</div>
			<!-- /.row -->
		</div>
    </div>
    <!-- /.container -->

  @endsection