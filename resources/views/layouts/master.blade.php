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
@yield('content')
<!-- footer -->
<div class="footer col-md-12">
    <p>&copy; 2016 Lantern, llc. All rights reserved.</p>
</div>
<!-- end footer -->
</body>