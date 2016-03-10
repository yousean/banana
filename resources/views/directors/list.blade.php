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
                <h1>Liste des réalisateurs</h1>
                <a href="{{route("static_welcome")}}">Home</a><br />
                <a href="{{route("directors_creer")}}">Créer un réalisateur</a>
                @foreach($directors as $director)
                    <h3><a href="{{route("directors_voir", [$director->id])}}">{{$director->firstname}} {{$director->lastname}}</a></h3>
                    <p>{!! $director->city!!}</p>
                    <p><a href="{{route("directors_voir", ['id' => $director->id])}}">Supprimer</a></p>
                    <p><a href="{{route("directors_editer", ['id' => $director->id])}}">Editer</a></p>
                @endforeach
            </div>
        </div>
    </body>



</html>