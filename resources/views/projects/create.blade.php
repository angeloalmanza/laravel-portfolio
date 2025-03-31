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
        <label for="type_id">Tipologia progetto</label>
        <select name="type_id" id="type_id">
            @foreach($types as $type)
                <option value="{{$type->id}}">{{$type->name}}</option>     
            @endforeach
        </select>
    </div>

    <div class="form-control mb-3 d-flex flex-wrap">
        @foreach($technologies as $technology)
            <div class="tag me-2">
                <input type="checkbox" name="technologies[]" value="{{$technology->id}}" id="technology-{{$technology->id}}">
                <label for="technology-{{$technology->id}}">{{$technology->name}}</label>
            </div>
        @endforeach
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