<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//check login

class UserController extends Controller
{
    //
    public function loginAdmin()
    {
        return view('login');
    }

    public function checkLoginAdmin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:3|max:32'
        ], [
            'email.required'    => 'Bạn chưa nhập tên đăng nhập',

            'password.required'  => 'Bạn chưa nhập mật khẩu',
            'password.min'      => 'Mật khẩu phải lớn hơn 3 ký tự',
            'password.max'      => 'Mật khẩu phải nhỏ hơn 32 ký tự'
        ]);

        $data=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($data)){
            //true
            return redirect()->route('admin_domain_list');
        }else{
            //false
            return redirect('login')->with('err', 'Tên đăng nhập hoặc mật khẩu không đúng.');
        }

    }

}
