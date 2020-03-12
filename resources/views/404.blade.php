@extends('layouts.master')

@section('content')
	
	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3"> 404 </h1>
			<div class="breadcrumb-main">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="/">Home</a>
					</li>
					<li class="breadcrumb-item active">404</li>
				</ol>
			</div>
		</div>
	</div>

    <!-- Page Content -->
    <div class="container">
		<div class="error-contents">
			<div class="error-img">
				<img class="img-fluid" src="images/404.png" alt="" />
			</div>
			<h3>Oops! That page can’t be found.</h3>
			<p>We can’t find the page your are looking for. You can check out our <a href="#">Homepage</a>.</p>
			<a class="btn btn-primary" href="#"> Back To Homepage </a>
		</div>
		<!-- /.jumbotron -->
    </div>

@endsection
