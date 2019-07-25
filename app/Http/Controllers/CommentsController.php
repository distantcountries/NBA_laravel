<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Team;
use App\Mail\CommentRecieved;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('forbidden-comment')->only('store');
    }


    public function store(Request $request, $team_id)
    {
        $this->validate(request(), Comment::STORE_RULES);

        $team = Team::find($team_id);

        $comment = new Comment;
        $comment->content = request('content');

        if(!auth()->user()){
            session()->flash('message_false', 'Please login to leave the comment!');
            return back();
        }
        
        $comment->user_id = auth()->user()->id;

        $comment->team_id = $team_id;
        $comment->save();

        \Mail::to($team->email)->send(new CommentRecieved($team));

        return back();
    }
}
