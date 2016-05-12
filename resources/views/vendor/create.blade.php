@extends('layouts.master')
@section('title')
	Lantern &dash; Go out. Discover your city.
@stop

@section('page_title')
	<h1>Join your Business</h1>
@stop

@section('content')

	<div class="row">
		<div class="content col-md-offset-2 col-md-8">
			<div class="main-text">
				<p>Reach thousands of valued customers anytime your business is slow.</p>
			</div>
			<div class="col-md-12">
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				<form method="POST" action="/vendor">
					<input name="_token" type="hidden" value="{{ csrf_token() }}">
					<div class="col-md-6" style="margin-bottom: 24px;">
						<input placeholder="Business Name" name="business_name" type="text">
					</div>
					<div class="col-md-6" style="margin-bottom: 24px;">
						<input placeholder="Business Address" name="business_address" type="text">
					</div>
					<div class="col-md-12" style="margin-bottom: 24px;">
						<input placeholder="Business Description" name="business_desc" type="text">
					</div>

					<div class="col-md-6" style="margin-bottom: 24px;">
						<input placeholder="Contact Name" name="contact_name" type="text">
					</div>
					<div class="col-md-6" style="margin-bottom: 24px;">
						<input placeholder="Contact Phone" name="contact_phone" type="text">
					</div>
					<div class="col-md-12" style="margin-bottom: 24px;">
						<input placeholder="Contact Email" name="contact_email" type="text">
					</div>
					<div class="col-md-12" style="margin-bottom: 24px;">
						<input class="btn" type="submit" value="Request Spot">
					</div>
				</form>
			</div>


		</div>
	</div>
@stop