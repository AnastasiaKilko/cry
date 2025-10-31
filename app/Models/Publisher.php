<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    public $timestamps = false;
    protected $table = 'publishers';
    protected $fillable = [
        'publisher_name',
    ];
    public function publication()
    {
        return $this->hasMany(Publication::class);
    }

}
