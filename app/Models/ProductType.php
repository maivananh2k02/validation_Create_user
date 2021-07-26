<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    protected $table = 'type_products';

    public function product(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Product','id_type','id');
    }
}
