<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function product_type(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\ProductType', 'id_type', 'id');
    }

    public function bill_deital(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\BillDetail','id_product','id');
    }
}
