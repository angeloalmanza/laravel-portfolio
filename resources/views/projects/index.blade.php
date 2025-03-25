@extends("layouts.project")

@section("title", "Tutti i progetti")

@section("content")
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome progetto</th>
      <th scope="col">Cliente</th>
      <th scope="col">Data inizio</th>
      <th scope="col">Data fine</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($projects as $project)
    <tr>
      <td>{{$project->name}}</td>
      <td>{{$project->client}}</td>
      <td>{{$project->start_date}}</td>
      <td>{{$project->end_date}}</td>
      <td><a href="{{route("projects.show", $project)}}">Dettagli</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection