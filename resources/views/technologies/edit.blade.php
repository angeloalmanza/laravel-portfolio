@extends("layouts.project")

@section("title", "Modifica la tecnologia")

@section("content")
<form action="{{route("technologies.update", $technology)}}" method="POST">
    @csrf
    @method("PUT")

    <div class="form-control mb-3 d-flex flex-column">
        <label for="name">Tecnologia</label>
        <select name="name" id="name">
            @foreach($technologies as $tecno)
                <option value="{{$tecno->name}}" {{ $tecno->name == $technology->name ? 'selected' : '' }}>{{$tecno->name}}</option>     
            @endforeach
        </select>
    </div>

     <div class="form-control mb-3 d-flex flex-column">
        <label for="color">Scegli un colore</label>
        <input type="color" id="color" name="color" selected>
    </div>

    <input type="submit" value="Modifica">
</form>
@endsection