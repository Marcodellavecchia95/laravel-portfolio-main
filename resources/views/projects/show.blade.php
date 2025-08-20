@extends("layouts.projects")



@section("content")
<h2>{{$project->name}}</h2>
<p>{{$project->description}}</p>
@endsection