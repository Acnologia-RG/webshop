@extends('layouts.app')
@section('content')

<div class="container">
	<div class="card" style="width: 18rem;">
		<div class="card-body">

			<!-- edit to place order -->
			<br>
			@auth
				<form action="{{url('/')}}/placeOrder" method='POST'>
				@csrf
				@method('POST')
				<h5>buy how many of me?</h5>
					<input type="hidden" name='id' value="{{  }}">
					<input class="text" type="text" name='location'>
					<input class="text" type="text" name='address'>
					<input class="btn btn-secondary" type="submit" value="Place the order">
			@else
				<p>please login to order items. <br>
				you can login from the top right</p>
			@endauth
		</div>
	</div>
</div>

@endsection