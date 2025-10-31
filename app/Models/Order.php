<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    protected $table = 'orders';
    protected $fillable = [
        'id_users',
        'id_books',
        'order_date',
        'id_delivery_ways',
        'id_special_offers',
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
