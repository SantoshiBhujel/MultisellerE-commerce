<?php

namespace App;

use App\User;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function items()
    {
        return $this->belongsToMany(Product::class, 'order_items', 'orders_id', 'products_id')->withPivot('quantity','price');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
