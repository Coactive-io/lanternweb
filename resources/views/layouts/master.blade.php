<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="https://use.typekit.net/pam1tgt.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body>
	<!-- container -->
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

	 	<!-- heading -->
		<div class="row">
			<div class="content col-md-offset-2 col-md-8">
				@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{session('status')}}
					</div>
				@endif
				<div class="main-text">
					<img src="img/lantern-logo.svg">
					<h1>Go out. Discover your city.</h1>
					<hr>
				</div>

				<div class="content col-md-offset-2 col-md-8">
					<p>Introducing a new way to enjoy your city's nightlife.<br />Get in line to gain access to exlcusive deals.</p>
				</div>
			</div>
		</div>
@yield('content')
<!-- footer -->
<div class="footer col-md-12">
    <p>&copy; 2016 Lantern, llc. All rights reserved.</p>
</div>
<!-- end footer -->
</div>
</body>