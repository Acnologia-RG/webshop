@extends('layouts.app')

@section('content')
<h1>potato store</h1>
@foreach ($articles as $article)
<p>{{ $article->name }}</p>
@endforeach
<p>more potato items coming never</p>
@endsection