<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'created_at' => '2020-06-26 10:54:35',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Users',
                'display_name_singular' => 'User',
                'generate_permissions' => 1,
                'icon' => 'voyager-person',
                'id' => 1,
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'name' => 'users',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'server_side' => 0,
                'slug' => 'users',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            1 => 
            array (
                'controller' => '',
                'created_at' => '2020-06-26 10:54:35',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Menus',
                'display_name_singular' => 'Menu',
                'generate_permissions' => 1,
                'icon' => 'voyager-list',
                'id' => 2,
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'name' => 'menus',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'menus',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            2 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'created_at' => '2020-06-26 10:54:35',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Roles',
                'display_name_singular' => 'Role',
                'generate_permissions' => 1,
                'icon' => 'voyager-lock',
                'id' => 3,
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'name' => 'roles',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'roles',
                'updated_at' => '2020-06-26 10:54:35',
            ),
            3 => 
            array (
                'controller' => 'App\\Http\\Controllers\\Admin\\VoyagerShopController',
                'created_at' => '2020-06-26 10:57:04',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Shops',
                'display_name_singular' => 'Shop',
                'generate_permissions' => 1,
                'icon' => 'voyager-shop',
                'id' => 4,
                'model_name' => 'App\\Shop',
                'name' => 'shops',
                'policy_name' => 'App\\Policies\\ShopPolicy',
                'server_side' => 0,
                'slug' => 'shops',
                'updated_at' => '2020-06-26 11:34:11',
            ),
            4 => 
            array (
                'controller' => NULL,
                'created_at' => '2020-06-26 10:58:45',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Orders',
                'display_name_singular' => 'Order',
                'generate_permissions' => 1,
                'icon' => 'voyager-buy',
                'id' => 5,
                'model_name' => 'App\\Order',
                'name' => 'orders',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'orders',
                'updated_at' => '2020-06-26 11:13:23',
            ),
            5 => 
            array (
                'controller' => NULL,
                'created_at' => '2020-06-26 11:35:10',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Products',
                'display_name_singular' => 'Product',
                'generate_permissions' => 1,
                'icon' => 'voyager-bag',
                'id' => 6,
                'model_name' => 'App\\Product',
                'name' => 'products',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'products',
                'updated_at' => '2020-06-26 11:36:31',
            ),
        ));
        
        
    }
}