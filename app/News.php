<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Team;

class News extends Model
{
    protected $fillable = [
        'title', 'content', 'user_id'
    ];

    const STORE_RULES = [
        'title' => 'required', 
        'content' => 'required', 
    ];

    protected $table = 'news';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }

    
}
