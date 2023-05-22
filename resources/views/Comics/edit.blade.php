@extends('layouts/main')

@section('content')
    <h1>Edit Comic {{$comic->title}}</h1>

    <form action="{{route('comics.update', $comic)}}" method="POST">
    @csrf
    @method('PUT')

        <div class="mb3">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{$comic->title}}">
        </div>

        <div class="mb3">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" value="{{$comic->description}}">
        </div>

        <div class="mb3">
            <label for="thumb">Image</label>
            <input type="text" name="thumb" id="thumb" value="{{$comic->thumb}}">
        </div>

        <div class="mb3">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" value="{{$comic->price}}">
        </div>

        <div class="mb3">
            <label for="series">Series</label>
            <input type="text" name="series" id="series" value="{{$comic->series}}">
        </div>

        <div class="mb3">
            <label for="sale_date">Date</label>
            <input type="date" name="sale_date" id="sale_date" value="{{$comic->date}}">
        </div>
        
        <div class="mb3">
            <label for="type">Type</label>
            <input type="text" name="type" id="type" value="{{$comic->type}}">
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection