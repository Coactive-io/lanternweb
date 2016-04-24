@extends('layouts.master')
@section('title')
	Lantern &dash; Go out. Discover your city.
@stop
@section('content')	
	
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
		</div>
	</div>
@stop