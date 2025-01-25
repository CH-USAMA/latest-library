<?php

namespace App\Http\Controllers;

use App\Models\Book;
//use App\Http\Requests\StoreBooksRequest;
use Illuminate\Http\Request;
//use App\Http\Requests\UpdateBooksRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Book::all();
        return view( 'books.list',['bookslist'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createbook()
    {
        return view( 'books.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function bookstore(Request $request)
    {
        //dd(vars: $request);
        $book = new Book();
        $book->publisher = $request->publisher;
        $book->author = $request->author;
        $book->title = $request->title;
        $book->genre = $request->genre;
        $book->category = $request->category;
        $book->description = $request->description;
        $book->or_level = $request->or_level;
        $book->save();
        return redirect()->route('books');
    }

    /**
     * Display the specified resource.
     */
    public function show( $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBooksRequest $request,  $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $book)
    {
        //
    }
}
