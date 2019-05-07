@extends('layouts.master')
@section('titre','Lire')

@section('content')
    @parent

    <h1><i>"{{$citation->citation}}"</i></h1>
    <h4 align="right">{{$citation->auteur}}</h4>
@endsection