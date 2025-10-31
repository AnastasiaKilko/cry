<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryWay extends Model
{
    public $timestamps = false;
    protected $table = 'delivery_ways';
    protected $fillable = [
        'company',
        'link',
    ];
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
