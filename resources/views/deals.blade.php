@extends('layouts.master')
@section('title')
	Lantern &dash; Go out. Discover your city.
@stop

@section('page_title')
	Current Beacons
@stop

@section('content')
<div class="row">

	<!-- start deal -->
	<div class="col-md-6"> 
		<div class="deal-panel">
			<h2><a href="/deal-view">Brilliant Dinner Plate</a></h2>
			<h3>from <a href="/deal-view">Esquire Tavern</a></h3>
			<div class="deal-img">
				<a href="/deal-view"><img src="https://pbs.twimg.com/media/Cj1YrBkVEAAgfzY.jpg" /></a>
			</div>
	 		<p style="font-size: 16px; margin:0; color: #fff; font-weight: 600; border:1px solid rgba(255,255,255,0.2);padding:2px 16px; display:inline-block; border-radius: 24px; margin-bottom: 12px;">2 hours left...</p>
			<p>Our bartender is whipping up something special today...</p>

		</div>
	</div>

	<!-- start deal -->
	<div class="col-md-6"> 
		<div class="deal-panel">
			<h2><a href="/deal-view">Brilliant Dinner Plate</a></h2>
			<h3>from <a href="/deal-view">Esquire Tavern</a></h3>
			<div class="deal-img">
				<a href="/deal-view"><img src="https://pbs.twimg.com/media/CjqY3uLUgAE9Hp7.jpg" /></a>
			</div>
			<p style="font-size: 16px; margin:0; color: #fff; font-weight: 600; border:1px solid rgba(255,255,255,0.2);padding:2px 16px; display:inline-block; border-radius: 24px; margin-bottom: 12px;">2 hours left...</p>		
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>

	<!-- start deal -->
	<div class="col-md-6"> 
		<div class="deal-panel">
 
 
			<h2><a href="/deal-view">Brilliant Dinner Plate</a></h2>
			<h3>from <a href="/deal-view">Esquire Tavern</a></h3>
			<div class="deal-img">
				<a href="/deal-view"><img src="https://pbs.twimg.com/media/CkEVgFRWYAAVuDH.jpg" /></a>
			</div>
			<p style="font-size: 16px; margin:0; color: #fff; font-weight: 600; border:1px solid rgba(255,255,255,0.2);padding:2px 16px; display:inline-block; border-radius: 24px; margin-bottom: 12px;">2 hours left...</p>	
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>

</div> 
@endsection

@section('scripts')
@endsection