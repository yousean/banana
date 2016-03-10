<html>

    <head>

    </head>


    <body>
        <h1>Notre création de categories</h1>

        @if(count($errors->all()))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <a href="{{route("categories_lister")}}">Retour à la liste des catégories</a><br />

        <form method="post" action="{{route("categories_enregistrer")}}">

            <!-- champ caché -->
            {{ csrf_field() }}

            <label for="title">Titre : </label>
            <input name="title" id="title" />

            <label for="description">Description : </label>
            <textarea id="description" name="description"></textarea>

            <button>Créer une nouvelle catégorie</button>

        </form>
    </body>



</html>