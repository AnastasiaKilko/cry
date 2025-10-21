<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecialOffer extends Model
{
    protected $fillable = [
        'name',
        'discount',
    ];
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
