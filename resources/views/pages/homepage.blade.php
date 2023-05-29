@extends('layout.master')
@section('body')

      <div class="m-4">
      <div class="text-center">
            <h4 class="mb-5"><strong> Best Sellers of the Week </strong></h4>
        <div class="owl-carousel owl-theme">
          @foreach($books as $book)
          <div class="item">
            <img src="{{$book->getfile()}}" class="img-fluid" />
          </div>
         @endforeach
        </div>
      </div>
    </div>


@endsection