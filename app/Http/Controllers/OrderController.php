<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Http\Requests\StoreorderRequest;
use App\Http\Requests\UpdateorderRequest;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = order::all();
        return view('admin.orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreorderRequest $request)
    {
        
    }

    /**$lastOrder = order::latest()->get();
        dd($lastOrder);
     * Display the specified resource.
     */
    public function show(order $order)
    {
        $order->update([
            'status' => 1
        ]);
        
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateorderRequest $request, order $order)
    {
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
        //
    }
    public function newOrder($id)
    {
        $book = Book::where('id',$id)->firstOrFail();

        order::create([
            'order' => rand(1,10000),
            'book' =>$book->title,
            'buyer' => Auth::user()->id,
            'price' => $book->price
        ]);
        return redirect()->back()->with('success', 'Siparişiniz alındı');   

    }
}
