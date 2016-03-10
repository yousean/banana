<html>

    <head>

    </head>


    <body>
        <h1>Nos films vus</h1>
        <h3><a href="{{route("movies_lister")}}">retour liste des films</a></h3>
        <h3>{{$movies->title}}</h3>
        <img src="{{$movies->image}}">
        <p>{!! $movies->synopsis!!}</p>
    </body>



</html>