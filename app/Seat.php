<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// use Eloquent;

class Seat extends Model
{
    protected $fillable = ['floor','seat'];
// 新增,取得此篇seat撰寫之user
    public function user()
    {
        return $this->belongsTo(User::class);
    }    
}

