@extends('layouts.master')

@section('content')

    <h1>Register</h1>

    <form method="POST" action="/register" style="width:50%;">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" name="name" type="text">
            @include('layouts.error-message', ['fieldTitle' => 'name'])
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" name="email" type="email">
            @include('layouts.error-message', ['fieldTitle' => 'email'])
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" name="password" type="password">
            @include('layouts.error-message', ['fieldTitle' => 'password'])
        </div>

        <div class="form-group">
            <label for="password-confirm">Password confirmation:</label>
            <input class="form-control" name="password-confirm" type="password">
            @include('layouts.error-message', ['fieldTitle' => 'password-confirm'])
        </div>

            <button class="form-control" type="submit">Submit</button>
    </form>

@endsection