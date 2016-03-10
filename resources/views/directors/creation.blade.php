<html>

    <head>

    </head>


    <body>
        <h1>Nouveaux réalisateurs</h1>

        <form method="post" action="{{route("directors_enregistrer")}}">

            <!-- champ caché -->
            {{ csrf_field() }}

            <label for="firstname">Prénom : </label>
            <input name="firstname" id="firstname" />

            <label for="lastname">Nom : </label>
            <input name="lastname" id="lastname" />

            <label for="biography">Biography : </label>
            <textarea id="biography" name="biography"></textarea>

            <label for="city">Ville : </label>
            <input name="city" id="city" />

            </p><input type="file" name="fichier"/>

            <button>Créer un nouveau réalisateur</button>

        </form>
    </body>



</html>