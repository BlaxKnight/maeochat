@extends('layouts.default')

@section('content')
<div><u>if user logged in this link will appear in home page</u></div>
<b><a href="{{ route('app') }}">app</a></b>
<div><u>user will automaticlly log in after registeration</u></div>
<b><a href="{{ route('register') }}">register</a></b>
<b><a href="{{ route('login') }}">login</a></b>
<b><a href="{{ route('about') }}">about</a></b>
@endsection
