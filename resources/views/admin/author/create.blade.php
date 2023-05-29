@extends('layout.admin')
@section('body')

<form class="container" action="{{route('author.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="usr">Name:</label>
        <input type="text"  name="name" class="form-control">
    </div>
   
    <div class="form-group">
        <label for="comment">About:</label>
        <textarea class="form-control" name="about"></textarea>
    </div>
    <div class="text-center">
        <button type="submit" class="btn m-4">Create Author</button>
    </div>
</form>

@endsection