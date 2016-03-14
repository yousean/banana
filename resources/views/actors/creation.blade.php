<html>

    <head>


    </head>


    <body>
        <h1>Nouveaux acteurs</h1>

        @if(count($errors->all()))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{route("actors_enregistrer")}}">

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

            <button>Créer un nouvel acteur</button>

        </form>

    </body>



</html>