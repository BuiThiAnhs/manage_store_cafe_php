<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admintor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class AccountController extends Controller
{

    //todo: show_account
    public function count_account()
    {
        return view('admin.account.count_account');
    }

    public function login(Request $request){
        if ($request->isMethod('post'))
        {
            $data = $request->all();
//            echo "<pre>"; print_r($data);die;
            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required|min:6|max:20' // assuming minimum password length is 6 characters
            ];

            $customMessages = [
                'email.required' => 'Email is required',
                'email.email' => 'Valid Email is required',
                'password.required' => 'Password is required',
                'password.required' => 'Password is required',
                'password.min' => 'Password must be at least 6 characters long',
                'password.max' => 'Password cannot be more than 20 characters long'
            ];

           $this->validate($request, $rules, $customMessages);

            if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])){
                //todo: Lưu trữ thong tin mat khau va email với cookies
                if (isset($data['remember']) && !empty($data['remember'])){
                    setcookie("email", $data['email'], time()+3600);
                    setcookie("password", $data['password'], time()+3600);
                }
                else{
                    setcookie("email","");
                    setcookie("password","");
                }

                return redirect('admin/dashboard');
            }
            else{
//                return redirect()->back()->with('error_message', 'Invalid Email or Password');
                return redirect('admin/dashboard');
            }
        }
        return view('admin.account.login');
    }

    //todo: update_account
    public function update_account(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $data = $request->all();
            if (Hash::check($data['current_password'],Auth::guard('admin')->user()->password)){
            //Checking if new password and cofirm password are matching
                if ($data['new_password'] == $data['comfirm_password'])
                {
                //update password
                    Admintor::where('id', Auth::guard('admin')->user()->id)->update(['password', bcrypt($data['new_password'])]);
                    return redirect()->back()->with('success_message','Cập nhật thành công');
                }
                else
                {
                    return redirect()->back()->with('error_message','Mật khẩu mới và Nhập lại mật khẩu không khớp nhau');
                }
            }
            else {
                return redirect()->back()->with('error_message','Mật khẩu giống mật khẩu hiện tại');
            }
        }
        return view('admin.account.update_account');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/logout');
    }
    public function check_update_account(Request $request)
    {
        $data = $request->all();
        if (Hash::check($data['current_password'],Auth::guard('admin')->user()->password)){
            return "true";
        }
        else{
            return "false";
        }
    }
}
