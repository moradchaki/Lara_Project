@extends('layouts.master')

@section('content')

	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">Pricing</h1>
			<div class="breadcrumb-main">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="/">Home</a>
					</li>
					<li class="breadcrumb-item active">Pricing</li>
				</ol>
			</div>
		</div>
	</div>

    <!-- Page Content -->
    <div class="container">
		<div class="pricing-box">
		<!-- Content Row -->
			<div class="row">
				<div class="col-lg-4 mb-4">
					<div class="card h-100 bg-01">
						<div class="card-header">
							<h3 class="">Basic</h3>
							<div class="display-4">$19.99</div>
							<div class="font-italic">per month</div>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Limitless Concepts</li>
							<li class="list-group-item">Annual Reports</li>
							<li class="list-group-item">Free Support</li>
							<li class="list-group-item">Expert Reviews</li>
							<li class="list-group-item">Community Access</li>
							<li class="list-group-item">
							<a href="#" class="btn btn-primary">Purchase</a>
						  </li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="card card-outline-primary bg-02 h-100">
						<div class="card-header">
							<h3 class="text-white">
								Plus
								<span class="most_popular">Most Popular</span>
							</h3>
							<div class="display-4">$39.99</div>
							<div class="font-italic">per month</div>
						</div>						
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Limitless Concepts</li>
							<li class="list-group-item">Annual Reports</li>
							<li class="list-group-item">Free Support</li>
							<li class="list-group-item">Expert Reviews</li>
							<li class="list-group-item">Community Access</li>
							<li class="list-group-item">
							<a href="#" class="btn btn-primary">Purchase</a>
						  </li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="card h-100 bg-03">
						<div class="card-header">
							<h3 class="">Ultra</h3>
							<div class="display-4">$159.99</div>
							<div class="font-italic">per month</div>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Limitless Concepts</li>
							<li class="list-group-item">Annual Reports</li>
							<li class="list-group-item">Free Support</li>
							<li class="list-group-item">Expert Reviews</li>
							<li class="list-group-item">Community Access</li>
							<li class="list-group-item">
							<a href="#" class="btn btn-primary">Purchase</a>
						  </li>
						</ul>
					</div>
				</div>
			</div>
		<!-- /.row -->
		</div>
    </div>
    <!-- /.container -->
	
	@endsection