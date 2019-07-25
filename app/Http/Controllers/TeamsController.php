<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\News;

class TeamsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $teams = Team::all();
        if(!auth()->user()){
            return redirect ('/login');
        }

        return view('teams.index', compact('teams'));
    }

    public function show($id)
    {
        $team = Team::with('players', 'comments.user')->find($id);
        return view('teams.show', compact('team'));
    }

    public function teamNews($id)
    {
        $team = Team::find($id);
        $team->news()->paginate(3);
        // dd($team->news()->paginate(3));

        return view('teams.news', compact('team'));
    }

}
