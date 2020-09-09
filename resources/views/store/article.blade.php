@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card" style="width: 18rem;">
		<div class="card-body">
			<h3 class="card-title">{{ $article->name }}</h3>
			<p>{{ $article->price }}€</p>
			<p class="card-text">{{ $article->description }}</p>
			<a href="article/{{$article->id}}" class="btn btn-secondary">buy me</a>
		</div>
	</div>
</div>
@endsection