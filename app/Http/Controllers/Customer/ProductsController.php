<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $type = null)
    {
        $product_type = ProductType::get()->toArray();
        $products = Product::get()->toArray();
        if ($type =="Cà phê")
        {
          $title =" Cà Phê";

        }
        if ($type=="Nước ép"){
            $title="Nước Ép";

        }
        if ($type=="Bánh ngọt")
        {
            $title="Bánh ngọt";
        }
        if ($type=="")
        {
            $title="Nổi bật ";
        }

        return view("customer/menu/productdetail")->with(compact('products','title', "product_type"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $products = ProductType::get()->toArray();
        return view("customer/menu/product_list")->with(compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
