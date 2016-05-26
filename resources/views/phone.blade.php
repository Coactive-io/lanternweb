@extends('layouts.master')
@section('title')
	Lantern &dash; Go out. Discover your city.
@stop

@section('page_title')
	<h1>Well that's the cat's meow.<br />  You're in!</h1>
	<h3>We'll let you know when we officially launch the service.</h3>
@stop

@section('content')

	<div class="row">
		<div class="content col-md-offset-2 col-md-8">
			<!-- main text -->
			<div class="main-text">
				<p>Didn't receive our text? No sweat! <br>Text "START" to 210-585-4440 to start enjoying a better night life.</p>
			</div>
			<!-- end main text -->

			<!-- social buttons -->
			<div class="share-buttons">
				<div class="facebook">
					<a href="#" class="share-btn-facebook" data-message="I’m waiting in line to use Lantern in my city, save your spot today.">Share on Facebook</a>
				</div>

				<div class="twitter">
					<a href="https://twitter.com/share" class="share-btn-twitter" data-url="https://getlaltern.co" data-url="https://www.getlantern.co" data-message="I’m waiting in line to use Lantern in San Antonio, save your spot today. #lanternsatx" data-hashtags="lantern">Tweet</a>
				</div>
			</div>
			<!-- end social buttons -->
		</div>
	</div>

@stop

@section('scripts')
	<script src="/js/social.js"></script>
@endsection
