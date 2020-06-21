<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=DB::table('categories')
        ->join('products','products.category_id','category.id')
        ->get();
        return view('products/index',[
            'products'=>$products
        ]
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::all();
        return view('products/create',[
            'categories'=>$categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'category_id' => 'required',
            'product_name' => 'required',
            'unit_price' => 'required',
        ]);
        $product = new Product();
        $product->category_id = $request -> category_id;
        $product->product_name = $request -> product_name;
        $product->unit_price = $request -> unit_price;
        $product->save();
        return redirect('product');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categories=Category::all();
        $product = Product::find($product->id);
        return view('products/edit',[
          'product' => $product,
          'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $request->validate([
            'category_id' => 'required',
            'product_name' => 'required',
            'unit_price' => 'required',
        ]); 
        $product->category_id = $request -> category_id;
        $product->product_name = $request -> product_name;
        $product->unit_price = $request -> unit_price;
        $product->save();
        return redirect('products');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product=product::find($product->id);
        $product->delete();
        return redirect('products');
    }
}
