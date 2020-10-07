@extends('layouts.app')
@section('content')

<div class="container">
	@foreach ($categories as $category)
		<a href="category/{{$category->id}}"><h1>{{$category->category_name}}</h1></a>
		<div class= "row">
		@foreach ($articles as $article)
			@if ($article->category_id == $category->id)
				<div class="card" style="width: 33.3333%;">
					<div class="card-body col-md">
						<h3 class="card-title">{{ $article->name }}</h3>
						<p>{{ $article->price }}€</p>
						<p class="card-text">{{ $article->description }}</p>
						<a href="article/{{$article->id}}" class="btn btn-secondary">buy me</a>
					</div>
				</div>
			@endif
		@endforeach
		</div>
	@endforeach
</div>
<p>more potato items coming never</p>
@endsection