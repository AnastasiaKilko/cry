<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
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
