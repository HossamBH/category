@extends('layout')
@section('title')

    <title> Home </title>

@stop
@section('content')
    <form action="{{route('create')}}" method="POST" style="margin: 200px 500px 200px 500px" class="form-signin">

        @csrf

        <h1 class="h3 mb-3 font-weight-normal">WELCOME</h1>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Add New Category</button>
    </form>
@stop