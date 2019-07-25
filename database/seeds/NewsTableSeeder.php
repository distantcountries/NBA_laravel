<?php

use Illuminate\Database\Seeder;
use App\User;
use App\News;

class NewsTableSeeder extends Seeder
{
    public function run()
    {
        User::all()->each(function(User $user){
            $user->news()->saveMany(factory(News::class, 25)->make());
        });
    }
}
