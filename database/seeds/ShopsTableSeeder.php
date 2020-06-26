<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shops')->delete();
        
        \DB::table('shops')->insert(array (
            0 => 
            array (
                'created_at' => '2020-06-26 11:50:00',
                'description' => 'Love your pet',
                'id' => 1,
                'is_active' => 1,
                'name' => 'Set you Pet free',
                'rating' => NULL,
                'updated_at' => '2020-06-26 16:07:01',
                'users_id' => 2,
            ),
            1 => 
            array (
                'created_at' => '2020-06-26 11:54:00',
                'description' => 'A complete fashion for Girl',
                'id' => 2,
                'is_active' => 1,
                'name' => 'Women\'s Planet',
                'rating' => NULL,
                'updated_at' => '2020-06-26 15:25:05',
                'users_id' => 3,
            ),
        ));
        
        
    }
}