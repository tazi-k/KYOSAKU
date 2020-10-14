<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'genre_name'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
