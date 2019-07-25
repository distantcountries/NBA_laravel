@extends('layouts.master')

@section('content')

    <h1>{{ $player->name }}</h1>

    <p>
        Email: {{ $player->first_name }}<br>
        Adress: {{ $player->last_name }}<br>
        City: {{ $player->email }}<br>
        Team: 
            <a href="/teams/{{ $player->team->id }}">
                {{ $player->team->name }}<br>
            </a>
    </p>

@endsection