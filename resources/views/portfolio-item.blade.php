@extends('layouts.master')

@section('content')
	
	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3"> Portfolio Item </h1>
			<div class="breadcrumb-main">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="/">Home</a>
					</li>
					<li class="breadcrumb-item active">Portfolio Item</li>
				</ol>
			</div>
		</div>
	</div>

    <div class="item-pro">
		<div class="container">
			<!-- Portfolio Item Row -->
			<div class="row">
				<div class="col-md-8">
					<img class="img-fluid" src="images/portfolio-big-Item.jpg" alt="" />
				</div>
				<div class="col-md-4">
					<h3 class="my-3">Phasellus et nisi ut sapien ultricies laoreet.</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
					<h3 class="my-3">Project info</h3>
					<ul>
						<li><span>Project Name :</span><span>Nulla tincidunt justo</span></li>
						<li><span>Category :</span><span>Vestibulum sagittis</span></li>
						<li><span>Client :</span><span>Lorem ipsum </span></li>
						<li><span>Website :</span><span>www.lipsum.com</span></li>
						<li><span>Date :</span><span>11-10-2018</span></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
					<p class="mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
				</div>
			</div>
			
			<!-- /.row -->
			<div class="related-projects">
				<!-- Related Projects Row -->
				<h3>Related Projects</h3>
				<div class="row">
					<div class="col-md-3 col-sm-6 mb-4">
						<a href="#">
							<img class="img-fluid" src="images/related-pro-01.jpg" alt="" />
						</a>
					</div>
					<div class="col-md-3 col-sm-6 mb-4">
						<a href="#">
							<img class="img-fluid" src="images/related-pro-02.jpg" alt="" />
						</a>
					</div>
					<div class="col-md-3 col-sm-6 mb-4">
						<a href="#">
							<img class="img-fluid" src="images/related-pro-03.jpg" alt="" />
						</a>
					</div>
					<div class="col-md-3 col-sm-6 mb-4">
						<a href="#">
							<img class="img-fluid" src="images/related-pro-04.jpg" alt="" />
						</a>
					</div>
				</div>
				<!-- /.row -->
			</div>
		</div>
		<!-- /.container -->
	</div>
	
	@endsection
