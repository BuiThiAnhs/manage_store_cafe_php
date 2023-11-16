<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems = Cart::content();
        $total =Cart::total();
        $subtotal= Cart::subtotal();
        return view('customer.cart.cart')->with(compact('cartItems', 'total','subtotal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
//        // Validate the request
//        $request->validate([
//            'id' => 'required|integer', // Assuming 'id' is the product ID
//            'name_product' => 'required|string',
//            'price_product' => 'required|numeric',
//            // Add other validation rules as needed
//        ]);
//        // Add the product to the cart
//        if ($request->ajax())
//        {
//            $product = Product::find($request->productID);
//            $response['cart']= Cart::add([
//                'id' => $product->id,
//                'name_product' => $product->name_product,
//                'price_product' => $product->price_product,
//                'image_product' =>$product->image_product
//                // Add other product details as needed
//            ]);
//            $response['amount']= Cart::amount();
//            $response['total'] = Cart::total();
//            return $response;
//        }
//        return redirect('customer/cart/cart');
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
        //
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
    public function addCart(Request $request)
    {
        if ($request->ajax())
        {
            $product = Product::find($request->productID);

            if ($product) {
                $response['cart'] = Cart::add([
//                    'id' => $product->id,
                    'name' => $product->name_product,
                    'price' => $product->price_product,
                    'qty' => 1, // Số lượng ban đầu
                ]);
                $response['total'] = Cart::total();

                return $response;
            } else {
                // Trả về thông báo lỗi hoặc xử lý lỗi tương ứng
                return response()->json(['error' => 'Product not found'], 404);
            }
        }
        return back();
    }
}
