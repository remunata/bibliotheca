<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard', [
            'books' => Book::all()
        ]);
    }

    public function manage()
    {
        return view('manage_books', [
            'books' => Book::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_book');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->id = $request->id;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->year = $request->year;
        $book->genre = $request->genre;
        $book->category = $request->category;
        $book->stock = $request->stock;
        $book->synopsis = $request->synopsis;

        $image_path = $this->saveImage($request);
        $book->image = substr($image_path, 6);
        
        $book->save();

        return redirect()->to('/books');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('show_book', [
            'book' => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('edit_book', [
            'book' => $book
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $updatedBook = Book::find($book->id);
        $updatedBook->id = $request->id;
        $updatedBook->title = $request->title;
        $updatedBook->author = $request->author;
        $updatedBook->year = $request->year;
        $updatedBook->genre = $request->genre;
        $updatedBook->category = $request->category;
        $updatedBook->stock = $request->stock;
        $updatedBook->synopsis = $request->synopsis;

        $image = $request->file('image');
        if (isset($image)) {
            $old_image = storage_path('app/public'.$updatedBook->image);
            File::delete($old_image);

            $image_path = $this->saveImage($request);
            $updatedBook->image = substr($image_path, 6);

        }

        $updatedBook->save();
        return redirect()->route('books.show', ['book' => $updatedBook->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $deletedBook = Book::find($book->id);
        $image = storage_path('app/public'.$deletedBook->image);
        File::delete($image);
        $deletedBook->delete();

        return redirect()->to('/books');
    }

    private function saveImage(Request $request): string
    {
        $md5Name = md5_file($request->file('image')->getRealPath());
        $ext = $request->file('image')->guessExtension();
        $file = $request->file('image')->storeAs('public/uploaded', $md5Name.'.'.$ext);

        return $file;
    }
}
