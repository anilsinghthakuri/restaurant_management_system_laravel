<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $updatemode = false;
    public function index()
    {
        $product_data = $this->fetch_product();
        $product_category_data = $this->fetch_product_category();
        return view('products.product.index',[
            'product_data'=>$product_data,
            'product_category_data'=>$product_category_data,
            'updatemode'=>$this->updatemode,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'product_name'=>'required|unique:products,product_name|max:20',
            'product_price'=>'required',
        ]);
        Product::create($request->except('_token'));
        return redirect(route('product.index'))->with('message','Product Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product_data = $this->fetch_product();
        $product_category_data = $this->fetch_product_category();
        $this->updatemode = true;
        return view('products.product.index',[
            'product_data'=>$product_data,
            'product'=>$product,
            'product_category_data'=>$product_category_data,
            'updatemode'=>$this->updatemode,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // dd($request->all());
        $product->update($request->except('_token'));
        return redirect(route('product.index'))->with('info','Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    private function fetch_product()
    {
        $product_data = Product::all();
        return $product_data;
    }

    private function fetch_product_category()
    {
        $product_category_data = ProductCategory::all();
        return $product_category_data;
    }
}
