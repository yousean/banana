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
                <h1>Liste de nos catégories</h1>
                <hr />
                <a href="{{route("static_welcome")}}">Home</a><br />
                <p><a href="{{ route('categories_creer') }}">Créer une catégorie</a></p>
                @foreach($categories as $categorie)
                    <h3><a href="{{route("categories_voir", [$categorie->id])}}">{{$categorie->title}}</a></h3>
                    <p>>{!! $categorie->description!!}}</p>
                    <p><a href="{{route("categories_editer", [$categorie->id])}}">Editer cette catégorie</a></p>
                    <p><a href="{{route("categories_supprimer", ['id' => $categorie->id])}}">Supprimer</a></p>
                    <p><a href="{{route("categories_editer", ['id' => $categorie->id])}}">Editer</a></p>
                @endforeach
            </div>
        </div>
    </body>



</html>