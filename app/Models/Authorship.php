<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Authorship extends Model
{
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

}
