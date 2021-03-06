<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function student()
    {
        return $this->hasOne('App\Models\User\Student', 'user_id', 'id');
    }

    public function parent()
    {
        $this->hasOne('App\Models\User\StudentParent', 'user_id', 'id');
    }

    public function staff()
    {
        $this->hasOne('App\Models\User\Staff', 'user_id', 'id');
    }

    public function teacher()
    {
        $this->hasOne('App\Models\User\Teacher\Teacher', 'user_id', 'id');
    }
}
