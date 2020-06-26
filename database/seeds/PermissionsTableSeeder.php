<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'updated_at' => '2020-06-26 10:54:35',
            ),
            1 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'updated_at' => '2020-06-26 10:54:35',
            ),
            2 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'updated_at' => '2020-06-26 10:54:35',
            ),
            3 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'updated_at' => '2020-06-26 10:54:35',
            ),
            4 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'updated_at' => '2020-06-26 10:54:35',
            ),
            5 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            6 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            7 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            8 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            9 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            10 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            11 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            12 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            13 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            14 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            15 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            16 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            17 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            18 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            19 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            20 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            21 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            22 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            23 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            24 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            25 => 
            array (
                'created_at' => '2020-06-26 10:54:35',
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'updated_at' => '2020-06-26 10:54:35',
            ),
            26 => 
            array (
                'created_at' => '2020-06-26 10:57:04',
                'id' => 27,
                'key' => 'browse_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-06-26 10:57:04',
            ),
            27 => 
            array (
                'created_at' => '2020-06-26 10:57:04',
                'id' => 28,
                'key' => 'read_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-06-26 10:57:04',
            ),
            28 => 
            array (
                'created_at' => '2020-06-26 10:57:04',
                'id' => 29,
                'key' => 'edit_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-06-26 10:57:04',
            ),
            29 => 
            array (
                'created_at' => '2020-06-26 10:57:04',
                'id' => 30,
                'key' => 'add_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-06-26 10:57:04',
            ),
            30 => 
            array (
                'created_at' => '2020-06-26 10:57:04',
                'id' => 31,
                'key' => 'delete_shops',
                'table_name' => 'shops',
                'updated_at' => '2020-06-26 10:57:04',
            ),
            31 => 
            array (
                'created_at' => '2020-06-26 10:58:45',
                'id' => 32,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-06-26 10:58:45',
            ),
            32 => 
            array (
                'created_at' => '2020-06-26 10:58:45',
                'id' => 33,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-06-26 10:58:45',
            ),
            33 => 
            array (
                'created_at' => '2020-06-26 10:58:45',
                'id' => 34,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-06-26 10:58:45',
            ),
            34 => 
            array (
                'created_at' => '2020-06-26 10:58:45',
                'id' => 35,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-06-26 10:58:45',
            ),
            35 => 
            array (
                'created_at' => '2020-06-26 10:58:45',
                'id' => 36,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'updated_at' => '2020-06-26 10:58:45',
            ),
            36 => 
            array (
                'created_at' => '2020-06-26 11:35:10',
                'id' => 37,
                'key' => 'browse_products',
                'table_name' => 'products',
                'updated_at' => '2020-06-26 11:35:10',
            ),
            37 => 
            array (
                'created_at' => '2020-06-26 11:35:10',
                'id' => 38,
                'key' => 'read_products',
                'table_name' => 'products',
                'updated_at' => '2020-06-26 11:35:10',
            ),
            38 => 
            array (
                'created_at' => '2020-06-26 11:35:10',
                'id' => 39,
                'key' => 'edit_products',
                'table_name' => 'products',
                'updated_at' => '2020-06-26 11:35:10',
            ),
            39 => 
            array (
                'created_at' => '2020-06-26 11:35:10',
                'id' => 40,
                'key' => 'add_products',
                'table_name' => 'products',
                'updated_at' => '2020-06-26 11:35:10',
            ),
            40 => 
            array (
                'created_at' => '2020-06-26 11:35:10',
                'id' => 41,
                'key' => 'delete_products',
                'table_name' => 'products',
                'updated_at' => '2020-06-26 11:35:10',
            ),
        ));
        
        
    }
}