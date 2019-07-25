<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Team;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $news = News::with('user')->latest()->paginate(8);
        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $new = News::with('teams')->find($id);
        return view('news.show', compact('new'));
    }

    public function create()
    {
        $teams = Team::all();
        return view('news.create', compact('teams'));
    }

    public function store()
    {
        // dd('test');
        $this->validate(request(), News::STORE_RULES);

        if(!auth()->user()){
            session()->flash('message_false', 'Please login to write the news!');
            return back();
        }

        $new = new News;
        $new->title = request('title');
        $new->content = request('content');
        $new->user_id = auth()->user()->id;

        $new->save();
        $new->teams()->attach(request('teams'));

        session()->flash('message_true', 'Thank you for publishing article on www.nba.com!');
        return redirect('/news');
    }




}
