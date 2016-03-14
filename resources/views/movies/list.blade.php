@extends('layout')

@section('content')
<!--
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

            img {
                width: 30%;
            }
        </style>

    </head>
-->

    {{--<body>--}}
        {{--<div class="container">--}}
            {{--<div class="content">--}}
                <h1>Liste de nos films</h1>
                <a href="{{route("static_welcome")}}">Home</a><br />
                <a href="{{route("movies_creer")}}">Créer un film</a>
                @foreach($movies as $movie)
                    <p>
                        @if($movie->visible == 0)
                            <a href="{{route("movies_visible", ['id' => $movie->id])}}">Rendre visible</a>
                        @else
                            <a href="{{route("movies_visible", ['id' => $movie->id])}}">Rendre invisible</a>
                        @endif
                    </p>

                    <h3><a href="{{route("movies_voir", [$movie->id])}}">{{$movie->title}}</a></h3>
                    <img src="{{$movie->image}}">
                    <p><a href="{{route("movies_supprimer", ['id' => $movie->id])}}">Supprimer</a></p>
                    <p><a href="{{route("movies_editer", ['id' => $movie->id])}}">Editer</a></p>
                @endforeach
@endsection
            {{--</div>--}}
        {{--</div>--}}
    {{--</body>--}}

