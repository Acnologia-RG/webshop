@extends('layouts.app')
@section('content')
<div class="container">
	<h1>potato store</h1>
	@foreach ($macFuckingMuffin as $cart)
	<div class="card" style="width: 18rem;">
		<div class="card-body">
			<h3 class="card-title">{{ $cart["name"] }}</h3>
			<h3 class="card-title">{{ $cart["price"] }}</h3>
			<h3 class="card-title">{{ $cart["quantity"] }}</h3>
		</div>
	</div>
	@endforeach
</div>

<p>calculate the moneys yourself and gib moneys</p>

@endsection