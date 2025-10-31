<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BooksType extends Model
{
    public $timestamps = false;
    protected $table = 'book_types';

    protected $fillable = [
        'type'
    ];
    public function book()
    {
        return $this->hasMany(Book::class);
    }

}
