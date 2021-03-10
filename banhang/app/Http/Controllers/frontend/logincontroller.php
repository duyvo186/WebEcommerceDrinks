<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Đăng Nhập',
            'cart' => session('giohang')

        ];
        return view('frontend.login', $data);
    }

    //
}