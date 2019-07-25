@extends('layouts.master')

@section('content')

    @if(Auth::check())
        <p style="font-weight:bold; color:#006666;"> 
            {{ Auth()->user()->name }} is logged in!
        </p>
    @endif


    <ul>
        @foreach ($teams as $team)
            <li>
                <a href="/teams/ {{ $team->id }}">
                    {{ $team->name }} <br>
                </a>
            </li>
        @endforeach
    </ul>

@endsection