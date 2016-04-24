<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="https://use.typekit.net/pam1tgt.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <script src="/js/jquery-1.11.min.js"></script>
</head>
<body>
    <!-- start container -->
    <div class="container">
        <!-- nav -->
        <div class="row">
            <div class="nav">
                <div class="right-nav col-md-6">
                    <a href="/">Lantern</a>
                </div>
                <div class="left-nav col-md-6">
                    <a class="line-button" href="#">Contact</a>
                    <a class="nav-button" href="#">Press Kit</a>
                </div>
            </div>
        </div>
        <!-- end nav -->

        @yield('content')
    
    </div> 
    <!-- end container -->
    
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
            
            <p>&copy; <?php date('Y'); ?> Lantern, LLC. All rights reserved. Made with love in SATX.</p>
        </div>
    </div>
    <!-- /End Footer -->
</body>