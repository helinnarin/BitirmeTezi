@extends('layout.admin')
@section('body')


<div class="container mb-4">
<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Slug</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <div class="ms-3">
                        <p class="fw-bold mb-1">{{$book->title}}</p>
                    </div>
                </div>
            </td>
            <td>
                <p class="fw-normal mb-1">{{$book->category}}</p>
            </td>
            <td>
                <p class="fw-normal mb-1">{{$book->slug}}</p>
            </td>
            <td>
                <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark"> 
                    <a href="{{route('books.update',$book->id)}}">
                Update 
                </button>
            </td>
            <td>
            <form method="POST" action="{{route('books.destroy', $book->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-link btn-sm btn-rounded">
                    Delete
                </button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection