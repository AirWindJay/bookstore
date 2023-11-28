@extends('book.layout.app')

@section('css')
<style>
td, th {
  text-align: center;
}
</style>
@endsection

@section('content')

    <h1>Book Store</h1>
    <!-- <div class="row">
        @foreach($books as $book)
            <div class="card col-3" style="margin:15px">
            <a href="/book/show/{{$book->id}}" class="btn btn-sm btn-info mt-2" style="width: 25%">View</a>
                <div class="card-body">
                    <h5 class="card-title">{{$book->title}}</h5>
                    <p class="card-text">{{$book->summary}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$book->author}}</li>
                    <li class="list-group-item">{{$book->publication_year}}</li>
                </ul>
                <div class="card-body">
                    <a href="/book/edit/{{$book->id}}" class="btn btn-primary">Edit</a>
                    <button class="btn btn-danger">Delete</button>
                </div>
            </div>
        @endforeach
    </div> -->

    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>
                    Title
                </th>
                <th>
                    Author
                </th>
                <th>
                    Publication Year
                </th>
                <th>
                    Summary
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        @foreach($books as $book)
            <tr>
                <td>
                    {{$book->title}}
                </td>
                <td>
                    {{$book->author}}
                </td>
                <td>
                    {{$book->publication_year}}
                </td>
                <td>
                    {{$book->summary}}
                </td>
                <td>
                    <div class="row">
                        <div class="col-12"><a href="/book/show/{{$book->id}}" class="btn btn-sm btn-info mb-2">View</a></div>
                        <div class="col-12"><a href="/book/edit/{{$book->id}}" class="btn btn-primary mb-2">Edit</a></div>
                        <div class="col-12">
                            <form method="POST" action="/book/delete/{{$book->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <div class="form-group">
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </td>
            </tr>
        @endforeach
    </table>
@endsection