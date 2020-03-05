@extends('layouts.master')

@section('content')

	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">FAQ</h1>
			<div class="breadcrumb-main">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="/">Home</a>
					</li>
					<li class="breadcrumb-item active">FAQ</li>
				</ol>
			</div>
		</div>
	</div>
	
    <!-- Page Content -->
	<div class="faq-main">
		<div class="container">
			<h2>Frequently Asked Questions</h2>
			<div class="accordion" id="accordionExample">				
				<div class="card accordion-single">
					<div class="card-header" id="1">
						<h5 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse"
								data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Can a home depreciate in value?
							</button>
						</h5>
					</div>
					<div id="collapseOne" class="collapse show" data-parent="#accordionExample">
						<div class="card-body">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
				</div>
				<div class="card accordion-single">
					<div class="card-header" id="2">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
								data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Is an older home as good a value as a new home?
							</button>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" data-parent="#accordionExample">
						<div class="card-body">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
				</div>
				<div class="card accordion-single">
					<div class="card-header" id="3">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
								data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								What is a broker?
							</button>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" data-parent="#accordionExample">
						<div class="card-body">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
				</div>
				<div class="card accordion-single">
					<div class="card-header">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
								data-target="#c4" aria-expanded="false" aria-controls="collapseThree">
								What is the difference between being prequalified and preapproved for a
								loan?
							</button>
						</h5>
					</div>
					<div id="c4" class="collapse" data-parent="#accordionExample">
						<div class="card-body">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
				</div>
				<div class="card accordion-single">
					<div class="card-header">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
								data-target="#c5" aria-expanded="false" aria-controls="collapseThree">
								What is title insurance?
							</button>
						</h5>
					</div>
					<div id="c5" class="collapse" data-parent="#accordionExample">
						<div class="card-body">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
				</div>
				<div class="card accordion-single">
					<div class="card-header">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
								data-target="#c6" aria-expanded="false" aria-controls="collapseThree">
								Can I pay my own taxes and insurance?
							</button>
						</h5>
					</div>
					<div id="c6" class="collapse" data-parent="#accordionExample">
						<div class="card-body">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
				</div>
				<div class="card accordion-single">
					<div class="card-header">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
								data-target="#c7" aria-expanded="false" aria-controls="collapseThree">
								How can I avoid private mortgage insurance?
							</button>
						</h5>
					</div>
					<div id="c7" class="collapse" data-parent="#accordionExample">
						<div class="card-body">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
				</div>
				<div class="card accordion-single">
					<div class="card-header">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
								data-target="#c8" aria-expanded="false" aria-controls="collapseThree">
								How is interest calculated on a mortgage loan?
							</button>
						</h5>
					</div>
					<div id="c8" class="collapse" data-parent="#accordionExample">
						<div class="card-body">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    <!-- /.container -->

    @endsection