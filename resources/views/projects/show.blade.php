@extends("layouts.projects")



@section("content")



<h2>{{$project->name}}</h2>
<p>Tipo: {{$project->type->name}}</p>
<p>{{$project->description}}</p>
<p>
  Tecnologie utilizzate:
  @foreach ($project->technologies as $technology)
  <span class="badge" style="background-color: {{$technology->color}}">{{$technology->name}}</span>
  @endforeach 
</p>
<div class="d-flex gap-3 mt-5">
<a href="{{route("projects.edit", $project)}}" class="btn btn-warning">Modifica progetto</a>
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Elimina progetto
</button>

</div>
@endsection

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">{{$project->name}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Sicuro di voler eliminare il progetto?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form method="POST" action="{{route("projects.destroy", $project)}}">
    @csrf
    @method("DELETE")

<input type="submit" value="Elimina" class="btn btn-danger">
</form>
      </div>
    </div>
  </div>
</div>