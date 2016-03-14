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
                <h1>Création films</h1>
                <h3><a href="{{route("movies_lister")}}">retour liste des films</a></h3>

                @if(count($errors->all()))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{route("movies_enregistrer")}}">

                    <!-- champ caché -->
                    {{ csrf_field() }}

                    <label for="title">Titre : </label>
                    <input value="{{old("title")}}" name="title" id="title" />
                    <br />

                    <label for="synopsis">Synopsis : </label>
                    <textarea value="{{old("synopsis")}}" name="synopsis" id="synopsis"></textarea>
                    <br />

                    <label for="description">Description : </label>
                    <textarea value="{{old("description")}}" id="description" name="description"></textarea>
                    <br />

                    <label for="langue">Langue : </label>
                    <input type="radio" name="langue" value="fr"> fr
                    <input type="radio" name="langue" value="en"> en
                    <input type="radio" name="langue" value="es"> es
                    <br />

                    <label for="annee">Année : </label>
                    <input value="{{old("annee")}}" name="annee" id="annee">
                    <br />

                    <label for="bo">BO : </label>
                        <select value="bo" name="bo">
                            <option>Sélectionnez la bo
                            <option>VO
                            <option>VOST
                            <option>VOSTFR
                        </select><br />

                    <label for="date_release">Date de sortie : </label>
                    <input value="{{old("date_release")}}" name="date_release" id="date_release">
                    <br />

                    <label for="budget">Budget : </label>
                    <input value="{{old("budget")}}" name="budget" id="budget">
                    <br />

                    <label for="duree">Durée : </label>
                    <input value="{{old("duree")}}" name="duree" id="duree">
                    <br />

                    <button>Créer ce nouveau film</button>
                    <br />

                </form>
            </div>
        </div>
    </body>



</html>