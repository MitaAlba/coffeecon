<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(Product::all());
        return view('/admin.product.index')->with('products',Product::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('/admin.product.index')->with('products',Product::all());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->category_id=$request->category_id;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->image_1=$request->image_1;
        $product->image_2=$request->image_2;
        $product->image_3=$request->image_3;
        $product->price=$request->price;
        $product->size_id=$request->size_id;
        $product->status="ACTIVO";

        $product->save();
        return view('/admin.product.index')->with('products',Product::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('/admin.product.show')->with('products', Product::find($id));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // FUNCTION:Buscara el producto a cambiar a partir de el Id de este
        return view('/admin.product.edit')->with('products', Product::find($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product =Product::find($id);
        $product->category_id=$request->category_id;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->image_1=$request->image_1;
        $product->image_2=$request->image_2;
        $product->image_3=$request->image_3;
        $product->price=$request->price;
        $product->size_id=$request->size_id;
        //$product->status="ACTIVO";

        $product->save();
        return view('/admin.product.index')->with('products',Product::all())
        ->with('mess','UPDATE');
    }

    /**
     * Remove the specified resource from storage. 
     */
    public function destroy(string $id)
    {
        //FUNCTION: borrado logico cambiar estado a inactivo
        // $product =Product::find($id);
       
        // $product->status="INACTIVO";

        // $product->save();

        //borrado fisico
        $product =Product::find($id);
       

        $product->delete();
        
        return view('/admin.product.index')->with('products',Product::all())
        ->with('mess','UPDATE');
        
    }
}
