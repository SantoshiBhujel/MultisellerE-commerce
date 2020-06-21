<?php

namespace App\Observers;

use App\Shop;
use App\Mail\ShopActivated;
use Illuminate\Support\Facades\Mail;

class ShopObserver
{
    /**
     * Handle the shop "created" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function created(Shop $shop)
    {
        //
    }

    /**
     * Handle the shop "updated" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function updated(Shop $shop)
    {
        //dd($shop->is_active,$shop->getOriginal('is_active'));  //return updated value and original value before updating
        
        if($shop->getOriginal('is_active')==false &&  $shop->is_active==true)
        {
            //dd('Active');
            //send mail to user when the shop is active
            Mail::to($shop->owner->email)->send(new ShopActivated($shop));

            //change the role of shop owner to seller
            $shop->owner->setRole('seller');   // User model implement \TCG\Voyager\Models\User which implements TCG\Voyager\Traits ->this is where setRole is defined
        }
        else
        {
            //dd('inactive');
        }

    }

    /**
     * Handle the shop "deleted" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function deleted(Shop $shop)
    {
        //
    }

    /**
     * Handle the shop "restored" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function restored(Shop $shop)
    {
        //
    }

    /**
     * Handle the shop "force deleted" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function forceDeleted(Shop $shop)
    {
        //
    }
}
