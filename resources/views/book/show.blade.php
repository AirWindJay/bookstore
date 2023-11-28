@extends('book.layout.app')

@section('content')
    <h1>Book Store</h1>
    <div class="card text-center">
        <div class="card-header">
            {{$book->title}}
        </div>
        <div class="card-body">
            <h5 class="card-title">Summary</h5>
            <p class="card-text">{{$book->summary}}</p>
            <h3 class="card-title">Author</h3>
            <p class="card-text">{{$book->author}}</p>
            <h3 class="card-title">Publication Year</h3>
            <p class="card-text">{{$book->publication_year}}</p>
        </div>
    </div>
@endsection