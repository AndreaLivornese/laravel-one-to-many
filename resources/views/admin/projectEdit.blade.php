@extends('layouts.app')

@section('content')

<div class="container py-5">
    <form action="{{route('admin.update', $project->id ) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
          <label for="name" class="form-label">Nome del progetto</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name') ?? $project['name']}}">

          @error('name')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="username_creator" class="form-label">Username</label>
          <input type="text" class="form-control @error('username_creator') is-invalid @enderror" id="username_creator" name="username_creator" value="{{old('username_creator') ?? $project['username_creator']}}">

          @error('username_creator')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="link_github" class="form-label">Link del GitHub</label>
            <input type="text" class="form-control @error('link_github') is-invalid @enderror" id="link_github" name="link_github" value="{{old('link_github') ?? $project['link_github']}}">

            @error('link_github')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="program_langs" class="form-label">Linguaggi utilizzati</label>
            <input type="text" class="form-control @error('program_langs') is-invalid @enderror" id="program_langs" name="program_langs" value="{{old('program_langs') ?? $project['program_langs']}}">

            @error('program_langs')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">URL della thumb</label>
            <input type="file" class="form-control @error('img') is-invalid @enderror" id="img" name="img" value="{{old('img') ?? $project['img']}}">

            @error('img')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3" style="width:18rem">
            <label for="project_type" class="form-label">Scegli la tipologia del progetto</label>
            <select name="project_type" id="project_type" class="form-control">
                <option value=""></option>
                @foreach($types as $type)
                <option value="{{$type->id}}" {{old('project_type', $project->type ? $project->type->id : '') == $type->id ? 'selected' : ''}}>{{$type->name_type}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-5" style="width:18rem">
            <label class="form-label">Tecnologie utilizzate</label>
            
            <div class="d-flex gap-4">
                @foreach($technologies as $technology)
                <input type="checkbox" name="technologies[]" id="tech-{{technology->id}}" value="{{technology->id}}"> <label for="tech-{{technology->id}}"></label>
                @endforeach
            </div>
           
        </div>

        <button class="btn btn-outline-success">Invia</button>
    </form>
</div>
@endsection