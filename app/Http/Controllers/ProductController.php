<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index')
                    ->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $p = new Product;
        $p->name = $request->pname;
        $p->description = $request->pdescription;
        $p->price = $request->pprice;
        $p->stock = $request->pstock;

        $path = $request->pphoto->store('product','public');
        $p->photo = $path;
        $p->save();


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //dd($id);
        $p = Product::find($id);
        return view('product.edit')->with('product',$p);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request);
        $p = Product::find($id);
        $p->name = $request->pname;
        $p->description = $request->pdescription;
        $p->price = $request->pprice;
        $p->stock = $request->pstock;
        

        if($request->pphoto){
            $path = $request->pphoto->store('product','public');
            $p->photo = $path;
        }
        $p->save();

        return redirect()->route('product.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //dd($id);
        // $p = Product::find($id);
        // $p->delete();

        Product::destroy($id);

        return redirect()->route('product.index');
    }
}
