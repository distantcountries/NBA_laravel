<?php

namespace App\Http\Controllers;
use App\Team;
use App\News;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $team = Team::find(1);
        $team->news()->sync([2]);


        return view('teams.news', compact('team'));
    }
}
