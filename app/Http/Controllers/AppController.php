<?php

namespace App\Http\Controllers;

use App\Car;
use App\Group;
use Illuminate\Http\Request;

use App\Http\Requests;

class AppController extends Controller
{
    /**
     * 手机APP端首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View 首页视图
     */
    public function index()
    {
        $cars = Car::all();
        return view('app.index', ['cars' => $cars]);
    }

    /**
     * 评分详情页
     * @param $car_id 车辆id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View 详情页视图
     */
    public function detail($car_id)
    {
        $groups = Group::with('missions')->get();
        return view('app.detail', ['groups' => $groups, 'car_id' => $car_id]);
    }
}
