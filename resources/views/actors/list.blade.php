<html>

    <head>
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>

    </head>


    <body>
        <div class="container">
            <div class="content">
                <h1>Liste des acteurs</h1>
                <a href="{{route("static_welcome")}}">Home</a><br />
                <a href="{{route("actors_creer")}}">Créer un acteur</a>
                @foreach($actors as $actor)
                    <h3><a href="{{route("actors_voir", [$actor->id])}}">{{$actor->firstname}} {{$actor->lastname}}</a></h3>
                    <p>{!! $actor->nationality!!}</p>
                    <p><a href="{{route("actors_supprimer", ['id' => $actor->id])}}">Supprimer</a></p>
                    <p><a href="{{route("actors_editer", ['id' => $actor->id])}}">Editer</a></p>
                @endforeach
            </div>
        </div>
    </body>



</html>