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

            img {
                width: 50%;
            }
        </style>

    </head>


    <body>
        <div class="container">
            <div class="content">
                <h1>Nos films vus</h1>
                <h3><a href="{{route("movies_lister")}}">retour liste des films</a></h3>
                <h3>{{$movies->title}}</h3>
                <img src="{{$movies->image}}">
                <p>{!! $movies->synopsis!!}</p>
            </div>
        </div>
    </body>



</html>