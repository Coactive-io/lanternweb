<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
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
				<div class="main-text">
					<img src="img/lantern-logo.svg">
					<h1>@yield('page_title')</h1>
					<hr>
				</div>
			</div>
		</div>
@yield('content')
<!-- footer -->
		<!-- social networks -->
		<div class="social-wrapper col-md-12">
			<ul class="social">
				<li><a href="#" class="twitter">Twitter</a></li><li><a href="#" class="facebook">Facebook</a></li><li><a href="#" class="instagram">Instagram</a></li>
			</ul>
		</div>
<div class="footer col-md-12">
    <p>&copy; 2016 Lantern, LLC. All rights reserved.</p>
</div>
<!-- end footer -->
</div>
</body>