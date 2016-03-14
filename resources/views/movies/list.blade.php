@extends('layout')

@section('content')

    {{--<head>--}}
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

    {{--</head>--}}


    {{--<body>--}}
        <div class="container">
            <div class="content">
                <h1>Liste des films</h1>
                <h3><a href="{{route("static_welcome")}}"><span class="glyphicons glyphicons-home"></span> Home</a></h3>
                <h3><a href="{{route("movies_creer")}}"><span class="glyphicons glyphicons-film"></span> Créer un film</a></h3>
            </div>
        </div>


        <table class="table table-bordered mbn">
            <thead>
                <tr class="system">
                    <th>id</th>
                    <th>Photo</th>
                    <th>Titre</th>
                    <th>Synopsis</th>
                    <th>Visibilité</th>
                    <th>Supprimer</th>
                    <th>Editer</th>
                </tr>
            </thead>

            <tbody>
            @foreach($movies as $movie)
                <tr>
                    <td><p>"{{$movie->id}}"</p></td>
                    <td><img src="{{$movie->image}}" class="img-responsive mw100 ib "></td>
                    <td><h4><a href="{{route("movies_voir", [$movie->id])}}">{{$movie->title}}</a></h4></td>
                    <td>{!!str_limit(strip_tags( $movie->synopsis),$limit = 250, $end = '...')!!}</td>
                    <td><p>
                        @if($movie->visible == 0)
                            <a href="{{route("movies_visible", ['id' => $movie->id])}}"><span class="glyphicons glyphicons-remove"></span></a>
                        @else
                            <a href="{{route("movies_visible", ['id' => $movie->id])}}"><span class="glyphicons glyphicons-ok"></span></a>
                        @endif
                    </p></td>
                    <td><p><a href="{{route("movies_supprimer", ['id' => $movie->id])}}">Supprimer ce film</a></p></td>
                    <td><p><a href="{{route("movies_editer", ['id' => $movie->id])}}">Editer ce film</a></p></td>
                </tr>

            @endforeach
            </tbody>
        </table>

@endsection

    {{--</body>--}}

