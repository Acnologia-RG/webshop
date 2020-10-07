@extends('layouts.app')
@section('content')
<div class="container">
<h1>categories</h1>
	@foreach ($categories as $category)
		<a href="category/{{$category->id}}"><h2>{{$category->category_name}}</h2></a>
	@endforeach
</div>
@endsection