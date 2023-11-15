<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
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

        // Initialize query
        $query = Product::query();

        // Apply condition based on title
        if ($type == "Cà phê") {
            $title = " Cà Phê";
            $query->where('type', 'Cà phê');
        } elseif ($type == "Nước ép") {
            $title = "Nước Ép";
            $query->where('type', 'Nước ép');
        } elseif ($type == "Bánh ngọt") {
            $title = "Bánh ngọt";
            $query->where('type', 'Bánh ngọt');
        } elseif ($type == "") {
            $title = "Nổi bật ";
        }

        // Get paginated results
        $products = $query->paginate(9);

        return view("customer/menu/productdetail")->with(compact('products', 'title', 'product_type'));
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
    public function show()
    {
//      $products = Product::get()->pluck('type');
        $products = ProductType::get()->pluck('name', 'id');

        return view("customer/menu/product_list")->with(compact( 'products'));
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
