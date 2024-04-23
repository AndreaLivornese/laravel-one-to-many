@extends('layouts.app')

@section('content')

<div class="container py-5">
    <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
          <label for="name" class="form-label">Nome del progetto</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">

          @error('name')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="username_creator" class="form-label">Username</label>
          <input type="text" class="form-control @error('username_creator') is-invalid @enderror" id="username_creator" name="username_creator" value="{{old('username_creator')}}">

          @error('username_creator')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="link_github" class="form-label">Link del GitHub</label>
            <input type="text" class="form-control @error('link_github') is-invalid @enderror" id="link_github" name="link_github" value="{{old('link_github')}}">

            @error('link_github')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="program_langs" class="form-label">Linguaggi utilizzati</label>
            <input type="text" class="form-control @error('program_langs') is-invalid @enderror" id="program_langs" name="program_langs" value="{{old('program_langs')}}">

            @error('program_langs')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-5">
            <label for="img" class="form-label">URL della thumb</label>
            <input type="file" class="form-control @error('img') is-invalid @enderror" id="img" name="img" value="{{old('img')}}">

            @error('img')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <button class="btn btn-outline-success">Invia</button>
    </form>
</div>
@endsection