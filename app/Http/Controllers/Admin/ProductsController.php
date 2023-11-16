<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ComponentProduct;
use App\Models\Ingredient;
use App\Models\IngredientType;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $product = Product::get()->toArray();
        return view('admin/products/count')->with(compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ingredients = Ingredient::get()->pluck('name_ingredient', 'id');

        $product = Product::get()->pluck('name_product', 'id');
        return view('admin.products.product_formula')->with(compact('product', 'ingredients'));
    }

    public function components(Request $request){
        $ingredients = Ingredient::get()->pluck('name_ingredient', 'id');
        $productId = $request->input('productId');
        $product = Product::get()->pluck('name_product', 'id');
        $components = ComponentProduct::where('product_id', $productId)->get();

        return view('admin.products.product_formula')->with(compact('productId','product', 'components', 'ingredients'));
    }

    public function  insertIngredients(Request $request)
    {
        $ingredients = $request->input('ingredients');
        foreach ($ingredients as $ingredient) {
            ComponentProduct::create([
                'product_id' => $ingredient['product_id'],
                'ingredient_id' => $ingredient['ingredient_id'],
                'amount' => $ingredient['amount'],
            ]);
        }

        return response()->json(['success' => true]);
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
    public function edit( Request $request, string $id=null)
    {
        $product_types = ProductType::get()->pluck('name', 'id');
        if ($id ==""){
            $title="Thêm sản phẩm";
            $product = new Product();
            $message ="Thêm thành công!";
        }
        else{
            $title="Sửa sản phẩm";
            $product = Product::find($id);
            $message="Sửa thành công!";
        }
        if ($request->isMethod('post'))
        {
            $data = $request->all();
            $ruler=[
                'name_product'=>'required',
                'price_product'=>'required',
                'type'=>'required',
            ];
            $customMessages=[
                'name_product.required'=>"Bắt buộc nhập tên sản phẩm",
                'price_product.required'=>"Bắt buộc nhập giá sản phẩm",
                'type.required'=>'Bắt buộc nhập loại sản phẩm',
            ];
            $this->validate($request, $ruler, $customMessages);

            $product->name_product=$data['name_product'];
            $product->price_product=$data['price_product'];
            $product->type=$data['type'];
            $product->image_product= $data['image_product'];
            $product->description_product=$data['description_product'];
            $product->save();
            return redirect('admin/product/count')->with('success_message', $message);
        }
        return view('admin.products.add_edit_product')->with(compact('title','product','product_types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product,string $id)
    {
        $product::where('id', $id)->delete();
        return redirect()->back()->with('success_message',"Xóa thành công");
    }

}
