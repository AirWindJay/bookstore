@extends('book.layout.app')

@section('content')
    <h1>New Book</h1>
    <form method="POST" action="/book/create/save">
        <div class="form-group mb-3">
            @csrf
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" required>
            <label for="author">Author</label>
            <input type="text" class="form-control" name="author" id="author" required>
            <label for="publication_year">Publication Year</label>
            <input type="number" class="form-control" name="publication_year" id="publication_year" required min="1" max="2023">
            <label for="summary">Summary</label>
            <textarea class="form-control" name="summary" id="summary" style="height: 100px"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection