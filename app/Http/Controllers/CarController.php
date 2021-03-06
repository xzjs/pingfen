<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

use App\Http\Requests;

class CarController extends Controller
{
    /**
     * 获取所有车辆的信息
     * @return string 车辆信息的json
     */
    public function index()
    {
        $cars=Car::all();
        return json_encode($cars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Car();
        $car->name = $request->name;
        $car->description = $request->description;
        $car->v2x_id = $request->v2x_id;
        $car->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        $car->name = $request->name;
        $car->description = $request->description;
        $car->v2x_id = $request->v2x_id;
        $car->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
    }

    /**
     * 根据车名获取车辆的信息
     * @param Request $request
     * @return string
     */
    public function get_car_id(Request $request)
    {
        $car = new Car();
        $id = $car->where('name', $request->name)->first()->value('id');
        return $id;
    }
}
