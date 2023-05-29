<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;

use Illuminate\Support\Str;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view('admin.author.index',compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         
        $authors = Author::all();
        return view('admin.author.create',compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        $request->validate([
            'name' => ['required'],
            'about' => ['required'],
           
        ]);
        $slug = Str::slug($request->title,'-','en');
        Author::create([
            'name' => $request->name,
            'about' => $request->about,
            'slug' => $slug,
        ]);
        return to_route('author.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return view('admin.author.edit',compact('author'));

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('admin.author.edit',compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $request->validate([
            'name' => ['required'],
            'about' => ['required'],
           
           

        ]);
        $slug = Str::slug($request->title,'-','en');
        $author->update([
            'name' => $request->name,
            'about' => $request->about,
            'slug' => $slug,
           
        ]);   
        return to_route('author.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return back();
    }
}
