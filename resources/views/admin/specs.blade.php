@extends('layouts.app')

@section('content')


<div class="container py-5">

    <div class="d-flex justify-content-end">
        <div class="card" style="width: 30rem;">
            <img src="{{asset('storage/' . $project->img)}}" class="card-img-top" alt="immagine non disponibile">
            <div class="card-body">
              <h5 class="card-title">{{$project->name}}</h5>
              <h6 class="card-title mb-2">{{$project->username_creator}}</h6>
              <div class="mb-2">
                @foreach($project->technologies as $technology)
                <span class="badge rounded-pill text-bg-info">{{$technology->nome}}</span>
                @endforeach
              </div>
              <p class="card-text">{{$project->type?->name_type}}</p>
              <p class="card-text">{{$project->link_github}}</p>
            </div>
            <div class="card-footer d-flex gap-2">
                <a href="{{route('admin.edit', $project->id)}}" class="btn btn-primary">Modifica</a>
                <form action="{{route('admin.destroy', $project->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Elimina</button>
                </form>
            </div>
          </div>
    </div>

</div>
@endsection