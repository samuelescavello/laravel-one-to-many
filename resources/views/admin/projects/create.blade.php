@extends('layouts.admin')
@section('title', 'crea')

@section('content')
<section class="container">
    <h2 class="text-center text-uppercase">crea il tuo progetto</h2>
    <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">titolo</label>
            <input type="text" class="form-control" @error('title') is-invalid @enderror id="title" name="title"
                value="{{old('title')}}" placeholder="inserisci titolo">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">image</label>
            <input type="file" accept="image/*" class="form-control" @error('image') is-invalid @enderror id="image" name="image"
                value="{{old('image')}}" placeholder="inserisci titolo">
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">contenuto</label>
            <textarea class="form-control" @error('content') is-invalid @enderror id="content"
                value="{{old('content')}}" name="content" placeholder="inserisci contenuto" col="30"
                rows="10"></textarea>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">crea</button>
    </form>
</section>
@endsection