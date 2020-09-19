<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    // $fillableに設定したもの以外のカラムはユーザーが変更できない
    protected $fillable = [
        'prefecture_name'
    ];
}
