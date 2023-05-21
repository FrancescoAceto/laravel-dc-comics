@extends('layouts/main')

@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Series</th>
        <th scope="col">Date</th>
        <th scope="col">Type</th>
      </tr>
    </thead>

    <tbody>
        @foreach ($comics as $singlecomic)
        <tr>
            <td>{{$singlecomic->title}}</td>
            <td>{{$singlecomic->description}}</td>
            <td>{{$singlecomic->price}}</td>
            <td>{{$singlecomic->series}}</td>
            <td>{{$singlecomic->sale_date}}</td>
            <td>{{$singlecomic->type}}</td>
            <td><a href="{{route('comics.show', $singlecomic->id)}}">See More</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <div class="container">
    <a href="{{route('comics.create')}}">Add Comic</a>
  </div>
@endsection