<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Author;
use App\Models\category;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Str;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $books = Book::all();
        return view('admin.books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $categories = category::all();
        $authors = Author::all();
        return view('admin.books.create',compact('categories','authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $request->validate([
            'title' => ['required'],
            'desc' => ['required'],
            'body' => ['required'],
            'order' =>['required'],
            'category' =>['required'],
            'image' => ['required'],
            'price' =>  ['required'],
            

        ]);
        $file = $request->file('image');
        $randomname=Str::random(12);
        $path = $file ->move('book',$randomname.'.'.$file->getClientOriginalExtension());
      
        $slug = Str::slug($request->title,'-','en');
        Book::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'image' => $path->getPathname(),
            'body' => $request->body,
            'slug' => $slug,
            'order' => $request->order,
            'category' => $request->category,
            'price' => $request->price,
            'author_id'=>$request->author_id,
            
        ]);
        return to_route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $authors = Author::all();
       return view('admin.books.edit',compact('book','authors'));

    }

    public function bookIndex($id)
    {
        $book = Book::where('id',$id)->firstOrFail();
        return view('pages.bookinfo',compact('book'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('admin.books.edit',compact('book','authors'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $request->validate([
            'title' => ['required'],
            'desc' => ['required'],
            'body' => ['required'],
            'order' =>['required'],
            'category' =>['required'],
            'image' => ['required'],
            'price' =>  ['required'],
           

        ]);
        $slug = Str::slug($request->title,'-','en');
        $book->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'image' => $request->image,
            'body' => $request->body,
            'slug' => $slug,
            'order' => $request->order,
            'category' => $request->category,
            'price' => $request->price,
            'author_id'=>$request->author_id,
           
        ]);
        return to_route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return back();
    }

}
