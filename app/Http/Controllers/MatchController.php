<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Intervention;
use App\Match;
use App\Mission;
use App\Score;
use Illuminate\Http\Request;

use App\Http\Requests;
use League\Flysystem\Exception;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Match::with('car')->get();
        return json_encode($matches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        try{
//            $match=new Match();
//            $match->car_id=$request->car_id;
//            $match->time=
//        }catch (Exception $e){
//            return $e->getMessage();
//        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * 开始比赛
     * @param $car_id 车辆id
     * @return string 返回的异常
     */
    public function start($car_id)
    {
        try {
            $deleteInterventions = Intervention::where('car_id', $car_id)->delete();
            $deleteExam = Exam::where('car_id', $car_id)->delete();
            $deleteMatch = Match::where('car_id', $car_id)->delete();
            $deleteScore=Score::where('car_id',$car_id)->delete();
            $match = new Match();
            $match->car_id = $car_id;
            $match->start_time = time();
            $match->save();
            return 1;
        } catch (Exception $ex) {
            return $ex->getMessage();
        }

    }

    /**
     * 结束比赛
     * @param $car_id 车辆id
     * @return int|string 1或异常
     */
    public function end($car_id)
    {
        try {
            $match = new Match();
            $m = $match->where('car_id', $car_id)->first();
            $score = $this->get_exam_score($car_id) - $this->get_intervention_score($car_id);
            $m->score = $score;
            $m->end_time=time();
            $m->save();
            return 1;
        } catch (Exception $e) {
            return $e->getMessage();
        }

    }

    /**
     * 获取任务点得分
     * @param $car_id 车辆id
     * @return int 得分
     */
    public function get_exam_score($car_id)
    {
        $score = new Score();
        $ss = $score->where('car_id', $car_id)->get();
        $sum = 0;
        foreach ($ss as $s) {
            $sum += $s->score >= 0 ? $s->score : 0;
        }
        return $sum;
    }

    /**
     * 获取干预扣分
     * @param $car_id 车辆id
     * @return float 得分
     */
    public function get_intervention_score($car_id)
    {
        $int = new Intervention();
        $is = $int->where('car_id', $car_id)->get();
        $sum = count($is) / 2 * 15;
        return $sum;
    }

    public function get_result($time)
    {
        $results = Match::with('car')->where('updated_at', '>', $time)->get();
        return json_encode($results);
    }
}
