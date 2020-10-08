<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','age','profile','sns_link','work_link','live','collaboration_link','prefectures_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function matching_statuses()
    {
        return $this->hasMany('App\MatchingStatus');
    }

    public function genres()
    {
        return $this->belongsToMany('App\Genre')->withTimestamps();
    }

    public function prefecture()
    {
        return $this->belongsTo('App\Prefecture','prefectures_id');
    }

    public function rooms()
    {
        return $this->belongsToMany('App\Room')->withTimestamps();
    }
    public function chats()
    {
        return $this->hasMany('App\Chat');
    }
}
