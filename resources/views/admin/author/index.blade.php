@extends('layout.admin')
@section('body')


<div class="container mb-4">
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>Name</th>
                <th>About</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-3">
                            <p class="fw-bold mb-1">{{$author->name}}</p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">{{$author->about}}</p>
                </td>

                <td>
                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                        <a href="{{route('author.update',$author->id)}}">
                            Update
                    </button>

                </td>
                <td>
                    <form method="POST" action="{{route('author.destroy', $author->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link btn-sm btn-rounded">
                            Delete
                        </button>
                    </form>
                </td>
</div>
</td>

</tr>
@endforeach
</tbody>
</table>
</div>
@endsection