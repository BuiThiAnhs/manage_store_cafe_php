<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    //todo: count_item
    public function count_item()
    {
        return view('admin.delivery.count_item');
    }
    //todo: count_product
    public function count_product()
    {
        return view('admin.delivery.count_products');
    }
    //todo: count_table
    public function count_table()
    {
        return view('admin.delivery.count_table');
    }
}
