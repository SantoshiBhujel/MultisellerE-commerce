<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'created_at' => '2020-06-26 10:53:31',
                'display_name' => 'Administrator',
                'id' => 1,
                'name' => 'admin',
                'updated_at' => '2020-06-26 10:53:31',
            ),
            1 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'display_name' => 'Normal User',
                'id' => 2,
                'name' => 'user',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            2 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'display_name' => 'Seller',
                'id' => 3,
                'name' => 'seller',
                'updated_at' => '2020-06-26 10:55:48',
            ),
        ));
        
        
    }
}