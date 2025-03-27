@extends("layouts.project")

@section("title", "Crea un nuovo progetto")

@section("content")
<form action="{{route("projects.store")}}" method="POST">
    @csrf

    <div class="form-control mb-3 d-flex flex-column">
        <label for="name">Nome progetto</label>
        <input type="text" name="name" id="name">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="client">Nome cliente</label>
        <input type="text" name="client" id="client">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="type">Tipologia progetto</label>
        <input type="text" name="type" id="type">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="start_date">Data inizio progetto</label>
        <input type="date" name="start_date" id="start_date">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="end_date">Data fine progetto</label>
        <input type="date" name="end_date" id="end_date">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="description">Descrizione progetto</label>
        <textarea name="description" id="description" width="100%" rows="5"></textarea>
    </div>

    <input type="submit" class="btn btn-primary" value="Crea">
</form>
@endsection