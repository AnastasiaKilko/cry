<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingBag extends Model
{
    public $timestamps = false;
    protected $table = 'shopping_bag';

    protected $fillable = [
        'id_authorship',
        'id_users',
        'amount',
        'amount_price',
    ];

    public function authorship()
    {
        return $this->belongsTo(Authorship::class, 'id_authorship', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_users', 'id');
    }
}
