<?php

namespace App;

use App\Videogames;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    const ROLE_ADMIN = 2, ROLE_CLIENT = 1;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'nick','email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function purchases(){
        return $this->belongsToMany(Videogames::class, 'purchases')->withTimestamps();
    }

    public function isAdmin()
    {
        return $this->role==User::ROLE_ADMIN;
    }
}
