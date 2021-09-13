<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $updatemode = false;

    public function index()
    {
        $product_category_data = $this->fetch_product_category();
        return view('products.category.index',[
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
            'product_category_name'=>'required|max:10'
        ]);

        $resp_data = ProductCategory::create($request->except('_token'));

        return redirect(route('product-category.index'))->with('message','Product Category'.' '.$resp_data['product_category_name'].' '.'Added Successfully');
        // return $resp_data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        $product_category_data = $this->fetch_product_category();
        $this->updatemode = true;
        return view('products.category.index',[
            'product_category_data'=>$product_category_data,
            'productCategory'=>$productCategory,
            'updatemode'=>$this->updatemode,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        // dd($productCategory);
        $productCategory->update($request->except('_token'));
        return redirect(route('product-category.index'))->with('info','Product Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory)
    {
        // dd($productCategory);
        $productCategory->delete();
        return redirect(route('product-category.index'))->with('warning','Product Category Deleted');

    }

    private function fetch_product_category()
    {
        $product_category_data = ProductCategory::where('product_category_status',1)->get();
        return $product_category_data;
    }
}
