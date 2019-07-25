<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Comment;
use App\News;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password'
    ];

    const STORE_RULES = [
        'name' => 'required', 
        'email' => 'required', 
        'password' => 'required|min:4', 
        'password-confirm' => 'required|same:password'
    ];

    const LOGIN_RULES = [
        'email' => 'required', 
        'password' => 'required' 
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
