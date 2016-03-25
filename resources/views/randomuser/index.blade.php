@extends('layouts.master')

@section('title')
    Random User Generator
@stop

@section('head')
@stop

@section('content')
    <div class='container'>

    	<a href='/'>&larr; Home</a>

    	<h1>User Generator</h1>

        @if(count($errors) > 0)
            <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
            </ul>
        @endif

    	<form method="POST" action="/" accept-charset="UTF-8">
    		<label for="users">How many users?</label>		<input maxlength="2" name="users" type="text" value="{{old('paragraphs')}}" id="users"> (Max: 99)
    		<br>

    		Include...
    		<br>
    		<input name="birthdate" type="checkbox">		<label for="birthdate">Birthdate</label>		<br>

    		<input name="profile" type="checkbox">		<label for="profile">Profile</label>		<br>

    		<input name="_token" type="hidden" value="{{csrf_token()}}">
    		<input type="submit" value="Generate Random User Info">
        </form>
    </div>
@stop


@section('body')
@stop
