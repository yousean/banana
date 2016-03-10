<html>

    <head>

    </head>


    <body>
        <h1>Vu de nos acteurs</h1>
        <h3><a href="{{route("actors_lister")}}">retour liste des acteurs</a></h3>
        <p>>{!! $actors->recompenses!!}}</p>
        <p>>{!! $actors->biography!!}}</p>
        <img src="{{$actors->image}}">
    </body>



</html>