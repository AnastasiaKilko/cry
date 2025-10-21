<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
        'release_year',
    ];
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
}
