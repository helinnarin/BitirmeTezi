@extends('layout.admin')
@section('body')

<form class="container" action="{{route('category.update', $category->id)}}" method="post">
    @method('PUT')
    @csrf
   
    <div class="form-group">
        <label for="comment">Order:</label>
        <input type="number" value="{{$category->order}}" name="order" class="form-control" >
    </div>
    <div class="form-group">
        <label for="comment">Category:</label>
        <input type="text" value="{{$category->category}}" name="category" class="form-control">
    </div>
    
    <div class="text-center">
        <button type="submit" class="btn m-4">Update Category</button>
    </div>

</form>

@endsection