@extends("layouts.app")
@section("title","About page")

@section("cont")
{{$message}}
{{$totalprice}}
<ul>
@foreach($items as $item)
    <li>{{$item}}</li>
@endforeach
</ul>

@endsection