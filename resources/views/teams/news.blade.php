@extends('layouts.master')


@section('content')
    
    <ol>
        @foreach($team->news as $new)
            <li>
                <a href="/news/{{ $new->id }}">
                    {{ $new->title }} <br>
                </a>
            </li>
        @endforeach
    </ol>
<br>



    







@endsection