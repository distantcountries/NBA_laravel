<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate(request(), User::LOGIN_RULES);
        
        if(!auth()->attempt(request(['email', 'password']))) {
            session()->flash('message_false', 'Wrong authentication, please try again!');
            return back();
        } else {
            if(auth()->user()->is_verified){
                session()->flash('message_true', 'Thanx for login!');
                return redirect('/teams');
            } else {
                $this->destroy();
                session()->flash('message_false', 'Please first verify your account!');
                return back();
            }
        }
    }

    public function destroy()
    {
        auth()->logout();
        session()->flash('message_false','Please login for more info!');
        return redirect('/login');
    }

    public function verification($id)
    {   
        $user = User::find($id);
        $user->is_verified = true;
        $user->save();
        return view('auth.verification', compact('user'));
    }
}
