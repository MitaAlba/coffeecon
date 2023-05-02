<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Categorie;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(Product::all());
        return view('/admin.product.index')
        ->with('products',Product::all())
        ->with('categories',Categorie::all());
        //->with('sizes',Size::all())
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('/admin.product.index')
        ->with('products',Product::all())
        ->with('categories',Categorie::all());
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $product = new Product();
        $img_1="default_1.jpg";
        $img_2="default_2.jpg";
        $img_3="default_3.jpg";


        $product->category_id=$request->category_id;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->image_1=$img_1;
        $product->image_2=$img_2;
        $product->image_3=$img_3;
        $product->price=$request->price;
        $product->size_id=$request->size_id;
        $product->status="ACTIVO";

        $product->save();


        if($request->hasFile('image_1') && $request->file('image_1')->isValid()){
            $img_1=$product->id."_1_".$request->name.".".$request->image_1->extension();
            $ruta=$request->image_1->storeAs('public/products', $img_1);
        }
        


        if($request->hasFile('image_2') && $request->file('image_2')->isValid()){
            $img_2=$product->id."_2_".$request->name.".".$request->image_2->extension();
            $ruta=$request->image_2->storeAs('public/products', $img_2);
        }
        

        if($request->hasFile('image_3') && $request->file('image_3')->isValid()){
            $img_3=$product->id."_3_".$request->name.".".$request->image_3->extension();
            $ruta=$request->image_3->storeAs('public/products', $img_3);
        }

        $product->image_1=$img_1;
        $product->image_2=$img_2;
        $product->image_3=$img_3;
        $product->save();
        //dd($product);


        return view('/admin.product.index')
        ->with('products',Product::all())
        ->with('categories',Categorie::all());   
     }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('/admin.product.show')
        ->with('products', Product::find($id));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // FUNCTION:Buscara el producto a cambiar a partir de el Id de este
        return view('/admin.product.edit')
        ->with('products', Product::find($id))
        ->with('categories',Categorie::all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product =Product::find($id);
        $img_1=$product->image_1;
        $img_2=$product->image_2;
        $img_3=$product->image_3;
        $product->category_id=$request->category_id;
        $product->name=$request->name;
        $product->description=$request->description;
        
        $product->price=$request->price;
        $product->size_id=$request->size_id;
        //Para editar un status como INACTIVO tambien
        //Si queda tiempo agregar un SELECT
         $product->status=$request->status;

        //$product->status="ACTIVO";
        if($request->hasFile('image_1') && $request->file('image_1')->isValid()){
            $img_1=$product->id."_1_".$request->name.".".$request->image_1->extension();
            $ruta=$request->image_1->storeAs('public/products', $img_1);
            Storage::delete('public/products/'.$img_1);
        }

        if($request->hasFile('image_2') && $request->file('image_2')->isValid()){
            $img_2=$product->id."_2_".$request->name.".".$request->image_2->extension();
            $ruta=$request->image_2->storeAs('public/products', $img_2);
            Storage::delete('public/products/'.$img_2);
        }
        
        if($request->hasFile('image_3') && $request->file('image_3')->isValid()){
            $img_3=$product->id."_3_".$request->name.".".$request->image_3->extension();
            $ruta=$request->image_3->storeAs('public/products', $img_3);
            Storage::delete('public/products/'.$img_3);
        }

        $product->image_1=$img_1;
        $product->image_2=$img_2;
        $product->image_3=$img_3;

        $product->save();
        return view('/admin.product.index')
        ->with('products',Product::all())
        ->with('categories',Categorie::all());

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
        //$product->status="INACTIVO";
        // Storage::delete('public/products/'.$product->image_1);
        // Storage::delete('public/products/'.$product->image_2);
        // Storage::delete('public/products/'.$product->image_3);


        $product->delete();
        
        return view('/admin.product.index')
        ->with('products',Product::all())
        ->with('categories',Categorie::all());
        
    }
}
