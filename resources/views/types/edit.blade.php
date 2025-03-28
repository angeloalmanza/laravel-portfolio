@extends("layouts.project")

@section("title", "Modifica la tipologia")

@section("content")
<form action="{{route("types.update", $type)}}" method="POST">
    @csrf
    @method("PUT")

    <div class="form-control mb-3 d-flex flex-column">
        <label for="name">Tipologia</label>
        <select name="name" id="name">
            @foreach($types as $t)
                <option value="{{$t->name}}" {{ $t->name == $type->name ? 'selected' : '' }}>{{$t->name}}</option>     
            @endforeach
        </select>
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="description">Descrizione tipologia</label>
        <textarea name="description" id="description" width="100%" rows="5">{{$type->description}}</textarea>
    </div>

    <input type="submit" value="Modifica">
</form>
@endsection