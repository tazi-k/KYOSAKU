<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatchingStatus extends Model
{
    protected $fillable = ['status','message'];

    public function to_user()
    {
        return $this->belongsTo('App\User', 'to_user_id');

    }

    public function from_user()
    {
        return $this->belongsTo('App\User','from_user_id');
    }


}
