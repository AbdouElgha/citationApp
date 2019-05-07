<!DOCTYPE html>
<html>
    <body>
    @extends('layouts.master')
    @section('title', 'Blade')
    @section('sidebar')
        @parent
        <p>this is append to the master sidebar </p>
        @endsection
    @section('content')
        <p> this is my body content</p>
        <h1> Hello from View {{$name}} </h1>
        <a href="">Hi There !</a>
        @endsection

    </body>
</html>