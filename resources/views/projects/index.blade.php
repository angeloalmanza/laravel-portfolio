@extends("layouts.project")

@section("title", "Tutti i progetti")

@section("content")
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome progetto</th>
      <th scope="col">Tipologia</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($projects as $project)
    <tr>
      <td>{{$project->name}}</td>
      <td>{{$project->type}}</td>
      <td><a href="{{route("projects.show", $project)}}" class="btn btn-outline-primary">Dettagli</a></td>
      <td><a href="{{route("projects.edit", $project)}}" class="btn btn-outline-warning">Modifica</a></td>
      <td><button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</button></td>
    </tr>
    @endforeach
  </tbody>
</table>

<a href="{{route("projects.create")}}" class="btn btn-primary">Crea un nuovo progetto</a>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il progetto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Vuoi eliminare il progetto?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form action="{{route("projects.destroy", $project)}}" method="POST">
          @csrf
          @method("DELETE")
      
          <input type="submit" class="btn btn-danger" value="Elimina definitivamente">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection