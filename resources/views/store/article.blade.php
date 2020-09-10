@extends('layouts.app')
@section('content')
<div class="container">
	<h1>potato store</h1>
	<div class="card" style="width: 18rem;">
		<div class="card-body">
			<h3 class="card-title">{{ $article->name }}</h3>
			<p>{{ $article->price }}€</p>
			<p class="card-text">{{ $article->description }}</p>
			<a href="article/{{$article->id}}" class="btn btn-secondary">buy how many of me?</a>
			<input type="number" id="quantity" name="quantity" min="1" max="500" value="1">
		</div>
	</div>
</div>
@endsection