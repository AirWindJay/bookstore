@extends('book.layout.app')

@section('content')
    <h1>New Book</h1>
    <form method="POST" action="/book/update">
        <div class="form-group mb-3">
            @csrf
            <input type="text" class="form-control" name="id" id="id" required value="{{$book->id}}" hidden>
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" required value="{{$book->title}}">
            <label for="author">Author</label>
            <input type="text" class="form-control" name="author" id="author" required value="{{$book->author}}">
            <label for="publication_year">Publication Year</label>
            <input type="number" class="form-control" name="publication_year" id="publication_year" required value="{{$book->publication_year}}" min="1" max="2023">
            <label for="summary">Summary</label>
            <div class="form-floating">
            <textarea class="form-control" id="summary" name="summary" style="height: 100px">{{$book->summary}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Update</button>
            <a href="/" class="btn btn-primary">Cancel</a>
        </div>
    </form>
@endsection