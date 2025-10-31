<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public $timestamps = false;
    protected $table = 'authors';
    protected $fillable = [
        'surname',
        'name',
        'patronymic',
    ];
    public function authorship()
    {
        return $this->hasMany(Authorship::class);
    }
}
