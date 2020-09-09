@extends('layouts.app')

@section('content')
<h1>potato store</h1>

<div class="container">
	@foreach ()
	<h1>{{$article->category_name}}</h1>
	
	
		@foreach ($articles as $article)

			<div class="card" style="width: 18rem;">
			<div class="card-body">
			<h3 class="card-title">{{ $article->name }}</h3>
			<p>{{ $article->price }}$</p>
			<p class="card-text">{{ $article->description }}</p>
			<a href="#" class="btn btn-primary">buy me</a>
			</div>
			</div>

		@endforeach
	@endforeach
	</div>
</div>

<p>more potato items coming never</p>
@endsection