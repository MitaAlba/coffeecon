<?php

namespace App\Http\Controllers;
use App\Models\Size;
use App\Models\Product;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/admin.size.index')->with('sizes',Size::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin.size.index')->with('sizes',Size::all());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $size = new Size();
        $size->name=$request->name;
        $size->description=$request->description;
        $size->status="ACTIVO";

        $size->save();
        return view('/admin.size.index')->with('sizes',Size::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('/admin.size.show')->with('sizes', Size::find($id));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('/admin.size.edit')->with('sizes', Size::find($id));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $size =Size::find($id);

        $size->name=$request->name;
        $size->description=$request->description;
        $size->name=$request->name;
        $size->status=$request->status;



        $size->save();
        return view('/admin.size.index')->with('sizes',Size::all())
        ->with('mess','UPDATE');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $size =Product::find($id);
       // $size->status="INACTIVO";

       

        $size->delete();
        
        return view('/admin.size.index')->with('sizes',Size::all())
        ->with('mess','UPDATE');
    }
}

