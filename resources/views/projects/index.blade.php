@extends("layouts.projects")

@section("title", "Il mio progetto")

@section("content")
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cliente</th>
            <th>Data d'inizio</th>
            <th>Data di fine</th>
            <th>Riassunto</th>
        </tr>
    </thead>
    <tbody>
        @foreach($projects as $project)
        <tr>
            <td>{{$project->name}}</td>
            <td>{{$project->client}}</td>
            <td>{{$project->started_at}}</td>
            <td>{{$project->ended_at}}</td>
            <td>{{$project->description}}</td>
            <td><a href="{{route("projects.show", $project->id)}}">Visualizza</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-primary" href="{{route("projects.create")}}">Aggiungi progetto</a>
@endsection