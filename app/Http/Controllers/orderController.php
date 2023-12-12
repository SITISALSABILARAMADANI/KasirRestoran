<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Order $order)
    {
       $order = Order::all();
       return view('order.index',
       compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'nama' => 'required',
            'menu' => 'required',
            'minuman' => 'required',
            'meja' => 'required',
            'tanggal' => 'required',
        ]);

        $order = new order;
        $order->nama = $request->meja;
        $order->menu = $request->menu;
        $order->minuman = $request->minuman;
        $order->meja = $request->meja;
        $order->tanggal = $request->tanggal;
        $order->save();

        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        return view('order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        $order::all();
       return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, order $order)
    {
        $request->validate([
            'nama' => 'required',
            'menu' => 'required',
            'minuman' => 'required',
            'meja' => 'required',
            'tanggal' => 'required',
        ]);

        $order->update($request->all());
            
        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
       $order = order::where('id', $order->id)->delete();
       return redirect()->route('order.index');
    }
}