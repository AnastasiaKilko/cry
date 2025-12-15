<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $timestamps = false;
    protected $table = 'reviews';

    protected $fillable = [
        'id_books',
        'id_user',
        'rating',
        'text',
        'date'
    ];
    public function book()
    {
        return $this->belongsTo(Book::class, 'id_books', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
