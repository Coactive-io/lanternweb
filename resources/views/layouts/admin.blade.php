<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="https://use.typekit.net/pam1tgt.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">

</head>
<body>
<!-- container -->
<div class="container">

    <!-- nav -->
    <div class="row">
        <div class="nav">
            <div class="right-nav col-md-6">
                <a href="/">Lantern Admin</a>
            </div>
            <div class="left-nav col-md-6">
                <a class="nav-button" href="/">Home</a>
            </div>
        </div>
    </div>

    <!-- heading -->
    @yield('content')
            <!-- footer -->
    <!--Some lazy stuff to fix later.-->
    <br/>
    <br/>
    <br/>

    <div class="footer col-md-12">
        <p>&copy; 2016 Lantern, LLC. All rights reserved. Made with <span style="color:#3ca69f;">&#9825;</span> in SATX.</p>
    </div>
    <!-- end footer -->
</div>
</body>