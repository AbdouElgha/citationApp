<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
<h1>Ajouter une citation</h1>
<form method="post" action="{{route('maj2')}}">
    <div class="form-group" >
        <label for="citation" > Citation : </label>
        <textarea name="citation" class="form-control" id="citation">{{$citation->citation}}</textarea>

    </div>
    <div class="form-group">
        <label for="auteur" > Auteur : </label>
        <input type="text" name="auteur" class="form-control" id="auteur" value="{{$citation->auteur}}" >
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Mise à jours</button>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="id" value="{{$citation->id}}">
    </div>
</form>

</body>
</html>