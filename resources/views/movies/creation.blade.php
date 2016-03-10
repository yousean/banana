<html>

    <head>

    </head>


    <body>
        <h1>Création de nos films</h1>

        <form method="post" action="{{route("movies_enregistrer")}}">

            <!-- champ caché -->
            {{ csrf_field() }}

            <label for="title">Titre : </label>
            <input name="title" id="title" />

            <label for="description">Description : </label>
            <textarea id="description" name="description"></textarea>

            <label for="annee">Année : </label>
            <input name="annee" id="annee">

            <label for="budget">Budget : </label>
            <input name="budget" id="budget">

            <label for="duree">Durée : </label>
            <input name="duree" id="duree">

            <button>Créer ce nouveau film</button>

        </form>
    </body>



</html>