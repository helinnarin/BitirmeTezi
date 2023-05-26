@extends('layout.admin')
@section('body')


<div class="container mb-4">
<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
        <tr>
            <th>Order</th>
            <th>Book</th>
            <th>price</th>
            <th>status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <div class="ms-3">
                        <p class="fw-bold mb-1">{{$order->order}}</p>
                    </div>
                </div>
            </td>
            <td>
                <p class="fw-normal mb-1">{{$order->book}}</p>
            </td>
            <td>
                <p class="fw-normal mb-1">{{$order->price}}</p>
            </td>
            <td>
                @if($order->status == 1)
                <p class="fw-normal mb-1">Onaylı</p>
                @else
                <p class="fw-normal mb-1">Onaylanmadı henüz</p>

                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection