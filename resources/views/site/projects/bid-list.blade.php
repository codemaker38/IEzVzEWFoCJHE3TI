@extends('site.layouts.app')

@section('title', 'Bid List')

@section('content')
	<h4 class="pt-4">Bid List</h4>
	<div class="row pt-3 pb-5">
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-6">
					<div class="p-3 bg-white border-rounded border-shadow">
						<div class="d-flex align-items-center">
							<img class="border border-circle" src="{{ asset('images/thumbnail-placeholder.jpg') }}" alt="Thumbnail">
							<h5 class="px-3">Print Fast <br> Philippines</h5>
						</div>
						<hr>
						<div class="py-2">
							<div class="d-flex">
								<b class="pr-2">Location: </b>
								<span class="text-muted">Quezon City</span>
							</div>
							<div class="d-flex">
								<b class="pr-2">Bid Price: </b>
								<span class="text-muted">P 5,000.00</span>
							</div>
							<div class="d-flex">
								<b class="pr-2">Submission Date: </b>
								<span class="text-muted">OCt. 28, 2017</span>
							</div>
							<div class="d-flex">
								<b class="pr-2">Notes: </b>
								<span class="text-muted">
									Lorem ipsum dolor sit amet, consectetur vadipiscing elit. Nullam suscipit vel mauris vitae posuere. Cras suscipit finibus odio, eu rutrum odio lobortis sed. Vivamus eu rhoncus est.
								</span>
							</div>
							<div class="d-flex justify-content-center pt-3 pb-2">
								<a class="btn btn-primary px-3 mx-1 small" href="{{ route('provider-info') }}"><small>Provider Info</small></a>
								<button class="btn btn-dark px-3 mx-1 small"><small>Chat Provider</small></button>
								<a class="btn btn-secondary px-3 mx-1 small" href="{{ route('award-project') }}"><small>Award Project</small></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="p-3 bg-white border-rounded border-shadow">
						<div class="d-flex align-items-center">
							<img class="border border-circle" src="{{ asset('images/thumbnail-placeholder.jpg') }}" alt="Thumbnail">
							<h5 class="px-3">Print Fast <br> Philippines</h5>
						</div>
						<hr>
						<div class="py-2">
							<div class="d-flex">
								<b class="pr-2">Location: </b>
								<span class="text-muted">Quezon City</span>
							</div>
							<div class="d-flex">
								<b class="pr-2">Bid Price: </b>
								<span class="text-muted">P 5,000.00</span>
							</div>
							<div class="d-flex">
								<b class="pr-2">Submission Date: </b>
								<span class="text-muted">OCt. 28, 2017</span>
							</div>
							<div class="d-flex">
								<b class="pr-2">Notes: </b>
								<span class="text-muted">
									Lorem ipsum dolor sit amet, consectetur vadipiscing elit. Nullam suscipit vel mauris vitae posuere. Cras suscipit finibus odio, eu rutrum odio lobortis sed. Vivamus eu rhoncus est.
								</span>
							</div>
							<div class="d-flex justify-content-center pt-3 pb-2">
								<a class="btn btn-primary px-3 mx-1 small" href="{{ route('provider-info') }}"><small>Provider Info</small></a>
								<button class="btn btn-dark px-3 mx-1 small"><small>Chat Provider</small></button>
								<a class="btn btn-secondary px-3 mx-1 small" href="{{ route('award-project') }}"><small>Award Project</small></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-md-6">
					<div class="p-3 bg-white border-rounded border-shadow">
						<div class="d-flex align-items-center">
							<img class="border border-circle" src="{{ asset('images/thumbnail-placeholder.jpg') }}" alt="Thumbnail">
							<h5 class="px-3">Print Fast <br> Philippines</h5>
						</div>
						<hr>
						<div class="py-2">
							<div class="d-flex">
								<b class="pr-2">Location: </b>
								<span class="text-muted">Quezon City</span>
							</div>
							<div class="d-flex">
								<b class="pr-2">Bid Price: </b>
								<span class="text-muted">P 5,000.00</span>
							</div>
							<div class="d-flex">
								<b class="pr-2">Submission Date: </b>
								<span class="text-muted">OCt. 28, 2017</span>
							</div>
							<div class="d-flex">
								<b class="pr-2">Notes: </b>
								<span class="text-muted">
									Lorem ipsum dolor sit amet, consectetur vadipiscing elit. Nullam suscipit vel mauris vitae posuere. Cras suscipit finibus odio, eu rutrum odio lobortis sed. Vivamus eu rhoncus est.
								</span>
							</div>
							<div class="d-flex justify-content-center pt-3 pb-2">
								<a class="btn btn-primary px-3 mx-1 small" href="{{ route('provider-info') }}"><small>Provider Info</small></a>
								<button class="btn btn-dark px-3 mx-1 small"><small>Chat Provider</small></button>
								<a class="btn btn-secondary px-3 mx-1 small" href="{{ route('award-project') }}"><small>Award Project</small></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="p-3 bg-white border-rounded border-shadow">
						<div class="d-flex align-items-center">
							<img class="border border-circle" src="{{ asset('images/thumbnail-placeholder.jpg') }}" alt="Thumbnail">
							<h5 class="px-3">Print Fast <br> Philippines</h5>
						</div>
						<hr>
						<div class="py-2">
							<div class="d-flex">
								<b class="pr-2">Location: </b>
								<span class="text-muted">Quezon City</span>
							</div>
							<div class="d-flex">
								<b class="pr-2">Bid Price: </b>
								<span class="text-muted">P 5,000.00</span>
							</div>
							<div class="d-flex">
								<b class="pr-2">Submission Date: </b>
								<span class="text-muted">OCt. 28, 2017</span>
							</div>
							<div class="d-flex">
								<b class="pr-2">Notes: </b>
								<span class="text-muted">
									Lorem ipsum dolor sit amet, consectetur vadipiscing elit. Nullam suscipit vel mauris vitae posuere. Cras suscipit finibus odio, eu rutrum odio lobortis sed. Vivamus eu rhoncus est.
								</span>
							</div>
							<div class="d-flex justify-content-center pt-3 pb-2">
								<a class="btn btn-primary px-3 mx-1 small" href="{{ route('provider-info') }}"><small>Provider Info</small></a>
								<button class="btn btn-dark px-3 mx-1 small"><small>Chat Provider</small></button>
								<a class="btn btn-secondary px-3 mx-1 small" href="{{ route('award-project') }}"><small>Award Project</small></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			3
		</div>
	</div>
@endsection