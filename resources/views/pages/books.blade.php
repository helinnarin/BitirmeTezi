@extends('layout.master')
@section('body')

<div class="container">
    <div class="text-center">
        <h4 class="m-4"><strong>Books</strong></h4>
        <div class="row">
            <div id="myBtnContainer">
                <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                @foreach($categories as $category)
                <button class="btn" onclick="filterSelection('{{$category->category}}')"> {{$category->category}}</button>
                @endforeach
            </div>
            <div class="container">
                @foreach($books as $book)
                <div class="filterDiv {{$book->category}}">
                    <a href="{{route('bookIndex',$book->id)}}"><img src="{{$book->getfile()}}" class="img-fluid" style="height:150px;"/></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection