<html>

    <head>

    </head>


    <body>
        <h1>Vu de nos réalisateurs</h1>
        <h3><a href="{{route("directors_lister")}}">retour liste des réalisateurs</a></h3>
        <p>>{!! $directors->dob!!}}</p>
        <p>>{!! $directors->biography!!}}</p>
        <img src="{{$directors->image}}">
    </body>



</html>