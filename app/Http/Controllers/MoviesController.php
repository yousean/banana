<?php

namespace App\Http\Controllers;
use App\Http\Requests\MoviesRequest;
use App\Movies;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

/**
 * Class MoviesControllers
 * @package App\Http\Controllers
 * Chaque controler doit etre surfixer par le mot clé controler et doit hériter de
 * ma classe controler
 */
class MoviesController extends Controller{

    /*
     * Métohde de controller qui dit action de controller
     */
    public function lister(){

        $movies = Movies::all();
        // retourne une vue
        return view("movies/list", [
            "movies"=>$movies
        ]);
    }


    public function voir($id){
        $movies = Movies::find($id);
        return view("movies/vu", [
            "movies"=>$movies
        ]);
    }


    public function creer(){

        return view("movies/creation");
    }

    /**
     * Enregistrer un film en base de données depuis mes données soumises
     * en formulaires
     */
    public function enregistrer(MoviesRequest $request){

        // 1ère étape: récuperation des données soumises
        // title est le name de mon champ
        $titre = $request->title; //  équivalent à $_Post ['title']
        $synopsis = $request->synopsis;
        $description = $request->description; // équivalent à $_Post['description']
        $langue = $request->langue;
        $annee = $request->annee;
        $bo = $request->bo;
        $date_release = $request->date_release;
        $budget = $request->budget;
        $duree = $request->duree;



        // 2ème étape: création en base de données du nouveau film
        $movie = new Movies();
        $movie->title = $titre;
        $movie->synopsis = $synopsis;
        $movie->description = $description;
        $movie->languages = $langue;
        $movie->annee = $annee;
        $movie->bo = $bo;
        $movie->date_release = $date_release;
        $movie->budget = $budget;
        $movie->duree = $duree;
        $movie->save();

        // 3ème étape: redirection
        return Redirect::route("movies_lister");

    }


    public function visible($id){
    /*    $movie = Movies::find($id);
        $movie->visible = !$movie->visible;*/

        $movie = Movies::find($id);
        if($movie->visible == 0){
            $movie->visible = 1;
        }else{
            $movie->visible = 0;
        }

        $movie->save();

        // 3ème étape: redirection
        return Redirect::route("movies_lister");

    }




    public function supprimer($id){

        $movie = Movies::find($id);
        $movie->delete();

        return Redirect::route("movies_lister");
    }

    public function editer($id){

        $movies = Movies::find($id);
        return view("movies/edition", [
            "movies"=>$movies
        ]);
    }


}


