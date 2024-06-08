@extends('layouts.admin')
@section('title', 'dettaggli')

@section('content')
<div class="mb-5">
    <h2 class="text-center text-uppercase">dettagli progetto</h2>
</div>

<div class="card container" style="width: 18rem;">
    <img src="{{asset('storage/' . $project->image)}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$project->title}}</h5>
        <p class="card-text">{{$project->content}}</p>
        <a href="{{route('admin.projects.edit', $project->slug)}}" class="btn btn-primary mb-2">modifica</a>

        <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>

                        </form>
    </div>
</div>
<!-- <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">TITLE</th>
            <th scope="col">CONTENT</th>
            <th scope="col">SLUG</th>
            <th scope="col">CREATED AT</th>
            <th scope="col">UPDATED AT</th>
            <th scope="col">ACTION</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <tr>
            <td>{{$project->id}}</td>
            <td>{{$project->title}}</td>
            <td>{{$project->content}}</td>
            <td>{{$project->slug}}</td>
            <td>{{$project->created_at}}</td>
            <td>{{$project->updated_at}}</td>
            <td>
                <a href="{{route('admin.projects.edit', $project->slug)}}"><i class="fa-solid fa-pen"></i></a>
            </td>
        </tr>
    </tbody>
</table> -->

@endsection