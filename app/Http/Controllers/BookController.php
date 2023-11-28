<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = book::select('id', 'title', 'author' ,'publication_year' ,'summary' ,'is_deleted')
            ->where('is_deleted', '=', '0')
            ->get()
            ->paginate(3);

        return view('book.index', [
            'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $book = book::create([
                'title' => $request->title,
                'author' => $request->author,
                'publication_year' => $request->publication_year,
                'summary' => $request->summary
            ]);
            return redirect('/');
          } catch (Throwable $e) {
                  return $e;
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = book::select('id', 'title', 'author' ,'publication_year' ,'summary' ,'is_deleted')
            ->where('id', '=', $id)
            ->first();

        return view('book.show', [
            'book' => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = book::select('id', 'title', 'author' ,'publication_year' ,'summary' ,'is_deleted')
            ->where('id', '=', $id)
            ->first();

        return view('book.edit', [
            'book' => $book
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book $book)
    {
        try {
            $book = book::select('id', 'title', 'author' ,'publication_year' ,'summary' ,'is_deleted')
            ->where('id', '=', $request->id)
            ->first();

            $book->title = $request->title;
            $book->author = $request->author;
            $book->publication_year = $request->publication_year;
            $book->summary = $request->summary;
            $book->save();

            return redirect('/');
          } catch (Throwable $e) {
                  return $e;
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = book::select('id', 'title', 'author' ,'publication_year' ,'summary' ,'is_deleted')
            ->where('id', '=', $id)
            ->first();

        $book->is_deleted = 1;
        $book->save();
        return redirect('/');
    }
}
