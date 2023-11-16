<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\CouponTable;
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
        $carts = Cart::content();
        $total =Cart::total();
//        $subtotal= Cart::subtotal();
//        dd(Cart::content());
        return view('customer.cart.cart')->with(compact('carts', 'total'));
    }
    public function destroy(Request $request ,$rowId)
    {
        if ($request->ajax()){
           $reponse['cart'] =Cart::remove($request->rowId);
           $reponse['total'] = Cart:: total();
           return $reponse;
        }

    }
    public function addCart(Request $request)
    {
        if ($request->ajax())
        {
            $product = Product::find($request->productID);

            if ($product) {
                $response['cart'] = Cart::add([
                    'id' => $product->id,
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
    public function checkTable(){
        $availableTable =CouponTable::where('status','1')->count();
        if ($availableTable >0)
        {
            $response = CouponTable::where('status', '1')->orderBy('id', 'asc')->first('id');
            return "Bàn của bạn là :" .$response;
        }
        else{
            return " Hết bàn ";
        }
    }
    public function checkCoupon(){

    }
    public function addCoupon(Request $request)
    {
        if ($request->ajax())
        {
            $coupon =Cart::find($request->id);

            if ($coupon) {
            $response['coupon']=   Coupon::add(['id'=>$coupon->id,'name'=>$coupon->name, 'qty'=>$coupon->qty, 'price_total'=>$coupon->total]);
                return $response;
            }
        }
        return back();
    }
    public function updateTableStatus($id) {
        $table = CouponTable::find($id);

        if ($table) {
            $table->status = true; // Chuyển trạng thái của bàn thành 0
            $table->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }
}
