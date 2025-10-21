<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryWay extends Model
{
    protected $fillable = [
        'company',
        'link',
    ];
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
