@extends('site.layouts.app')

@section('title', 'Award Project')

@section('content')
	<div class="row justify-content-center my-5">
		<div class="col-md-10">
			<div class="pt-3 pb-4 px-5 bg-white">
				<div class="clearfix">
					<a class="text-dark float-right" href="{{ route('bid-list') }}"><b>Back to Bid List</b></a>
				</div>
				<div class="d-flex align-items-center">
					<img class="border border-circle" src="{{ asset('images/thumbnail-placeholder.jpg') }}" alt="Thumbnail">
					<b class="px-3">Print Fast Philippines</b>
				</div>
				<div class="d-flex mt-4">
					<div class="row border-bottom">
						<div class="col-md-12 d-flex">
							<b class="pr-4">About: </b>
							<div class="text-justify">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ornare dapibus orci quis vehicula. Donec ut urna finibus dolor malesuada semper vel ut purus. Pellentesque in purus volutpat nunc sagittis tincidunt imperdiet id tellus. Integer lacinia imperdiet massa, et finibus orci accumsan eget. Donec pulvinar ultrices imperdiet.
							</div>
						</div>
					</div>
					<div class="pl-4">
						<a class="btn btn-secondary" href="{{ route('award-project') }}">Award Project</a>
					</div>
				</div>
				<div class="d-flex">
					<b class="pr-2">Location: </b>
					<span class="text-muted">Quezon City</span>
				</div>
				<div class="d-flex pt-2">
					<b class="pr-2">Bid Price: </b>
					<span class="text-muted">P 5,000.00</span>
				</div>
				<div class="d-flex pt-2">
					<b class="pr-2">Submission Date: </b>
					<span class="text-muted">Nov. 15, 2017</span>
				</div>
				<div class="py-4">
					<h5 class="text-center mb-4"><b>Sample Works</b></h5>
					<div class="gallery">
						<div class="gallery-item">
							<img class="w-100" src="{{ asset('images/thumbnail-md-placeholder.jpg') }}" alt="Thumbnail">
						</div>
						<div class="gallery-item">
							<img class="w-100" src="{{ asset('images/thumbnail-md-placeholder.jpg') }}" alt="Thumbnail">
						</div>
						<div class="gallery-item">
							<img class="w-100" src="{{ asset('images/thumbnail-md-placeholder.jpg') }}" alt="Thumbnail">
						</div>
						<div class="gallery-item">
							<img class="w-100" src="{{ asset('images/thumbnail-md-placeholder.jpg') }}" alt="Thumbnail">
						</div>
						<div class="gallery-item">
							<img class="w-100" src="{{ asset('images/thumbnail-md-placeholder.jpg') }}" alt="Thumbnail">
						</div>
						<div class="gallery-item">
							<img class="w-100" src="{{ asset('images/thumbnail-md-placeholder.jpg') }}" alt="Thumbnail">
						</div>
					</div>
				</div>
				<div class="py-4">
					<h5 class="text-center"><b>Reviews</b></h5>
					<div class="border-bottom border-bottom--block">
						<div class="d-flex align-items-center">
							<img class="border border-circle" src="{{ asset('images/thumbnail-placeholder.jpg') }}" alt="Thumbnail">
							<div class="px-3">
								<b>Print Fast Philippines</b> <br>
								<span>Star Rating</span>
							</div>
						</div>
						<div class="pt-3 text-muted">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ullamcorper ipsum vel nibh facilisis porttitor. Phasellus volutpat mattis ex, vitae malesuada eros. Donec porttitor diam tortor, sagittis vulputate tortor volutpat et. Pellentesque ac tellus at libero bibendum pellentesque ut ut augue. In in dui congue, porta ligula quis, vehicula dolor.
						</div>
					</div>
					<div class="border-bottom border-bottom--block">
						<div class="d-flex align-items-center">
							<img class="border border-circle" src="{{ asset('images/thumbnail-placeholder.jpg') }}" alt="Thumbnail">
							<div class="px-3">
								<b>Print Fast Philippines</b> <br>
								<span>Star Rating</span>
							</div>
						</div>
						<div class="pt-3 text-muted">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ullamcorper ipsum vel nibh facilisis porttitor. Phasellus volutpat mattis ex, vitae malesuada eros. Donec porttitor diam tortor, sagittis vulputate tortor volutpat et. Pellentesque ac tellus at libero bibendum pellentesque ut ut augue. In in dui congue, porta ligula quis, vehicula dolor.
						</div>
					</div>
				</div>
				<div class="clearfix pt-4">
					<a class="text-dark float-right" href="#"><b>Back to Top</b></a>
				</div>
			</div>
		</div>
	</div>
@endsection