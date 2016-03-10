<?php

namespace App\Http\Controllers;
use App\Categories;
use App\Http\Requests\CategoriesRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

/**
 * Class CatgoriesControllers
 * @package App\Http\Controllers
 * Chaque controler doit etre surfixer par le mot clé controler et doit hériter de
 * ma classe controler
 */
class CategoriesController extends Controller{

    /*
     * Métohde de controller qui dit action de controller
     */
    public function lister(){

        $categories = Categories::all();
        // retourne une vue
        return view("categories/list", [
            "categories"=>$categories
        ]);
    }


    public function voir($id){

        $categories = Categories::find($id);
        return view("categories/vu", [
            "categories"=>$categories
        ]);
    }


    public function creer(){

        return view("categories/creation");
    }


    /**
     * Enregistrer un film en base de données depuis mes données soumises
     * en formulaires
     */
    public function enregistrer(CategoriesRequest $request){

        // 1ère étape: récuperation des données soumuises
        // title est le name de mon champ
        $titre = $request->title; //  équivalent à $_Post ['title']
        $description = $request->description; // équivalent à $_Post['description']

        // 2ème étape: création en base de données du nouveau film
        $categorie = new Categories();
        $categorie->title = $titre;
        $categorie->description = $description;
        $categorie->save();

        // 3ème étape: redirection
        return Redirect::route("categories_lister");


    }

    public function supprimer($id){

        $categorie = Categories::find($id);
        $categorie->delete();

        return Redirect::route("categories_lister");
    }


    public function editer(){

        return view("categories/edition");
    }


}


