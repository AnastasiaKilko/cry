<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_date',
        'delivery_place',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function booksType()
    {
        return $this->belongsTo(BooksType::class);
    }
    public function deliveryWay()
    {
        return $this->belongsTo(DeliveryWay::class);
    }
    public function specialOffer()
    {
        return $this->belongsTo(SpecialOffer::class);
    }

}
