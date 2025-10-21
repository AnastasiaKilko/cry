<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgeLimit extends Model
{
    protected $fillable = [
        'age_limit_type',
    ];
    public function book()
    {
        return $this->hasMany(Book::class);
    }
}
