<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('groups')->delete();
        
        \DB::table('groups')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => '任务启动',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => '行人检测与让行',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => '交叉路口通行',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => '汇入交通流',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => '施工路段行驶',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => '换道超车',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => '无GPS信号隧道通行',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => '雨雾天气行驶',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => '任务终点停车',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => '任务启动',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => '高速匝道通行',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => '执行 U-TURN 掉头',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => '通过收费站',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => '障碍车检测',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => '任务终点停车',
            ),
        ));
        
        
    }
}
