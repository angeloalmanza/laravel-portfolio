@extends("layouts.project")

@section("title", "Modifica il progetto")

@section("content")
<form action="{{route("projects.update", $project)}}" method="POST">
    @csrf
    @method("PUT")

    <div class="form-control mb-3 d-flex flex-column">
        <label for="name">Nome progetto</label>
        <input type="text" name="name" id="name" value="{{$project->name}}">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="client">Nome cliente</label>
        <input type="text" name="client" id="client" value="{{$project->client}}">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="type_id">Tipologia progetto</label>
        <select name="type_id" id="type_id">
            @foreach($types as $type)
                <option value="{{$type->id}}" {{$project->type_id == $type->id ? 'selected' : ''}}>{{$type->name}}</option>     
            @endforeach
        </select>
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="start_date">Data inizio progetto</label>
        <input type="date" name="start_date" id="start_date" value="{{$project->start_date}}">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="end_date">Data fine progetto</label>
        <input type="date" name="end_date" id="end_date" value="{{$project->end_date}}">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="description">Descrizione progetto</label>
        <textarea name="description" id="description" width="100%" rows="5">{{$project->description}}</textarea>
    </div>

    <input type="submit" value="Modifica">
</form>
@endsection