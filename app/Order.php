<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function items()
    {
        return $this->belongsToMany(Product::class, 'order_items', 'orders_id', 'products_id');
    }
}
