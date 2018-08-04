<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    /**
     * Get the user record associated with the shop.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
    * Get the products for the shop.
      function name can be anything but we use table name for understandable easily
    */
    public function products()
    {
        return $this->hasMany('App\Model\Product');
    }
}
