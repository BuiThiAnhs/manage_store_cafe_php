<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Admintor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
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
                'password.min' => 'Password must be at least 6 characters long',
                'password.max' => 'Password cannot be more than 20 characters long'
            ];

//            $this->validate($request, $rules, $customMessages);

            if (Auth::guard('customer')->attempt(['email' => $data['email'], 'password' => $data['pass']])){
                //todo: Lưu trữ thong tin mat khau va email với cookies
                if (isset($data['remember']) && !empty($data['remember'])){
                    setcookie("email", $data['email'], time()+3600);
                    setcookie("password", $data['password'], time()+3600);
                }
                else{
                    setcookie("email","");
                    setcookie("password","");
                }

                return redirect('/home');
            }
            else{
//                return redirect()->back()->with('error_message', 'Invalid Email or Password');
                return redirect()->back();
            }
        }
        return view('customer.account.login');
    }
    public function register(Request $request, string $id=null)
    {
        $admintor = new Admintor();
        if ($request->isMethod('post'))
        {
            $data = $request->all();
            $ruler=[
                'email' => 'required|email|max:255',
                'password' => 'required|min:6|max:20' // assuming minimum password length is 6 characters
            ];
            $customMessages=[
                'email.required' => 'Email is required',
                'email.email' => 'Valid Email is required',
                'password.required' => 'Password is required',
                'password.min' => 'Password must be at least 6 characters long',
                'password.max' => 'Password cannot be more than 20 characters long',
            ];
            $this->validate($request, $ruler, $customMessages);

            $password = Hash::make($data['password']);
            $admintor->email=$data['email'];
            $admintor->password=$password;
            $admintor->type=2;
            $admintor->fullname=$data['fullname'];
            $admintor->dayOfbirth=$data['dayOfbirth'];
            $admintor->phone=$data['phone'];
            $admintor->address=$data['address'];
            $admintor->save();
            return redirect('/login');
        }
        return view('customer.account.register');
    }
    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect('/logout');
    }
}
