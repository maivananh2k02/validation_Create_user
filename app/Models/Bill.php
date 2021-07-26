<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table='bills';
    public function bill_detail(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\BillDetail','id_bill','id');
    }
    public function customer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Customer','id_customer','id');
    }
}
