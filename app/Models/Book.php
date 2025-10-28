<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name',
        'ISBN',
        'pages',
        'size',
        'book_cover',
        'copies',
        'weight',
        'filesize',
        'file_format',
        'price',
        'e_book_link',
    ];
    public function booksType()
    {
        return $this->belongsTo(BooksType::class);
    }
    public function ageLimit()
    {
        return $this->belongsTo(AgeLimit::class);
    }
    public function authorship()
    {
        return $this->hasMany(Authorship::class);
    }
    public function publication()
    {
        return $this->hasMany(Publication::class);
    }
    public function review() {
        return $this->hasMany(Review::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
