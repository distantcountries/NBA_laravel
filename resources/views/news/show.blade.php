@extends('layouts.master')

@section('content')

    <h3>{{ $new->title }}</h3><br>
    <p>{{ $new->content }}</p><br>

    <p style="font-style:italic;">Created by: {{ $new->user->name }}</p>

    <ul>
        @foreach($new->teams as $team)
            <li>
                <a href="/teams/{{ $team->id }}">
                    {{ $team->name }}
                </a>
            </li>
        @endforeach
    </ul>

@endsection