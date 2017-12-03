@extends('site.layouts.app')

@section('title', 'Dashboard')

@section('content')
	<h4 class="pt-4">On Going Bids</h4>
	<div class="row pt-3 pb-5">
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-6 pr-0">
					<div class="p-3 bg-white border-rounded border-shadow">
						<div class="d-flex align-items-center">
							<img class="border border-circle" src="{{ asset('images/thumbnail-placeholder.jpg') }}" alt="Thumbnail">
							<div class="pl-3">
								<b class="d-block">Jessica A.</b>
								<a class="btn p-0 text-muted" data-toggle="modal" data-target="#viewProfileModal">View Profile</a>
							</div>
							<div class="ml-auto">
								<b>Bid Credit Amount:</b><br>
								<span class="text-muted">P 5,000.00</span>
							</div>
						</div>
						<hr>
						<div class="py-2">
							<div class="row">
								<div class="col-md-6">
									<div class="mb-2">
										<b class="d-block">Requirements: </b>
										<span class="text-muted">
											Business Cards, Letterhead, Tarpaulin, billboard, mugs, umbrellas
										</span>
									</div>
									<div class="mb-2">
										<b class="pr-2">Budget: </b>
										<span class="text-muted">P 5,000.00</span>
									</div>
									<div class="mb-2">
										<b class="pr-2">Location: </b>
										<span class="text-muted">Quezon City</span>
									</div>
									<div>
										<b class="d-block">Date Needed: </b>
										<span class="text-muted">Oct. 20, 2017</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-2">
										<b class="pr-2">Quantity: </b>
										<span class="text-muted">1000 pieces</span>
									</div>
									<div>
										<b class="d-block">Notes: </b>
										<span class="text-muted">
											Lorem ipsum dolor sit amet, consectetur vadipiscing elit. Nullam suscipit vel mauris vitae posuere. Cras suscipit finibus odio, eu rutrum odio lobortis sed. Vivamus eu rhoncus est.
										</span>
									</div>
								</div>
							</div>
							<div class="pt-4">
								<a class="btn btn-secondary px-3 mx-1 small" href="{{ route('award-project') }}"><small>Join Bidding</small></a>
								<button class="btn btn-dark px-3 mx-1 small"><small>Chat Customer</small></button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 pr-0">
					<div class="p-3 bg-white border-rounded border-shadow">
						<div class="d-flex align-items-center">
							<img class="border border-circle" src="{{ asset('images/thumbnail-placeholder.jpg') }}" alt="Thumbnail">
							<div class="pl-3">
								<b class="d-block">Jessica A.</b>
								<a class="btn p-0 text-muted" data-toggle="modal" data-target="#viewProfileModal">View Profile</a>
							</div>
							<div class="ml-auto">
								<b>Bid Credit Amount:</b><br>
								<span class="text-muted">P 5,000.00</span>
							</div>
						</div>
						<hr>
						<div class="py-2">
							<div class="row">
								<div class="col-md-6">
									<div class="mb-2">
										<b class="d-block">Requirements: </b>
										<span class="text-muted">
											Business Cards, Letterhead, Tarpaulin, billboard, mugs, umbrellas
										</span>
									</div>
									<div class="mb-2">
										<b class="pr-2">Budget: </b>
										<span class="text-muted">P 5,000.00</span>
									</div>
									<div class="mb-2">
										<b class="pr-2">Location: </b>
										<span class="text-muted">Quezon City</span>
									</div>
									<div>
										<b class="d-block">Date Needed: </b>
										<span class="text-muted">Oct. 20, 2017</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-2">
										<b class="pr-2">Quantity: </b>
										<span class="text-muted">1000 pieces</span>
									</div>
									<div>
										<b class="d-block">Notes: </b>
										<span class="text-muted">
											Lorem ipsum dolor sit amet, consectetur vadipiscing elit. Nullam suscipit vel mauris vitae posuere. Cras suscipit finibus odio, eu rutrum odio lobortis sed. Vivamus eu rhoncus est.
										</span>
									</div>
								</div>
							</div>
							<div class="pt-4">
								<a class="btn btn-secondary px-3 mx-1 small" href="{{ route('award-project') }}"><small>Join Bidding</small></a>
								<button class="btn btn-dark px-3 mx-1 small"><small>Chat Customer</small></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-md-6 pr-0">
					<div class="p-3 bg-white border-rounded border-shadow">
						<div class="d-flex align-items-center">
							<img class="border border-circle" src="{{ asset('images/thumbnail-placeholder.jpg') }}" alt="Thumbnail">
							<div class="pl-3">
								<b class="d-block">Jessica A.</b>
								<a class="btn p-0 text-muted" data-toggle="modal" data-target="#viewProfileModal">View Profile</a>
							</div>
							<div class="ml-auto">
								<b>Bid Credit Amount:</b><br>
								<span class="text-muted">P 5,000.00</span>
							</div>
						</div>
						<hr>
						<div class="py-2">
							<div class="row">
								<div class="col-md-6">
									<div class="mb-2">
										<b class="d-block">Requirements: </b>
										<span class="text-muted">
											Business Cards, Letterhead, Tarpaulin, billboard, mugs, umbrellas
										</span>
									</div>
									<div class="mb-2">
										<b class="pr-2">Budget: </b>
										<span class="text-muted">P 5,000.00</span>
									</div>
									<div class="mb-2">
										<b class="pr-2">Location: </b>
										<span class="text-muted">Quezon City</span>
									</div>
									<div>
										<b class="d-block">Date Needed: </b>
										<span class="text-muted">Oct. 20, 2017</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-2">
										<b class="pr-2">Quantity: </b>
										<span class="text-muted">1000 pieces</span>
									</div>
									<div>
										<b class="d-block">Notes: </b>
										<span class="text-muted">
											Lorem ipsum dolor sit amet, consectetur vadipiscing elit. Nullam suscipit vel mauris vitae posuere. Cras suscipit finibus odio, eu rutrum odio lobortis sed. Vivamus eu rhoncus est.
										</span>
									</div>
								</div>
							</div>
							<div class="pt-4">
								<a class="btn btn-secondary px-3 mx-1 small" href="{{ route('award-project') }}"><small>Join Bidding</small></a>
								<button class="btn btn-dark px-3 mx-1 small"><small>Chat Customer</small></button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 pr-0">
					<div class="p-3 bg-white border-rounded border-shadow">
						<div class="d-flex align-items-center">
							<img class="border border-circle" src="{{ asset('images/thumbnail-placeholder.jpg') }}" alt="Thumbnail">
							<div class="pl-3">
								<b class="d-block">Jessica A.</b>
								<a class="btn p-0 text-muted" data-toggle="modal" data-target="#viewProfileModal">View Profile</a>
							</div>
							<div class="ml-auto">
								<b>Bid Credit Amount:</b><br>
								<span class="text-muted">P 5,000.00</span>
							</div>
						</div>
						<hr>
						<div class="py-2">
							<div class="row">
								<div class="col-md-6">
									<div class="mb-2">
										<b class="d-block">Requirements: </b>
										<span class="text-muted">
											Business Cards, Letterhead, Tarpaulin, billboard, mugs, umbrellas
										</span>
									</div>
									<div class="mb-2">
										<b class="pr-2">Budget: </b>
										<span class="text-muted">P 5,000.00</span>
									</div>
									<div class="mb-2">
										<b class="pr-2">Location: </b>
										<span class="text-muted">Quezon City</span>
									</div>
									<div>
										<b class="d-block">Date Needed: </b>
										<span class="text-muted">Oct. 20, 2017</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-2">
										<b class="pr-2">Quantity: </b>
										<span class="text-muted">1000 pieces</span>
									</div>
									<div>
										<b class="d-block">Notes: </b>
										<span class="text-muted">
											Lorem ipsum dolor sit amet, consectetur vadipiscing elit. Nullam suscipit vel mauris vitae posuere. Cras suscipit finibus odio, eu rutrum odio lobortis sed. Vivamus eu rhoncus est.
										</span>
									</div>
								</div>
							</div>
							<div class="pt-4">
								<a class="btn btn-secondary px-3 mx-1 small" href="{{ route('award-project') }}"><small>Join Bidding</small></a>
								<button class="btn btn-dark px-3 mx-1 small"><small>Chat Customer</small></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="p-3 bg-white border-rounded border-shadow">
				<b class="d-block text-center">Available Bid Credits</b>
				<hr>
				<h1 class="text-center text-secondary text-xl">150</h1>
				<a class="d-block btn text-secondary text-center"><b>Purchase more credits &gt;</b></a>
			</div>
		</div>
	</div>

<!-- Modal -->
<div class="modal fade" id="viewProfileModal" tabindex="-1" role="dialog" aria-labelledby="viewProfileModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="d-flex px-3 pt-3">
				<a class="btn p-0 ml-auto text-muted" data-dismiss="modal" aria-label="Close">
					<small aria-hidden="true">Close window</small>
				</a>
			</div>
			<div class="modal-body pt-0">
				<div class="d-flex align-items-center">
					<img class="border border-circle" src="{{ asset('images/thumbnail-placeholder.jpg') }}" alt="Thumbnail">
					<b class="pl-3">Jessica A.</b>
				</div>
				<div class="mt-3">
					<b class="pr-3">Company:</b>
					<span class="text-muted">Honest Company</span>
				</div>
				<div class="my-3 text-justify text-muted">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ornare dapibus orci quis vehicula. Donec ut urna finibus dolor malesuada semper vel ut purus. Pellentesque in purus volutpat nunc sagittis tincidunt imperdiet id tellus. Integer lacinia imperdiet massa, et finibus orci accumsan eget. Donec pulvinar ultrices imperdiet.
				</div>
				<div class="mb-2">
					<b class="pr-3">Joined:</b>
					<span class="text-muted">Oct. 20, 2017</span>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection