@extends("layouts.project")

@section("title", "Tutti i progetti")

@section("content")
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome progetto</th>
      <th scope="col">Tipologia</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($projects as $project)
    <tr>
      <td>{{$project->name}}</td>
      <td>{{$project->type}}</td>
      <td><a href="{{route("projects.show", $project)}}">Dettagli</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

<a href="{{route("projects.create")}}" class="btn btn-primary">Crea un nuovo progetto</a>
@endsection