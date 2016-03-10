<?php

namespace App\Http\Controllers;
use App\Actors;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

/**
 * Class ActorsControllers
 * @package App\Http\Controllers
 * Chaque controler doit etre surfixer par le mot clé controler et doit hériter de
 * ma classe controler
 */
class ActorsController extends Controller{

    /*
     * Métohde de controller qui dit action de controller
     */
    public function lister(){

        $actors = Actors::all();
        // retourne une vue
        return view("actors/list",[
            "actors"=>$actors
        ]);
    }


    public function voir($id){
        $actors = Actors::find($id);
        return view("actors/vu", [
            "actors"=>$actors
        ]);
    }


    public function creer(){

        return view("actors/creation");
    }

    public function enregistrer(Request $request){

        // 1ère étape: récuperation des données soumuises
        // title est le name de mon champ
        $prenom = $request->firsname; //  équivalent à $_Post ['firsname']
        $nom = $request->lastname; // équivalent à $_Post['lastname']

        // 2ème étape: création en base de données du nouveau film
        $actor = new Actors();
        $actor->firstname = $prenom;
        $actor->lastname = $nom;
        $actor->save();

        // 3ème étape: redirection
        return Redirect::route("actors_lister");

    }


    public function supprimer($id){

        $actor = Actors::find($id);
        $actor->delete();

        return Redirect::route("actors_lister");
    }


    public function editer(){

        return view("actors/edition");
    }


}


