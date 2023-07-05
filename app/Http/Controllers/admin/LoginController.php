<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Illuminate\Events\queueable;

class LoginController extends Controller
{
    //
    public function index(){
        return view('admin.login');
    }
    public function postlogin(Request $request){
        // xử lý login
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        if ($email == '3107manhhung02@gmail.com' && $password == 'hung123456') {
            // Tài khoản và mật khẩu khớp
            return redirect('/admin');
        } else {
            // Tài khoản và mật khẩu không khớp
            return redirect('/');
        }

        Session()->flash('error','Email hoặc Password không chính xác');
        return redirect()->back();
    }
}

