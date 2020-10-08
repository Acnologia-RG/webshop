@extends('layouts.app')
@section('content')

<h2>Placed orders</h2>
<div class="container">
	<div class= "row">
		@foreach ($orders as $order)
		<div class="card" style="width: 33.3333%;">
			<div class="card-body">
				<p class="card-title">Location: {{$order->location}}</p>
				<p class="card-text">Address: {{$order->address}}</p>
				<p class="card-text">Total order price: {{$order->total_price}}€</p>
				<p class="card-text">Ordered at: {{$order->created_at}} server time</p>
				<p><a href="placedOrdersDetails/{{$order->id}}">view details</a></p>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection