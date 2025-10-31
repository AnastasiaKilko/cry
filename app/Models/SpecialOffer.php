<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecialOffer extends Model
{
    public $timestamps = false;
    protected $table = 'special_offers';
    protected $fillable = [
        'name',
        'discount',
    ];
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
