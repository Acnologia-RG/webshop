@extends('layouts.app')
@section('content')
<div class="container">
	<h1>potato store</h1>
	<div class="card" style="width: 18rem;">
		<div class="card-body">
			<h2 class="card-title">{{ $article->name }}</h2>
			<p>{{ $article->price }}€</p>
			<p class="card-text">{{ $article->description }}</p>

			<!-- still need to make this put it into the cart that i still need to make -->
			<br>
			@auth
				<form action="{{url('/')}}/addToCart/{{ $article->id }}">
				<h5>buy how many of me?</h5>
					<input class="number" type="number" value="1" min="1" max='5000' name='qty'>
					<input class="btn btn-secondary" type="submit" value="Add to cart">
			@else
				<p>please login to order items</p>
			@endauth
			@if (session()->has('cart')) {
				<? var_dump(session('cart')) ?>
			}
			@endif
		</div>
	</div>
</div>
@endsection