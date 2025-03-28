@extends("layouts.project")

@section("title", "Crea una nuova tipologia")

@section("content")
<form action="{{route("types.store")}}" method="POST">
    @csrf

    <div class="form-control mb-3 d-flex flex-column">
        <label for="name">Tipologia</label>
        <input type="text" name="name" id="name">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="description">Descrizione tipologia</label>
        <textarea name="description" id="description" width="100%" rows="5"></textarea>
    </div>

    <input type="submit" class="btn btn-primary" value="Crea">
</form>
@endsection