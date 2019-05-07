<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>

    @extends('layouts.master')

    @section('titre','Afficher')
    @section('content')
        @parent

        <h1 class="title m-b-md">Listes des citations :</h1>

        @foreach($Citation as $citation)
            <div class="breadcrumb">
                <div class="text-center"> "{{$citation->citation}}" </div>
            </div>
            <div class="text-center">
                - <i class="text-center" >{{$citation->auteur}}</i>
            </div>
            <div class="text-center">
                    <a href="{{route('lire',['id'=>$citation->id])}}" class="text-center">Lire<-></a>
                    <a href="{{route('supp',['id'=>$citation->id])}}" class="text-right">Supprimer<-></a>
                    <a href="{{route('maj',['id'=>$citation->id])}}" class="text-left">MAJ</a>
                <label class="text-right"> Lue ({{$citation->lue}} fois ) </label>
            </div>

        @endforeach
    @endsection
        </html>