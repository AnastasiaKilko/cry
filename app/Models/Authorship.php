<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Authorship extends Model
{
    public $timestamps = false;
    protected $table = 'authorship';

    protected $fillable = [
        'id_authors',
        'id_books',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'id_books', 'id');
    }
    public function author()
    {
        return $this->belongsTo(Author::class, 'id_authors', 'id');
    }
    public function favourites()
    {
        return $this->hasMany(Favourites::class);
    }

}
