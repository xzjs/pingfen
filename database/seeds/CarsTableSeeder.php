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
        
        
    }
}
