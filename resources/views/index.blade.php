@extends('layouts.master')
@section('title')
	Lantern &dash; Go out. Discover your city.
@stop
@section('content')
	<!-- container -->
	<div class="container">
		<!-- nav -->
		<div class="row">
			<div class="nav">
				<div class="right-nav col-md-6">
					<a href="#">Lantern</a>
				</div>
				<div class="left-nav col-md-6">
					<a class="line-button" href="#">Contact</a>
					<a class="nav-button" href="#">Press Kit</a>
				</div>
			</div>
		</div>
		<!-- end nav -->
		
	 	<!-- content -->
		<div class="row">
			<div class="content col-md-offset-2 col-md-8">
				<!-- main text -->
				<div class="main-text">
					<h1>Go out. Discover your city.</h1>
					<hr>
					<p>Introducing a new way to enjoy your city's nightlife.<br />Get in line to gain access to exlcusive deals.</p>
				</div>
				<!-- end main text -->
				
				<!-- mobile number -->
				<div class="mobile-number col-md-8 col-md-offset-2">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Mobile Number" style="font-size: 18px; font-weight: 500;">
						<span class="input-group-btn">
							<a href="" class="btn btn-default" type="button" style="font-size: 18px; font-weight: 500;">Get Invited</a>
						</span>
					</div>
				</div>
				<!-- end mobile number -->

				<!-- city table -->
				<div class="city-table col-md-8 col-md-offset-2">
					<div class="city-row">
						<div class="city col-md-6">
							<p>San Antonio, TX</p>
						</div>
						<div class="active col-md-6">
							<p>Available</p>
							<div class="progess-bar">
							</div>
						</div>
					</div><!-- end city row -->

					<div class="city-row">
						<div class="city col-md-6">
							<p>Austin, TX</p>
						</div>
						<div class="active col-md-6">
							<p>Coming Soon</p>
						</div>
					</div><!-- end city row -->
				<!-- end city table -->
			</div>
			<!-- social networks -->
				<div class="social-wrapper col-md-12">
					<ul class="social">
						<li><a href="#" class="twitter">Twitter</a></li><li><a href="#" class="facebook">Facebook</a></li><li><a href="#" class="instagram">Instagram</a></li>
					</ul>
				</div>
			<!-- end social networks -->
		</div>
		<!-- end content -->
		</div>
	<!-- end container -->
	</div>

@stop