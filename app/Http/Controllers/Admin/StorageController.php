<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImportItem;
use App\Models\Ingredient;
use App\Models\IngredientType;
use App\Models\Unit;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingredient_types = IngredientType::get()->pluck('name', 'id');
        $units = Unit::get()->pluck('name_unit', 'id');
        $ingredients = Ingredient::get()->toArray();
        return view('admin/storage/count_import')->with(compact('ingredients','ingredient_types',"units"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //todo: Tạo phiếu nhập hàng
        $title="Thêm phiếu nhập kho";
        $import_item = new ImportItem();
        $message ="Thêm thành công!";

        if ($request->isMethod('post')) {
            $data = $request->all();

            $ruler=[
                'id'=>'required',
                'date_import'=>'required',
                'total_price'=>'required',
            ];
            $customMessages=[
                'id.required'=>"Bắt buộc nhập mã phiếu nhập",
                'date_import.required'=>"Bắt buộc nhập thời gian nhập",
                'total_price.required'=>'Bắt buộc nhập số tiền thanh toán',
            ];
            $this->validate($request, $ruler, $customMessages);

            $import_item->id =$data['id'];
            $import_item->date_import =$data['date_import'];
            $import_item->total_price =$data['total_price'];

            $import_item->save();
            return redirect('admin/storage/import_items')->with('success_message', $message );
        }
        return view('admin.storage.import_items')->with(compact('title','import_item'));

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
    public function show(Ingredient $ingredient)
    {
        //
        return view('admin.storage.import_items');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id=null)
    {
        $ingredient_types = IngredientType::get()->pluck('name', 'id');
        $units = Unit::get()->pluck('name_unit', 'id');
        if ($id =="")
        {
            $title="Thêm nguyên liệu";
            $ingredient = new Ingredient();
            $message ="Thêm thành công!";
        }
        else{
            $title="Sửa nguyên liệu";
            $ingredient = Ingredient::find($id);
            $message="Sửa thành công!";
        }
        if ($request->isMethod('post'))
        {
            $data = $request->all();
            $ruler=[
                'name_ingredient'=>'required',
                'price_ingredient'=>'required',
                'amount'=>'required',
            ];
            $customMessages=[
                'name_ingredient.required'=>"Bắt buộc nhập tên nguyên liệu",
                'price_ingredient.required'=>"Bắt buộc nhập giá nguyên liệu",
                'amount.required'=>'Bắt buộc chọn loại nguyên liệu',
            ];
            $this->validate($request, $ruler, $customMessages);

            $ingredient->name_ingredient=$data['name_ingredient'];
            $ingredient->price_ingredient=$data['price_ingredient'];
            $ingredient->amount=$data['amount'];
            $ingredient->type = isset($data['type']) ? (int)$data['type'] : null;
            $ingredient->unit= isset($data['unit']) ?  (int)$data['unit'] : null;

            $ingredient->save();
            return redirect('admin/storage/count_import')->with('success_message', $message );
        }
        return view('admin.storage.edit_ingredient')->with(compact('title','ingredient','ingredient_types','units'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingredient $ingredient,String $id )
    {
        $ingredient::where('id', $id)->delete();
        return redirect()->back()->with('success_message',"Xóa thành công");
    }
}
