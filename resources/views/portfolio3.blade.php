@extends('layouts.master')

@section('content')
	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3"> Portfolio 3 </h1>
			<div class="breadcrumb-main">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="/">Home</a>
					</li>
					<li class="breadcrumb-item active">Portfolio 3</li>
				</ol>
			</div>
		</div>
	</div>

    <div class="portfolio-col">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-6 portfolio-item">
					<div class="card h-100">
						<a class="hover-box" href="#">
							<div class="dot-full">
								<i class="fas fa-link"></i>
							</div>
							<img class="card-img-top" src="images/portfolio-big-01.jpg" alt="" />
						</a>
						<div class="card-body">
							<h4><a href="#">In viverra nisi vel facilisis dignissim.</a></h4>
							<p>Business Consulting</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 portfolio-item">
					<div class="card h-100">
						<a class="hover-box" href="#">
							<div class="dot-full">
								<i class="fas fa-link"></i>
							</div>
							<img class="card-img-top" src="images/portfolio-big-02.jpg" alt="" />
						</a>
						<div class="card-body">
							<h4><a href="#">In viverra nisi vel facilisis dignissim.</a></h4>
							<p>Business Consulting</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 portfolio-item">
					<div class="card h-100">
						<a class="hover-box" href="#">
							<div class="dot-full">
								<i class="fas fa-link"></i>
							</div>
							<img class="card-img-top" src="images/portfolio-big-03.jpg" alt="" />
						</a>
						<div class="card-body">
							<h4><a href="#">In viverra nisi vel facilisis dignissim.</a></h4>
							<p>Business Consulting</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 portfolio-item">
					<div class="card h-100">
						<a class="hover-box" href="#">
							<div class="dot-full">
								<i class="fas fa-link"></i>
							</div>
							<img class="card-img-top" src="images/portfolio-big-04.jpg" alt="" />
						</a>
						<div class="card-body">
							<h4><a href="#">In viverra nisi vel facilisis dignissim.</a></h4>
							<p>Business Consulting</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 portfolio-item">
					<div class="card h-100">
						<a class="hover-box" href="#">
							<div class="dot-full">
								<i class="fas fa-link"></i>
							</div>
							<img class="card-img-top" src="images/portfolio-big-05.jpg" alt="" />
						</a>
						<div class="card-body">
							<h4><a href="#">In viverra nisi vel facilisis dignissim.</a></h4>
							<p>Business Consulting</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 portfolio-item">
					<div class="card h-100">
						<a class="hover-box" href="#">
							<div class="dot-full">
								<i class="fas fa-link"></i>
							</div>
							<img class="card-img-top" src="images/portfolio-big-01.jpg" alt="" />
						</a>
						<div class="card-body">
							<h4><a href="#">In viverra nisi vel facilisis dignissim.</a></h4>
							<p>Business Consulting</p>
						</div>
					</div>
				</div>
			</div>

			<div class="pagination_bar">
				<!-- Pagination -->
				<ul class="pagination justify-content-center">
					<li class="page-item">
					  <a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only">Previous</span>
					  </a>
					</li>
					<li class="page-item">
					  <a class="page-link" href="#">1</a>
					</li>
					<li class="page-item">
					  <a class="page-link" href="#">2</a>
					</li>
					<li class="page-item">
					  <a class="page-link" href="#">3</a>
					</li>
					<li class="page-item">
					  <a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						<span class="sr-only">Next</span>
					  </a>
					</li>
				</ul>
			</div>
		</div>
		<!-- /.container -->
	</div>
	
	@endsection