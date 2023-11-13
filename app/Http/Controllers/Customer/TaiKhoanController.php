<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaiKhoanController extends Controller
{
//    public function  login(Request $request){
//        if ($request->isMethod('post'))
//        {
//            $data=$request->all();
//            if (Auth::guard('admin')->attempt(['tentaikhoan'=>$data['email'],'matkhau'=>$data['pass']])){
//                return redirect('admin.dashboard');
//            }
//            else{
//                return redirect()->back()->with('error_massage',"Invalid Email or Password");
//            }
//        }
//        return view('customer.account.login');
//    }
    public function register()
    {
        return view('customer.account.register');
    }
    public function logout()
    {
        Auth::logout();
        return back();
    }
}
