@extends('site.layouts.app')

@section('title', 'Create Project')

@section('content')
	<div class="row justify-content-center mt-5">
		<div class="col-md-8 bg-white">
			<div class="pt-4 pb-3 px-4">
				<h5 class="text-center"><b>Start a Project</b></h5>
				<form action="" class="form py-4" method="post">
					<div class="row">
						<div class="col-md-6 form-group">
							<select class="form-control" name="print_category" id="print_category">
								<option value="">Select Print Category</option>
							</select>
						</div>
						<div class="col-md-6 form-group">
							<input type="text" class="form-control" name="quantity" id="quantity" placeholder="Quantity">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<input type="text" class="form-control" name="budget" id="budget" placeholder="Budget">
						</div>
						<div class="col-md-6 form-group">
							<input type="text" class="form-control" name="location" id="location" placeholder="Location">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<input type="text" class="form-control" name="completion_date" id="completion_date" placeholder="Target Date of Completion">
						</div>
						<div class="col-md-6 form-group">
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" value="">
									Digital
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" value="">
									Offset
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" value="">
									Not Sure
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<textarea class="form-control" name="notes" id="notes" cols="30" rows="5"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							{{-- <button class="btn btn-secondary w-100 py-2" type="submit">Start a Project</button> --}}
							<a class="btn btn-secondary w-100 py-2" href="{{ route('bid-list') }}">Start a Project</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection