@extends('layouts.master')

@section('title')
    Random User Generator
@stop

@section('head')
@stop

@section('content')
    <div class='container'>

    	<a href='/'>&larr; Home</a>

    	<h1>Random Users</h1>

        @for ($x = 0; $x < $data['users']; $x++)

            @if(isset($data['email']))
                    Name: &nbsp;{{ \Faker\Name::name() }} <br>Email:&nbsp;
                    {{ \Faker\Internet::freeEmail($name = null) }} <br><br>
            @else
                    {{\Faker\Name::name()}} <br>
            @endif
        @endfor

    </div>
@stop


@section('body')
@stop
