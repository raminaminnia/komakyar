<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'user_staffs';

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function dailyPrograms()
    {
        return $this->hasMany('App\Models\Education\Program\DailyProgram', 'staff_id', 'id');
    }
}
