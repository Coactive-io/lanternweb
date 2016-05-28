@extends('layouts.master')
@section('title')
	Lantern &dash; Go out. Discover your city.
@stop

@section('page_title')
	<h1>Well aren't we popular?<br />Lantern San Antonio is full</h1>
@stop

@section('content')

	<div class="row">
		<div class="content col-md-offset-2 col-md-8">
			<!-- main text -->
			<div class="main-text">
				<p><br>Hold tight! We're saving your place in line.<br>Don't worry, you'll hear from us soon.</p>
			</div>
			<!-- end main text -->

			<!-- social buttons -->
			<div class="share-buttons">
				<div class="facebook">
					<a href="#" class="share-btn-facebook" data-message="I just got in line to join Lantern for exclusive San Antonio events and bonuses.  Save your spot too.">Share on Facebook</a>
				</div>

				<div class="twitter">
					<a href="https://twitter.com/share" class="share-btn-twitter" data-url="https://getlantern.co"  data-message="I just got in line to join @getlanternapp for exclusive San Antonio events.  Save your spot too. #lanternsatx" data-hashtags="lantern">Tweet</a>
				</div>
			</div>
			<!-- end social buttons -->
		</div>
	</div>

@endsection

@section('scripts')
@endsection