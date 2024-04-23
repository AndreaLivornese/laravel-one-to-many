@extends('layouts.app')


@section('content')
<div class="container py-5">
  
    <div class="d-flex justify-content-between align-items-center">
      <h1>
          {{__('Dashboard')}}
      </h1>

      <a href="{{route("admin.create")}}" class="btn btn-success">Aggiungi progetto</a>
    </div>

    <h2>
       <small>Lista dei progetti </small>
    </h2>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nome Progetto</th>
            <th scope="col">Link gitHub</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
          <tr>
            <td>{{$project->name}}</td>
            <td><a href="{{$project->link_github}}">{{$project->link_github}}</a></td>
            <td> <a href="{{route("admin.show", $project->id)}}" class="btn btn-outline-warning">Visualizza</a> </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
@endsection