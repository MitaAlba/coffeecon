<?php

namespace App\Http\Controllers;
use App\Models\Store;


use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/admin.store.index')->with('stores',Store::all());

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin.store.index')->with('stores',Store::all());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $store=new Store();
        $store->name=$request->name;
        $store->address=$request->address;
        $store->schedule=$request->schedule;
        $store->status="ACTIVO";

        $store->save();
        return view('/admin.store.index')->with('stores',Store::all());


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('/admin.store.show')->with('stores',Store::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('/admin.store.edit')->with('stores',Store::find($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $store=Store::find($id);
        $store->name=$request->name;
        $store->address=$request->address;
        $store->schedule=$request->schedule;
        //$store->status="ACTIVO";

        //ESTATUS INDEPENDIENTE DE BORRADO
        $store->status=$request->status;


        $store->save();
        return view('/admin.store.index')->with('stores',Store::all())
        ->with('mess','UPDATE');;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $store =Store::find($id);
        $store->delete();
        //$store->status="INACTIVO";

        // $store->delete();
        
        // return view('/admin.store.index')->with('stores',Store::all())
        // ->with('mess','UPDATE');

        //$store->save();
        
        return view('/admin.store.index')
        ->with('stores',Store::all());
    }
}
