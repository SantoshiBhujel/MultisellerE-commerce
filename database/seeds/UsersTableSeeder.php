<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-06-26 10:53:31',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'admin',
                'password' => '$2y$10$NRAgUDI1oFJrm3jpBLE24O6pWniWcAIgf6fos6wzGloHdLbo9OTuq',
                'remember_token' => NULL,
                'role_id' => 1,
                'settings' => NULL,
                'updated_at' => '2020-06-26 10:53:31',
            ),
            1 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-06-26 11:49:51',
                'email' => 'santoshi@gmail.com',
                'email_verified_at' => NULL,
                'id' => 2,
                'name' => 'Santoshi',
                'password' => '$2y$10$OXlB6zK.MMl76BV1ZQxn9.h8GYGWNgOcEICZQREIJCBrH6YavoY1u',
                'remember_token' => NULL,
                'role_id' => 3,
                'settings' => NULL,
                'updated_at' => '2020-06-26 16:07:12',
            ),
            2 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2020-06-26 11:51:43',
                'email' => 'sweety@gmail.com',
                'email_verified_at' => NULL,
                'id' => 3,
                'name' => 'Sweety',
                'password' => '$2y$10$E.E2D.amLumVGe.EhMpEQOhuIqT8kSawj/vxKX5p8XAGKNxI1ubBi',
                'remember_token' => NULL,
                'role_id' => 3,
                'settings' => NULL,
                'updated_at' => '2020-06-26 15:25:14',
            ),
        ));
        
        
    }
}