<?php

namespace App;

use App\Shop;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $dates=['deleted_at'];

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shops_id', 'id');
    }

}
