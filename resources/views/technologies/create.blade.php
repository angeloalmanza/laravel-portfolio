@extends("layouts.project")

@section("title", "Crea una nuova tecnologia")

@section("content")
<form action="{{route("technologies.store")}}" method="POST">
    @csrf

    <div class="form-control mb-3 d-flex flex-column">
        <label for="name">Tecnologia</label>
        <input type="text" name="name" id="name">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="color">Scegli un colore</label>
        <input type="color" id="color" name="color">
    </div>

    <input type="submit" class="btn btn-primary" value="Crea">
</form>
@endsection