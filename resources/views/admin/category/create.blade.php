@extends('layout.admin')
@section('body')

<form class="container" action="{{route('category.store')}}" method="POST" >
    @csrf
    
    <div class="form-group">
        <label for="comment">Order:</label>
        <input type="number" name="order" class="form-control" >
    </div>
    <div class="form-group">
        <label for="comment">Category:</label>
        <input type="text" name="category" class="form-control">
    </div>
    
    <div class="text-center">
    <button type="submit" class="btn m-4">Create Category</button>
    </div>
</form>

@endsection