<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masakan;

class MasakanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $masakan = Masakan::all();
       return view('masakan.index',
       compact('masakan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('masakan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'menu' => 'required',
            'harga' => 'required',
        ]);

        $masakan = new masakan;
        $masakan->menu = $request->menu;
        $masakan->harga = $request->harga;
        $masakan->save();

        return redirect()->route('masakan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(masakan $masakan)
    {
        return view('masakan.show', compact('masakan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(masakan $masakan)
    {
        $masakan::all();
       return view('masakan.edit', compact('masakan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, masakan $masakan)
    {
        $request->validate([
            'menu' => 'required',
            'harga' => 'required',
        ]);

        $masakan->update($request->all());
            
        return redirect()->route('masakan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(masakan $masakan)
    {
       $masakan = masakan::where('id', $masakan->id)->delete();
       return redirect()->route('masakan.index');
    }
}