@extends("layouts.themes")

@section("body-parts")

@foreach($article as $article)
<h2>{{$article->title}}</h2>
<h3>{{$article->body}}</h3>

@endforeach
@endsection