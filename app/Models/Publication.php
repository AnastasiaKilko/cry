<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    public $timestamps = false;
    protected $table = 'publications';
    protected $fillable = [
        'id_books',
        'id_publishers',
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
