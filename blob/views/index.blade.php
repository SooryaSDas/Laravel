@extends("layouts.app")
@section("title","Index page")

@section("cont")

{{$name}}
{{$Address}}

<ul>
    @foreach($item as $items)
    <li>{{$items}}</li>
    @endforeach
</ul>
    
@endsection