@extends('site.layouts.app')

@section('title', 'Award Project')

@section('content')
	<div class="row justify-content-center mt-5">
		<div class="col-md-6">
			<div class="p-4 bg-white border-rounded border-shadow text-center">
				<h4 class="pt-2 pb-3">Congratulations!</h4>
				<div class="text-muted">
					You may now contact <b class="text-dark">Print Fast Philippines</b> <br>
					in any of the information below:
				</div>
				<div class="py-3">
					<div class="d-flex justify-content-center">
						<b class="pr-2">Account Manager: </b>
						<span class="text-muted">Jay Bernabe</span>
					</div>
					<div class="d-flex justify-content-center">
						<b class="pr-2">Location: </b>
						<span class="text-muted">Grace Park, Caloocan</span>
					</div>
				</div>
				<div class="border-rounded border-color-primary w-75 mx-auto my-3 px-3 py-2">
					<b>Phone: 0911-23476567 / 341-87-19</b>
				</div>
				<div class="border-rounded border-color-primary w-75 mx-auto my-3 px-3 py-2">
					<b>Email: jayb@wemindfuse.com</b>
				</div>
				<div class="border-rounded border-color-primary w-75 mx-auto my-3 px-3 py-2">
					<b>Open chat window</b>
				</div>
				<a class="text-muted" href="{{ route('home') }}">
					<small>Back to Dashboard</small>
				</a>
			</div>
		</div>
	</div>
@endsection