<?php

namespace App\Http\Controllers;
use App\Models\Categorie;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/admin.category.index')->with('categories',Categorie::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin.category.index')->with('categories',Categorie::all());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorie = new Categorie();
        $categorie->name=$request->name;
        $categorie->description=$request->description;

        $categorie->save();
        return view('/admin.category.index')->with('categories',Categorie::all());
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('/admin.category.show')->with('categories', Categorie::find($id));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('/admin.category.edit')->with('categories', Categorie::find($id));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categorie = Categorie::find($id);
        $categorie->name=$request->name;
        $categorie->description=$request->description;

        $categorie->save();
        return view('/admin.category.index')->with('categories',Categorie::all())
        ->with('mess','UPDATE');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categorie = Categorie::find($id);
    
        $categorie->delete();
        
        return view('/admin.category.index')->with('categories',Categorie::all())
        ->with('mess','UPDATE');
    }
}
