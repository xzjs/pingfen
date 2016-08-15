<?php

use Illuminate\Database\Seeder;

class MissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('missions')->delete();
        
        \DB::table('missions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '识别绿灯起步',
                'description' => '',
                'point' => 10,
                'group' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '无碰撞行驶',
                'description' => '',
                'point' => 10,
                'group' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '减速慢行',
                'description' => '',
                'point' => 20,
                'group' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '停车让行',
                'description' => '',
                'point' => 20,
                'group' => 3,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '碰撞假人',
                'description' => '',
                'point' => -100,
                'group' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '绕行',
                'description' => '',
                'point' => -20,
                'group' => 3,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => '遇到红灯排队停车',
                'description' => '',
                'point' => 20,
                'group' => 4,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => '变绿灯后跟随行驶',
                'description' => NULL,
                'point' => 20,
                'group' => 4,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => '30秒之后不起步',
                'description' => NULL,
                'point' => -20,
                'group' => 4,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => '识别到路口经过的车辆并保持车距和车速行驶',
                'description' => NULL,
                'point' => 20,
                'group' => 5,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => '合理并入车流继续行驶',
                'description' => NULL,
                'point' => 20,
                'group' => 5,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => '碰撞其他车辆',
                'description' => NULL,
                'point' => -100,
                'group' => 5,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => '车辆进入施工路段后减速慢行',
                'description' => NULL,
                'point' => 15,
                'group' => 6,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => '无碰撞通过施工路段',
                'description' => NULL,
                'point' => 15,
                'group' => 6,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => '碰到一个锥桶（引导牌）',
                'description' => NULL,
                'point' => -5,
                'group' => 6,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => '碰到一个锥桶（引导牌）',
                'description' => NULL,
                'point' => -5,
                'group' => 6,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => '碰到一个锥桶（引导牌）',
                'description' => NULL,
                'point' => -5,
                'group' => 6,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => '碰到一个锥桶（引导牌）',
                'description' => NULL,
                'point' => -5,
                'group' => 6,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => '碰到一个锥桶（引导牌）',
                'description' => NULL,
                'point' => -5,
                'group' => 6,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => '碰到一个锥桶（引导牌）',
                'description' => NULL,
                'point' => -5,
                'group' => 6,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => '正确执行换道',
                'description' => NULL,
                'point' => 15,
                'group' => 7,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => '正确执行超车',
                'description' => NULL,
                'point' => 15,
                'group' => 7,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => '碰撞车辆',
                'description' => NULL,
                'point' => -100,
                'group' => 7,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => '正确进入隧道通行',
                'description' => NULL,
                'point' => 15,
                'group' => 8,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => '无碰撞通过路段',
                'description' => NULL,
                'point' => 15,
                'group' => 8,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => '碰路沿',
                'description' => NULL,
                'point' => -15,
                'group' => 8,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => '碰路沿',
                'description' => NULL,
                'point' => -15,
                'group' => 8,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => '正确进入雨雾路段通行',
                'description' => NULL,
                'point' => 20,
                'group' => 9,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => '无障碍通过该路段',
                'description' => NULL,
                'point' => 20,
                'group' => 9,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => '碰路沿',
                'description' => NULL,
                'point' => -20,
                'group' => 9,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => '碰路沿',
                'description' => NULL,
                'point' => -20,
                'group' => 9,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => '终点停车成功',
                'description' => NULL,
                'point' => 15,
                'group' => 10,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => '停车入位',
                'description' => NULL,
                'point' => 15,
                'group' => 10,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => '在3分钟内启动',
                'description' => NULL,
                'point' => 5,
                'group' => 11,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => '无碰撞行为',
                'description' => NULL,
                'point' => 10,
                'group' => 11,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => '通过匝道成功',
                'description' => NULL,
                'point' => 20,
                'group' => 12,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => '无碰撞行为',
                'description' => NULL,
                'point' => 10,
                'group' => 12,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => '执行 U-TURN 掉头成功',
                'description' => NULL,
                'point' => 10,
                'group' => 13,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => '无碰撞行为',
                'description' => NULL,
                'point' => 10,
                'group' => 13,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => '驶过收费站成功',
                'description' => NULL,
                'point' => 20,
                'group' => 14,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => '无碰撞行为',
                'description' => NULL,
                'point' => 20,
                'group' => 14,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => '是否检测到障碍车',
                'description' => NULL,
                'point' => 15,
                'group' => 15,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => '是否正确执行换道',
                'description' => NULL,
                'point' => 15,
                'group' => 15,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => '碰撞车辆',
                'description' => NULL,
                'point' => -100,
                'group' => 15,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => '在停止线内停车',
                'description' => NULL,
                'point' => 10,
                'group' => 16,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => '减速、无碰撞行为',
                'description' => NULL,
                'point' => 5,
                'group' => 16,
            ),
        ));
        
        
    }
}
