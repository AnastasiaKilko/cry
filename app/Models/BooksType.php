<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BooksType extends Model
{
    protected $fillable = [
        'type'
    ];
    public function book()
    {
        return $this->hasMany(Book::class);
    }

}
