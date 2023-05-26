@extends('layout.master')
@section('body')


<!--Main layout-->
<main class="my-5">
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
    <!--Section: News of the day-->
    <div class="border-bottom pb-4 mb-5">
        <div class="row gx-5">
            <div class="col-md-4 mb-4">
                <div class="bg-image hover-overlay ripple m-4 shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                    <img src="{{$book->getfile()}}" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
            </div>

            <div class="col-md-8 mt-4 mb-4">
                
                <h4><strong>{{$book->title}}</strong></h4>
                <p class="text-muted">
                    {{$book->desc}}
                <p>
                    ${{$book->price}}
                </p>
                <form class="d-flex justify-content-left container" action="{{route('newOrder',$book->id)}}" method="POST" enctype="multipart/form-data">
                 @csrf
                    <!-- Default input -->
                    <button class="btn  ms-1" type="submit">
                        Satın Al
                        <i class="fas fa-shopping-cart ms-1"></i>
                    </button>
                </form>
                </p>

            </div>
        </div>
    </div>
</main>
<!--Section: News of the day-->



@endsection
