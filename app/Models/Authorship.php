<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Authorship extends Model
{
    public function book()
    {
        return $this->hasMany(Book::class);
    }
    public function author()
    {
        return $this->hasMany(Author::class);
    }

}
