<?php

namespace App\Policies;

use App\User;
use App\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if($user->hasRole('admin'))
        {
            return true;
        }
    }
    /**
     * Determine whether the user can browse the model.
     *
     * @param  \App\User  $user
     * @return mixed
     */  
    public function browse(User $user)
    {
        return $user->hasRole('seller');
    }

    /**
     * Determine whether the user can read the model.
     *
     * @param  \App\User  $user
     * @param  \App\Shop  $shop
     * @return mixed
     */
    public function read(User $user, Product $product)
    {
         
        return $user->id == $product->shop->users_id;
    }

     /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Shop  $shop
     * @return mixed
     */
    public function edit(User $user, Product $product)
    {
        if(empty($product->shop))
        {
            return false;
        }
        return $user->id == $product->shop->users_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function add(User $user)
    {
        return $user->hasRole('seller');
    }

   

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Shop  $shop
     * @return mixed
     */
    public function delete(User $user, Product $product)
    {
        if(empty($product->shop))
        {
            return false;
        }
        return $user->id == $product->shop->users_id;
    }
 
}
