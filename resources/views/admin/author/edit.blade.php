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
<form class="container" action="{{route('author.update', $author->id)}}" method="post">
    @method('PUT')
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
        <button type="submit" class="btn m-4">Update Author</button>
    </div>

</form>

@endsection