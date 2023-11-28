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
    <input id="myInput" type="text" placeholder="Search..">
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
        <tbody id="bookTable">
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
        </tbody>
    </table>
    <div class="row">
        <div class="col-12">
            {{$books->links()}}
        </div>
    </div>
    
@endsection

@section('javascript')
<script>
    $(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#bookTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    });
</script>
@endsection