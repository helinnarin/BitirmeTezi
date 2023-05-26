<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Http\Requests\StorecategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecategoryRequest $request)
    {
        $request->validate([
            'category' => ['required'],
            'order' => ['required'],
        ]);
        category::create([
            'category' => $request->category,
            'order' => $request->order
        ]);
        return to_route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        return view('admin.category.edit',compact('category'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        return view('admin.category.edit',compact('category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecategoryRequest $request, category $category)
    {
        $request->validate([
            'category' => ['required'],
            'order' => ['required'],
        ]);
        $category->update([
            'category' => $request->category,
            'order' => $request->order
        ]);
        return to_route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $category->delete();
        return back();
    }
}
