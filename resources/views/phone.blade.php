<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lantern &dash; Go out. Discover your city.</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<script src="https://use.typekit.net/bhl8hgd.js"></script>
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
					<a class="line-button" href="#">Contact</a>
					<a class="nav-button" href="/business">Got a Business?</a>
				</div>
			</div>
		</div>
		

	 	<!-- content -->
		<div class="row">
			<div class="content col-md-offset-2 col-md-8">
				<!-- main text -->
				<div class="main-text">
					<h1>Well that's the cat's meow.<br />  You're in.</h1>
					<hr>
					<p>Didn't receive our text? No sweat. Text "Help" to 555-555 to start enjoying a better night life.</p>
				</div>
				<!-- end main text -->
@extends('layouts.master')
@section('title')
	Lantern &dash; Go out. Discover your city.
@stop
@section('content')

	<div class="row">
		<div class="content col-md-offset-2 col-md-8">
			<!-- main text -->
			<div class="main-text">
				<h1>Well that's the cat's meow.<br />  You're in.</h1>
				<hr>
				<p>Didn't receive our text? No sweat. Text "Help" to 555-555 to start enjoying a better night life.</p>
			</div>
			<!-- end main text -->

			<!-- social buttons -->
			<div class="share-buttons">
				<div class="twitter">
					<a href="#" class="share-btn-facebook">Share on Facebook</a>
				</div>

				<div class="facebook">
					<a href="#" class="share-btn-twitter">Share on Twitter</a>
				</div>
			</div>
			<!-- end social buttons -->
		</div>
	</div>

@stop

