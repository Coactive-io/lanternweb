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
			<div class="col-md-offset-2 col-md-8">

				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				{{Form::open(['url'=>'/vendor'])}}
				{{Form::text('business_name',null, ['placeholder'=>'Business Name'])}}
				{{Form::text('business_address',null, ['placeholder'=>'Business Address'])}}
				{{Form::text('business_desc',null, ['placeholder'=>'Business Description'])}}
				{{Form::text('contact_name', null, ['placeholder'=>'Contact Name'])}}
				{{Form::text('contact_phone', null, ['placeholder'=>'Contact Phone'])}}
				{{Form::text('contact_email', null, ['placeholder'=>'Contact Email'])}}
				{{Form::submit('Request Spot', ['class'=>'btn'])}}
				{{Form::close()}}

			</div>
		</div>
	</div>
@stop