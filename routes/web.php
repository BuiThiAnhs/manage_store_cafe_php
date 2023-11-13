<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[\App\Http\Controllers\Customer\TrangChuController::class,'show']);
//Route::get('/detailproduct', function (){
//    return view('customer/menu/productdetail');
//});

//todo:account
//Route::prefix('account')->group(function (){
//    Route::get('/', [\App\Http\Controllers\Customer\TaiKhoanController::class,'login']);
//    Route::post('/', [\App\Http\Controllers\Customer\TaiKhoanController::class,'checkLogin']);
//
//    Route::get('/register',[\App\Http\Controllers\Customer\TaiKhoanController::class,'register']);
//});
//todo: Customer
Route::prefix('/')->group(function (){
    Route::match(['get','post'],'/register',[\App\Http\Controllers\Customer\CustomerController::class,'register']);
    Route::get('/logout',[\App\Http\Controllers\Customer\CustomerController::class,'logout']);
    Route::match(['get','post'],'/login',[\App\Http\Controllers\Customer\CustomerController::class,'login']);
    Route::prefix('menu')->group(function (){
        Route::get('/detailproduct{id}', [\App\Http\Controllers\Customer\SanPhamController::class,'show']);
        Route::get('/', function (){
            return view('customer/menu/product_list');
        });

    });
    Route::get('/home',[\App\Http\Controllers\Customer\TrangChuController::class,'show']);
    Route::get('/about',[\App\Http\Controllers\Customer\VeChungToiController::class,'show']);
    Route::get('/cart', [\App\Http\Controllers\Customer\GioHangController::class, 'show']);
});
//todo: Admin



Route::prefix('/admin')->group(function ()
{
    Route::match(['get','post'],'/login',[\App\Http\Controllers\Admin\AccountController::class,'login']);
    Route::group(['middleware'=>['admin']], function (){
        Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class,'show']);
        Route::get('/logout', [\App\Http\Controllers\Admin\AccountController::class,'logout']);
        Route::get('/cms',[\App\Http\Controllers\Admin\CmsController::class,'index']);
        Route::post('update_csm_status',[\App\Http\Controllers\Admin\CmsController::class,'update']);


        Route::match(['get','post'],'/add_edit_cms/{id?}',[\App\Http\Controllers\Admin\CmsController::class,'edit']);
        Route::get('/delete_cms/{id}',[\App\Http\Controllers\Admin\CmsController::class,'destroy']);


        Route::prefix('delivery')->group(function (){
            Route::get('/count_product', [\App\Http\Controllers\Admin\DeliveryController::class,'count_product']);
            Route::get('/count_item', [\App\Http\Controllers\Admin\DeliveryController::class,'count_item']);
            Route::get('/count_table', [\App\Http\Controllers\Admin\DeliveryController::class,'count_table']);
        });
        Route::prefix('product')->group(function (){
            Route::get('/count', [\App\Http\Controllers\Admin\ProductsController::class,'index']);
            Route::get('/product_formula', [\App\Http\Controllers\Admin\ProductsController::class,'create']);
            Route::post('/product_formula', [\App\Http\Controllers\Admin\ProductsController::class,'store']);

            Route::match(['get','post'],'/add_edit_product/{id?}',[\App\Http\Controllers\Admin\ProductsController::class,'edit']);

        });
        Route::get('/delete_product/{id}',[\App\Http\Controllers\Admin\ProductsController::class,'destroy']);

        Route::prefix('storage')->group(function (){
            Route::get('/count_import', [\App\Http\Controllers\Admin\StorageController::class,'index']);
            Route::match(['get','post'],'/add_edit_ingredient/{id?}',[\App\Http\Controllers\Admin\StorageController::class,'edit']);
            Route::match(['get','post'],'/import_items',[\App\Http\Controllers\Admin\StorageController::class,'create']);
        });
        Route::get('/delete_ingredient/{id}',[\App\Http\Controllers\Admin\StorageController::class,'destroy']);

        Route::prefix('/account')->group(function (){
            Route::match(['get','post'],'/update_account',[\App\Http\Controllers\Admin\AccountController::class,'update_account']);
            Route::post('/check_update_account',[\App\Http\Controllers\Admin\AccountController::class,'check_update_account']);
            Route::get("/count_account",[\App\Http\Controllers\Admin\AccountController::class,'count_account']);
        });

    });
});
