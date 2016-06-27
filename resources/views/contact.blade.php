@extends('layouts.master')
@section('title')
	Lantern &dash; Go out. Discover your city.
@stop

@section('page_title')
	Contact us
@stop

@section('content')
	<div class="row">
		<div class="content col-md-offset-2 col-md-8">
			<!-- main text -->
			<div class="main-text">
				<p>We'd love to hear from you, we'll be in touch soon!</p>
			</div>
		</div>
	</div>

<div class="row">
	<div class="col-md-8 col-md-offset-2">

	<form method="POST" action="/vendor">
	<input name="_token" type="hidden" value="DKvoS1X0VwEA8dLhTdHaAh3Oi5GuB1W0RShqgCwy">
	<div class="col-md-6" style="margin-bottom: 24px;">
	<input placeholder="Full Name" name="business_name" type="text" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;">
	</div>
	<div class="col-md-6" style="margin-bottom: 24px;">
	<input placeholder="Email" name="business_address" type="text">
	</div>
	<div class="col-md-12" style="margin-bottom: 24px;">
	<textarea placeholder="Enter your message..." class="col-md-12"></textarea>
	</div>

	<div class="col-md-12" style="margin-bottom: 24px;">
	<input class="btn" type="submit" value="Request Spot">
	</div>
	</form>

	</div>
</div>
@endsection

@section('scripts')
@endsection