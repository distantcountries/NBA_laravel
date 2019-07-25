@extends('layouts.master')

@section('content')

    <h1>{{ $team->name }}</h1>

    <h5 style="margin:1rem 0;">
        <a href="/teams/{{ $team->id }}/news" 
                style="color:red; 
                border:2px solid red; 
                background-color:black;
                padding:0.4rem;
                border-radius:0.4rem;"> 
                    NEWS 
        </a>
    </h5>

    <p>
        Email: {{ $team->email }}<br>
        Adress: {{ $team->adress }}<br>
        City: {{ $team->city }}<br>
    </p>


    <h3>Players:</h3>
    <ul>
        @foreach($team->players as $player)
            <li>
                <a href="/players/{{ $player->id }}">
                    {{ $player->first_name }} {{ $player->last_name }} <br>
                </a>
            </li>
        @endforeach
    </ul>


    <div style="padding:2rem; border-radius:2rem; background-color:#e6ffff; width:50%;">
        <h3>Comments:</h3>
        <hr>

        <ul>
            @foreach($team->comments as $comment)
                <li>
                    {{ $comment->content }}
                </li>
            @endforeach
        </ul>
    </div><br>

    <div style="padding:2rem; border-radius:2rem; background-color:#e6eeff; width:50%;">
        <form method="POST" action="/teams/{{ $team->id }}/comments" >
        {{ csrf_field() }}
            <h3>Write the comment:</h3>
            <div class="form-group">
                <label for="content">Content:</label>
                <input class="form-control" name="content" type="content">
                @include('layouts.error-message', ['fieldTitle' => 'content'])
            </div>

            <button class="form-control" type="submit">Submit</button>
        </form>
    </div>


@endsection