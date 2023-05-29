@extends('layout.admin')
@section('body')

<form class="container" action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="usr">Title:</label>
        <input type="text"  name="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="pwd">Desc:</label>
        <input type="text" name="desc" class="form-control">
    </div>
    <div class="form-group">
        <label for="comment">Body:</label>
        <textarea class="form-control" name="body"></textarea>
    </div>
    <div class="form-group">
        <label for="comment">Image:</label>
        <input type="file" name="image" class="form-control">
    </div>
    <div class="form-group">
        <label for="comment">Order:</label>
        <input type="number" name="order" class="form-control">
    </div>
    <div class="form-group">
        <label for="comment">Category:</label>
        <select id="category" name="category" class="form-control">
            @foreach($categories as $category)
            <option value="{{$category->category}}">{{$category->category}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="comment">Price:</label>
        <input type="number" name="price" class="form-control">
    </div>
    <div class="form-group">
        <label for="comment">Author:</label>
        <select id="category" name="author_id" class="form-control">
            @foreach($authors as $author)
            <option value="{{$author->id}}">{{$author->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="text-center">
        <button type="submit" class="btn m-4">Create Book</button>
    </div>
</form>

@endsection