@extends('layouts.app')
@section('content')
<div class="container">
	<h1>potato store</h1>
	<h1>All the {{ $category->category_name }}</h1>
	@foreach ($articles as $article)
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h3 class="card-title">{{ $article->name }}</h3>
				<p>{{ $article->price }}€</p>
				<p class="card-text">{{ $article->description }}</p>
				<a href="{{url('/')}}/article/{{$article->id}}" class="btn btn-secondary">buy me</a>
			</div>
		</div>
	@endforeach
</div>
@endsection