<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cars')->delete();
        
        \DB::table('cars')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '西安交大',
                'description' => '',
                'v2x_id' => 1,
            ),
        ));
        \DB::table('cars')->insert(array (
            0 =>
                array (
                    'id' => 2,
                    'name' => '清华大学',
                    'description' => '',
                    'v2x_id' => 1,
                ),
        ));
        \DB::table('cars')->insert(array (
            0 =>
                array (
                    'id' => 3,
                    'name' => '同济大学',
                    'description' => '',
                    'v2x_id' => 1,
                ),
        ));
        \DB::table('cars')->insert(array (
            0 =>
                array (
                    'id' => 4,
                    'name' => '北京大学',
                    'description' => '',
                    'v2x_id' => 1,
                ),
        ));
        \DB::table('cars')->insert(array (
            0 =>
                array (
                    'id' => 5,
                    'name' => '浙江大学',
                    'description' => '',
                    'v2x_id' => 1,
                ),
        ));
        
        
    }
}
