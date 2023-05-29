@extends('layout.admin')
@section('body')
@if (\Session::has('success'))
    <div class="alert alert-danger">
        <ul>
                <li>{!! \Session::get('success')!!}</li>
        </ul>
    </div>
@endif


<div class="container mb-4">
<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
        <tr>
            <th>Order</th>
            <th>Book</th>
            <th>Buyer</th>
            <th>Status</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <div class="ms-3">
                        <p class="fw-bold mb-1">{{$order->book}}</p>
                    </div>
                </div>
            </td>
            <td>
                <p class="fw-normal mb-1">{{$order->book}}</p>
            </td>
            <td>
                <p class="fw-normal mb-1">{{$order->buyer}}</p>
            </td>
            <td>
                <p class="fw-normal mb-1">{{$order->status}}</p>
            </td>
            <td>
            <form method="POST" action="{{route('orders.destroy', $order->id)}}">
                @csrf
                @method('PUT')
                <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark"> 
                    <a href="{{route('orders.update',$order->id)}}">
                Update 
                </button>
                </form>
            </td>
            <td>
            <form method="POST" action="{{route('orders.destroy', $order->id)}}">
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