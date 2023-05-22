@extends('layouts/main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
            <img src="" alt="IMAGE">
        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <div>{{$comic->title}}</div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <div>{{$comic->description}}</div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <div>{{$comic->price}}</div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <div>{{$comic->series}}</div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <div>{{$comic->sale_date}}</div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <div>{{$comic->type}}</div>
        </div>
    </div>

    <div>

    <a class="btn btn-primary offset-4" href="{{route('comics.edit', $comic)}}">Edit Comic</a>
    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <a class="btn btn-primary offset-4" href="{{route('comics.edit', $comic)}}">Remove Comic</a>
    </form>
    

    </div>
</div>
@endsection