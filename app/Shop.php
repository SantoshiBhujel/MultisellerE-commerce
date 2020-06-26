<?php

namespace App;

use App\User;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable= ['name', 'description'];
    public function owner()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'shops_id', 'id');
    }
}
 