@extends("layouts.project")

@section("title", "Tipologie di progetto")

@section("content")
<table class="table">
  <thead>
    <tr>
      <th scope="col">Tipologia</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($types as $type)
    <tr>
      <td>{{$type->name}}</td>
      <td><a href="{{route("types.show", $type)}}" class="btn btn-outline-primary">Dettagli</a></td>
      <td><a href="{{route("types.edit", $type)}}" class="btn btn-outline-warning">Modifica</a></td>
      <td><button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</button></td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="d-flex gap-3 mt-4">
<a href="{{route("types.create")}}" class="btn btn-primary">Crea una nuova tipologia</a>
<a href="{{route("projects.index")}}" class="btn btn-primary">Ritorna ai progetti</a>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina la tipologia</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Vuoi eliminare la tipologia?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form action="{{route("types.destroy", $type)}}" method="POST">
          @csrf
          @method("DELETE")
      
          <input type="submit" class="btn btn-danger" value="Elimina definitivamente">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection