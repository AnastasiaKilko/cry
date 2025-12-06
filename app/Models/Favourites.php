<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favourites extends Model
{
    public $timestamps = false;
    protected $table = 'favourites';

    protected $fillable = [
        'id_authorship',
        'id_users',
    ];

    public function authorship()
    {
        return $this->belongsTo(Authorship::class, 'id_authorship', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_users', 'id');
    }
}
