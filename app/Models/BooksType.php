<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BooksType extends Model
{
    protected $fillable = [
        'pages',
        'size',
        'book_cover',
        'copies',
        'weight',
        'filesize',
        'file_format',
        'price',
        'e-book-link',
    ];
    public function book()
    {
        return $this->hasMany(Book::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
