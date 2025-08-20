@extends("layouts.projects")

@section("title", "Modifica progetto")

@section("content")
<form action="{{route("projects.update", $project)}}" method="POST">
    @csrf
    @method("PUT")
  <div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$project->name}}">
    
  </div>
    <div class="mb-3">
    <label for="client" class="form-label">Cliente</label>
    <input type="text" class="form-control" id="client" name="client" value="{{$project->client}}">
    
  </div>
    <div class="mb-3">
    <label for="started_at" class="form-label">Data d'inizio</label>
    <input type="date" class="form-control" id="started_at" name="started_at" value="{{$project->started_at}}">
    
  </div>
    <div class="mb-3">
    <label for="ended_at" class="form-label">Data di fine</label>
    <input type="date" class="form-control" id="ended_at" name="ended_at" value="{{$project->ended_at}}">
    
  </div>
    <div class="mb-3">
    <label for="description" class="form-label">Riassunto</label>
    <input type="text" class="form-control" id="description" name="description" value="{{$project->description}}">
    
  </div>
  
  <button type="submit" class="btn btn-warning">Modifica</button>
</form>
@endsection