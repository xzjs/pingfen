<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Group;
use App\Mission;
use App\Score;
use Illuminate\Http\Request;

use App\Http\Requests;
use League\Flysystem\Exception;
use Symfony\Component\HttpKernel\HttpCache\Store;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exam.create');
    }

    /**
     * 存储评分情况
     * @param Request $request 表单
     * @return int|string 成功返回1,不成功返回错误信息
     */
    public function store(Request $request)
    {
        try {
            $exam = new Exam();
            $exam->car_id = $request->car_id;
            $exam->mission_id = $request->mission_id;
            $t = time();
            $exam->time = time();
            $exam->is_get = 1;
            //TODO 这里还得添加获取经纬度的方法
            $exam->lat = 0;
            $exam->lon = 0;
            $result = $exam->save();
            $score = new Score();
            $mission=new Mission();
            $m=$mission->find($request->mission_id);
            $s = $score->where('car_id', $request->car_id)->where('group_id', $m->group_id)->get();
            $mission = new Mission();
            $m = $mission->find($request->mission_id);
            if (count($s)) {
                $s->score +=$m->point;
            } else {
                $score->car_id = $request->car_id;
                $score->group_id = $request->group_id;
                $score->score = $m->point;
                $score->save();
            }
            return 1;
        } catch (Exception $e) {
            return $e->getMessage();
        }
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
        $exam = Exam::find($id);
        $exam->car_id = $request->car_id;
        $exam->mission_id = $request->mission_id;
        $exam->time = time();
        $exam->is_get = $request->is_get;
        //TODO 这里还得添加获取经纬度的方法
        $exam->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exam = Exam::find($id);
        $exam->delete();
    }

    /**
     * 获取评分情况
     * @param $car_id 车辆id
     * @param $time 客户端时间
     * @return string 返回的json
     */
    public function get_message($car_id, $time)
    {
        $exam = Exam::with('mission', 'car')->where('car_id', $car_id)->where('time', '>', $time)->get();
        return json_encode($exam);
    }
}
