<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    /****************** 后台管理员相关 *********************/
    //后台登录视图
    public function loginView()
    {
        return view('admin.login');
    }

    //登录操作
    public function opLogin()
    {

    }
}
