@extends('layouts.app')
@section('content')
<div class="container">
	<h2>your cart items</h2>
	@foreach ($macFuckingMuffin as $cart)
	<div class="card" style="width: 18rem;">
		<div class="card-body">
			<h3 class="card-title">name: {{ $cart["name"] }}</h3>
			<h3 class="card-title">price: {{ number_format($cart["price"], 2) }} €</h3>
			<h3 class="card-title">quantity: {{ $cart["quantity"] }}</h3>

			<a href="delete/{{$cart['id']}}"><button class="btn btn-secondary">delete
			@if ($cart["quantity"] !== 1)
				items
			@else 
				item
			@endif
			</button></a>

		</div>
	</div>
	@endforeach
	<a href="{{url('/order')}}"><h3>total money to pay {{number_format($moneysToGive, 2)}} € <br> 
	now give all the money</h3></a>
</div>

@endsection