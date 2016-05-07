<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lantern &dash; Go out. Discover your city.</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<script src="https://use.typekit.net/pam1tgt.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body>
	<!-- Start Container -->
	<div class="container">

		<!-- nav -->
		<div class="row">
			<div class="nav">
				<div class="right-nav col-md-6">
					<a href="/">Lantern</a>
				</div>
				<div class="left-nav col-md-6">
					<a class="nav-button" href="/business">Got a Business?</a>
				</div>
			</div>
		</div>
		

	 	<!-- content -->
		<div class="row">
			<div class="content col-md-offset-2 col-md-8">
				<div class="main-text">
					<h1>Join your Business</h1>
					<hr>
					<p>Reach thousands of valued customers at anytime when yor business is slow.</p>
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
		<!-- end content -->


		<!-- Start Footer -->
		<div class="row">
			<div class="footer col-md-12">
				<!-- Start Social Networks -->
					<div class="social-wrapper col-md-12">
						<ul class="social">
							<li><a href="#" class="twitter">Twitter</a></li><li><a href="#" class="facebook">Facebook</a></li><li><a href="#" class="instagram">Instagram</a></li>
						</ul>
					</div>
				<!-- End Social Networks -->
				<p>&copy; 2016 Lantern, llc. All rights reserved. Made with love in SATX.</p>
			</div>
		</div>
		<!-- /End Footer -->

	</div>
	<!-- /End Container -->
</body>
</html>