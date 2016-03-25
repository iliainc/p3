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

        {{\Faker\Name::name()}}

        @if(count($data) > 0)
            @foreach($data as $dat)
                <h3>{{ $dat }}</h3>
                ${{ \Faker\Name::name() }}<br>
            @endforeach
        @else
                No Rates
        @endif


    </div>
@stop


@section('body')
@stop
