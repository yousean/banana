<html>

    <head>

    </head>


    <body>
        <h1>Nos catégories</h1>
        <h3><a href="{{route("categories_lister")}}">retour liste des catégories</a></h3>
        <h3>{{$categories->title}}</h3>
        <img src="{{$categories->image}}">
    </body>



</html>