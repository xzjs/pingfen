<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AppController extends Controller
{
    /**
     * 手机APP端首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View 首页视图
     */
    public function index(){
        return view('app.index');
    }
}
