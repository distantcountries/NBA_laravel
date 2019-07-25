@extends('layouts.master')

@section('content')


        <h1>Create news</h1>

            <form method="POST" action="/news/create" style="width:50%;">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input class="form-control" name="title" type="text">
                    @include('layouts.error-message', ['fieldTitle' => 'title'])
                </div>

                <div class="form-group">
                    <label for="content">Content:</label>
                    <input class="form-control" name="content" type="text">
                    @include('layouts.error-message', ['fieldTitle' => 'content'])
                </div>

                <div class="form-group">
                    <label for="teams[]">Teams</label><br>
                    @foreach ($teams as $team)
                        <input type="checkbox" name="teams[]" value="{{ $team->id }}"> {{ $team->name }}<br>
                    @endforeach
                </div>

                    <button class="form-control" type="submit">Submit</button>
            </form>


@endsection