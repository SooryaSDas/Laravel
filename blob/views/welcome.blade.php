@extends("layouts.app")
@section("title","Welcome page")

@section ("content")

<table>
    <thead>Table</thead>
    <tr>
        <th>Roll No </th>
        <th> Name </th>
        <th> Age </th>
    </tr>
    <tr>
        <td>1</td>
        <td> Soorya</td>
        <td> 23</td>
    </tr>

    <tr>
        <td>2</td>
        <td> Sandra</td>
        <td> 20</td>
    </tr>

    <tr>
        <td>3</td>
        <td> Sooraj</td>
        <td> 31</td>
    </tr>
</table>

@endsection

@section("cont")

<h1>{{id}}</h1>

@endsection