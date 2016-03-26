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

        {{\Faker\Name::name()}}<br>

        {{$data['users']}}<br><br>
        {{$data['email']}}<br>

        @for ($x = 0; $x <= $data['users']; $x++)

            @if(isset($var)))
                @foreach($data as $dat)
                    {{ \Faker\Name::name() }}<br>
                    {{\Faker\Name::email()}}<br>
                @endforeach
            @else
                    {{\Faker\Name::name()}}<br>
            @endif
        @endfor

    


    </div>
@stop


@section('body')
@stop
