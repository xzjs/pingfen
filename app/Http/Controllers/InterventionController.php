<?php

namespace App\Http\Controllers;

use App\Intervention;
use App\Intervition;
use App\Score;
use Illuminate\Http\Request;

use App\Http\Requests;
use League\Flysystem\Exception;

class InterventionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * 添加干预信息
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $intervention = new Intervention();
            $intervention->type = $request->type;
            $t = time();
            $intervention->time = $t;
            $intervention->group_id = $request->group_id;
            $intervention->car_id = $request->car_id;
            $intervention->save();
            if ($request->type == 1) {
                $i = $intervention->where('car_id', $request->car_id)->where('group_id', $request->group_id)->first();
                $score = new Score();
                $s = $score->where('car_id', $request->car_id)->where('group_id', $request->group_id)->first();
                $delete_score = ($i->time - $t > 20 * 60) ? 150 : 15;
                if ($s) {
                    $s->score -=$delete_score;
                } else {
                    $score->car_id = $request->car_id;
                    $score->group_id = $request->group_id;
                    $score->score = $delete_score;
                    $score->save();
                }
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
}
