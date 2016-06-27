<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://cdn.optimizely.com/js/6032242731.js"></script>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="icon" href="/favicon.ico"/>
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="/js/jquery-1.11.min.js"></script>
    <script src="https://use.typekit.net/pam1tgt.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

	<!--FACEBOOK META TAGS-->
	<meta property="og:url"           content="https://getlantern.co" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Lantern:  Go out.  Discover your city." />
	<meta property="og:description"   content="Introducing a new way to enjoy your city's nightlife.
Get in line to gain access to exclusive events." />
	<meta property="og:image"         content="https://getlantern.co/img/logo.gif" />
	<!--END FACEBOOK META TAGS-->

</head>
<body>
<div id="fb-root"></div>
<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId      : '1613588092293585',
			xfbml      : true,
			version    : 'v2.6'
		});
	};

	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
	<div class="container">

		<!-- nav -->
		<div class="row">
			<div class="nav">
				<div class="right-nav col-md-6">
					<a href="/">Lantern</a>
				</div>
                @if($_SERVER['REQUEST_URI'] != '/business')
				<div class="left-nav col-md-6">
					<a class="nav-button" href="/business">Got a Business?</a>
					<a class="nav-button" href="/press">Press</a>
				</div>
                @endif
			</div>
		</div>
        <!-- end nav -->

	 	<!-- heading -->
		<div class="row">
			<div class="content col-md-offset-2 col-md-8">
				@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{session('status')}}
					</div>
				@endif
				<div class="main-text">
					<img src="img/lantern-logo-v2.svg">
					<h1>@yield('page_title')</h1>
					<hr>
				</div>
			</div>
		</div>
        <!-- end heading -->

        @yield('content')

        <!-- footer -->
        		<!-- social networks -->
        		<div class="social-wrapper col-md-12">
        			<ul class="social">
        				<li><a href="https://www.twitter.com/getlanternapp" target="_blank" class="twitter">Twitter</a></li><li><a href="https://www.facebook.com/getlanternapp" target="_blank" class="facebook">Facebook</a></li><li><a href="https://www.instagram.com/getlanternapp" target="_blank" class="instagram">Instagram</a></li>
        			</ul>
        		</div>
        <div class="footer col-md-12">
            <p>&copy; <?= date('Y'); ?> Lantern. Made with <span style="color:#3ca69f;">&#9825;</span> in SATX. Need to <a href="/contact" style="color:#41BCB0;">Contact us?</a></p>
        </div>
        <!-- end footer -->

    </div>
    <!-- end container -->

    @yield('scripts')
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-78281738-1', 'auto');
		ga('send', 'pageview');

	</script>
	<script src="/js/social.js"></script>

</body>