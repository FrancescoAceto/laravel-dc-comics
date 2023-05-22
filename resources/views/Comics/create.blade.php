@extends('layouts/main')

@section('content')
    <form action="{{route('comics.store')}}" method="POST">
    @csrf

        <div class="mb3">
            <label for="title">Title</label>
            <input class="form-control @error('title') is invalid @enderror" type="text" name="title" id="title">
            @error('title')
                <div>
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb3">
            <label for="description">Description</label>
            <input class="form-control @error('description') is invalid @enderror" type="text" name="description" id="description">
            @error('description')
                <div>
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb3">
            <label for="thumb">Image</label>
            <input class="form-control @error('thumb') is invalid @enderror" type="text" name="thumb" id="thumb">
            @error('thumb')
                <div>
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb3">
            <label for="price">Price</label>
            <input class="form-control @error('price') is invalid @enderror" type="number" name="price" id="price">
            @error('price')
                <div>
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb3">
            <label for="series">Series</label>
            <input class="form-control @error('series') is invalid @enderror" type="text" name="series" id="series">
            @error('series')
                <div>
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb3">
            <label for="sale_date">Date</label>
            <input class="form-control @error('sale_date') is invalid @enderror" type="date" name="sale_date" id="sale_date">
            @error('sale_date')
                <div>
                    {{$message}}
                </div>
            @enderror
        </div>
        
        <div class="mb3">
            <label for="type">Type</label>
            <input class="form-control @error('type') is invalid @enderror" type="text" name="type" id="type">
            @error('type')
                <div>
                    {{$message}}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection