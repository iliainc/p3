@extends('layouts.master')

@section('title')
    Lorem Ipsum Generator
@stop

@section('head')
@stop

@section('content')
    <div class='container'>

    	<a href='/'>&larr; Home</a>

    	<h1>Random Lorem Ipsum</h1>

    	<p>
            echo $textLoremIpsum;
        </p>

    </div>
@stop


@section('body')
@stop
