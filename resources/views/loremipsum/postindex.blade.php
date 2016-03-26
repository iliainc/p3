@extends('layouts.master')

@section('title')
    Lorem Ipsum Generator
@stop

@section('head')
@stop

@section('content')
    <div class='container'>

    	<a href='/'>&larr; Home</a>

    	<h1>Random Lorem Ipsum Text</h1>
        
        @foreach ($textLoremIpsum as $value)
          {{ $value }}<br><br>
        @endforeach

    </div>
@stop


@section('body')
@stop
