<?php

namespace App\Http\Controllers;
use App\Directors;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

/**
 * Class DirectorsControllers
 * @package App\Http\Controllers
 * Chaque controler doit etre surfixer par le mot clé controler et doit hériter de
 * ma classe controler
 */
class DirectorsController extends Controller{

    /*
         * Métohde de controller qui dit action de controller
         */
    public function lister(){

        $directors = Directors::all();
        // retourne une vue
        return view("directors/list", [
            "directors"=>$directors
        ]);
    }


    public function voir($id){
        $directors = Directors::find($id);
        return view("directors/vu", [
            "directors"=>$directors
        ]);
    }


    public function creer(){

        return view("directors/creation");
    }


    public function enregistrer(Request $request){

        // 1ère étape: récuperation des données soumuises
        // title est le name de mon champ
        $prenom = $request->firsname; //  équivalent à $_Post ['firsname']
        $nom = $request->lastname; // équivalent à $_Post['lastname']

        // 2ème étape: création en base de données du nouveau film
        $director = new Directors();
        $director->firstname = $prenom;
        $director->lastname = $nom;
        $director->save();

        // 3ème étape: redirection
        return Redirect::route("directors_lister");

    }


    public function supprimer($id){

        $director = Directors::find($id);
        $director->delete();

        return Redirect::route("directors_lister");
    }


    public function editer(){

        return view("directors/edition");
    }




}


