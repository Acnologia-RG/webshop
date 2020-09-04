@extends('layouts.app')

{{$category_id=0}}

@section('content')
<h1>potato store</h1>

<div class="container">
	<div class="row">
	@foreach ($articles as $article)

		@if ($article->category_id > $category_id)
			<h1>{{$categories->category_name}}</h1>
		@endif

		<section class="col-lg">
		<h1>{{ $article->name }}</h1>
		<p>{{ $article->price }}</p>
		<p>{{ $article->description }}</p>
		</section>
		{{$category_id = $article->category_id}}

	@endforeach
	</div>
</div>

<p>more potato items coming never</p>
@endsection