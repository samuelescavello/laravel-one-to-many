@extends('layouts.admin')
@section('title', 'modifica')

@section('content')
    <div>
        <h2 class="text-center text-uppercase">modifica un progetto</h2>
    </div>
    <section class="container">
    
    <form action="{{route('admin.projects.update', $project->slug)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">titolo</label>
            <input type="text" class="form-control" @error('title') is-invalid @enderror id="title" name="title" value="{{old('title', $project->title)}}" placeholder="inserisci titolo" value="{{$project->title}}" >
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">contenuto</label>
            <textarea class="form-control" id="content" name="content" col="30"
                rows="10">{{old('content', $project->content)}}
            </textarea>
            
        </div>
        <button type="submit" class="btn btn-success">modifica</button>
    </form>
</section>
@endSection