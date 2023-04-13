<?php

namespace App\Http\Controllers;
use App\Models\Order;


use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/admin.order.index')->with('orders',Order::all());

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin.order.index')->with('orders',Order::all());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order=new Order();
        $order->user_id=$request->user_id;
        $order->store_id=$request->store_id;
        $order->product_id=$request->product_id;
        $order->total=$request->total;
        $order->status="ACTIVO";

        $order->save();
        return view('/admin.order.index')->with('orders',Order::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('/admin.order.show')->with('orders',Order::all());

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('/admin.order.edit')->with('orders',Order::all());

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order=Order::find($id);
        $order->user_id=$request->user_id;
        $order->store_id=$request->store_id;
        $order->product_id=$request->product_id;
        $order->total=$request->total;
        //$store->status="ACTIVO";

        $order->save();
        return view('/admin.order.index')->with('orders', Order::all())
        ->with('mess','UPDATE');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order->delete();
        
        return view('/admin.order.index')->with('orders',Order::all())
        ->with('mess','UPDATE');
    }
}
