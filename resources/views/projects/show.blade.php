@extends("layouts.project")

@section("title", $project->name)

@section("content")
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <p><strong>Cliente:</strong> {{$project->client}}</p>
    <p><strong>Tipologia:</strong> {{$project->type}}</p>
    <p>{{$project->start_date}} - {{$project->end_date}}</p>
    <p class="card-text">{{$project->description}}</p>
  </div>
</div>

<a href="{{route("projects.edit", $project)}}" class="btn btn-warning mt-4">Modifica il progetto</a>
@endsection