@extends("layouts.projects")

@section("title", "Aggiungi progetto")

@section("content")
<form action="{{route("projects.store")}}" method="POST">
    @csrf
    
  <div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" id="name" name="name" >
    
  </div>

  <div class="mb-3">
    <label for="type_id" class="form-label">Tipo</label>
   <select name="type_id" id="type_id">
    @foreach ($types as $type)
    <option value="{{$type->id}}" >{{$type->name}}</option>
        
    @endforeach
   </select>
  </div>
    <div class="mb-3">
    <label for="client" class="form-label">Cliente</label>
    <input type="text" class="form-control" id="client" name="client" >
    
  </div>
    <div class="mb-3">
    <label for="started_at" class="form-label">Data d'inizio</label>
    <input type="date" class="form-control" id="started_at" name="started_at" >
    
  </div>
    <div class="mb-3">
    <label for="ended_at" class="form-label">Data di fine</label>
    <input type="date" class="form-control" id="ended_at" name="ended_at" >
    
  </div>
    <div class="mb-3">
    <label for="description" class="form-label">Riassunto</label>
    <input type="text" class="form-control" id="description" name="description" >
    
  </div>
  
  <button type="submit" class="btn btn-primary">Aggiungi</button>
</form>
@endsection