@extends("layouts.project")

@section("title", "Tecnologie per i progetti")

@section("content")
<table class="table">
  <thead>
    <tr>
      <th scope="col">Tecnologia</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($technologies as $technology)
    <tr>
      <td>{{$technology->name}}</td>
      <td><a href="{{route("technologies.show", $technology)}}" class="btn btn-outline-primary">Dettagli</a></td>
      <td><a href="{{route("technologies.edit", $technology)}}" class="btn btn-outline-warning">Modifica</a></td>
      <td><button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</button></td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="d-flex gap-3 mt-4">
<a href="{{route("technologies.create")}}" class="btn btn-primary">Crea una nuova tecnologia</a>
<a href="{{route("projects.index")}}" class="btn btn-primary">Ritorna ai progetti</a>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina la tecnologia</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Vuoi eliminare la tipologia?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form action="{{route("technologies.destroy", $technology)}}" method="POST">
          @csrf
          @method("DELETE")
      
          <input type="submit" class="btn btn-danger" value="Elimina definitivamente">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection