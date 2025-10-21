<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name',
        'ISBN',
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
}
