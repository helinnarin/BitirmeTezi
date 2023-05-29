@extends('layout.admin')
@section('body')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="container" action="{{route('books.update', $book->id)}}" method="post">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="usr">Title:</label>
        <input type="text" value="{{$book->title}}" name="title" class="form-control" >
    </div>
    <div class="form-group">
        <label for="pwd">Desc:</label>
        <input type="text" value="{{$book->desc}}" name="desc" class="form-control" >
    </div>
    <div class="form-group">
        <label for="comment">Body:</label>
        <textarea class="form-control" value="{{$book->body}}" name="body" >{{$book->body}}</textarea>
    </div>
    <div class="form-group">
        <label for="comment">Image:</label>
        <input type="file" name="image" value="{{$book->image}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="comment">Order:</label>
        <input type="number" value="{{$book->order}}" name="order" class="form-control" >
    </div>
    <div class="form-group">
        <label for="comment">Category:</label>
        <input type="text" name="category"  value="{{$book->category}}"class="form-control">
    </div>
    <div class="form-group">
        <label for="comment">Price:</label>
        <input type="number" name="price" value="{{$book->price}}" class="form-control">
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
        <button type="submit" class="btn m-4">Update Book</button>
    </div>

</form>

@endsection