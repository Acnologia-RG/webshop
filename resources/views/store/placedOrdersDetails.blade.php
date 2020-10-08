@extends('layouts.app')
@section('content')

<h2>Placed orders details</h2>
<div class="container">
	<div class="card col" style="width: 100%;">
		<div class="card-body">
			<p class="card-title">Location: {{$order->location}}</p>
			<p class="card-text">Address: {{$order->address}}</p>
			<p class="card-text">Total order price: {{$order->total_price}}€</p>
			<p class="card-text">Ordered at: {{$order->created_at}} server time</p>
		</div>
		<div class="row">
		@foreach ($items as $key => $item)
			<div class="card" style="width: 33.3333%;">
				<div class="card-body">
					<p class="card-title">item: {{$item->name}}</p>
					<p class="card-text">price: {{$item->price}}€</p>
					<p class="card-text">description: {{$item->description}}</p>
					<p class="card-text">quantity: {{$amount[$key]}}</p>
				</div>
			</div>
		@endforeach
		</div>
	</div>
</div>
@endsection