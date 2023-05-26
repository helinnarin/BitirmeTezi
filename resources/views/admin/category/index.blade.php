@extends('layout.admin')
@section('body')
<div class="container mb-4">
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>Category</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-3">
                            <p class="fw-bold mb-1">{{$category->category}}</p>
                        </div>
                    </div>
                </td>

                <td>
                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                        <a href="{{route('category.update',$category->id)}}">
                            Update
                    </button>
                </td>
                <td>
                    <form method="POST" action="{{route('category.destroy', $category->id)}}">
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