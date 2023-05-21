@extends('layouts/main')

@section('content')
    <form action="{{route('comics.store')}}" method="POST">
    @csrf

        <div class="mb3">
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>

        <div class="mb3">
            <label for="description">Description</label>
            <input type="text" name="description" id="description">
        </div>

        <div class="mb3">
            <label for="thumb">Image</label>
            <input type="text" name="thumb" id="thumb">
        </div>

        <div class="mb3">
            <label for="price">Price</label>
            <input type="number" name="price" id="price">
        </div>

        <div class="mb3">
            <label for="series">Series</label>
            <input type="text" name="series" id="series">
        </div>

        <div class="mb3">
            <label for="sale_date">Date</label>
            <input type="date" name="sale_date" id="sale_date">
        </div>
        
        <div class="mb3">
            <label for="type">Type</label>
            <input type="text" name="type" id="type">
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection