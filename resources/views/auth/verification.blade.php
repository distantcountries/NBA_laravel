@extends('layouts.master')

@section('content')
    <h3>Wellcome {{ $user->name }}. Please <a href="/login">login!</a></h3>

@endsection

