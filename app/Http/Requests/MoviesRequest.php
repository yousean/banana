<?php
/**
 * Created by PhpStorm.
 * User: wal04
 * Date: 10/03/16
 * Time: 16:51
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class MoviesRequest
 * @package App\Http\Requests
 */
class MoviesRequest extends FormRequest
{
    /**
     * Création de validateur par champs
     * @return array
     */
    public function rules() {
        return [
            'title' => 'required|min:5|regex:/^[A-Za-z0-9]+$/|unique:movies',
            'synopsis' => 'required|min:8',
            'langue' => 'required|in:fr,en,es',
            'description' => 'required|min:10|max:250',
            'annee' => 'required|date_format:Y',
            'bo' => 'required|in:VO,VOST,VOSTFR',
            'date_release' => 'required|date_format:d/m/Y|after:now',
            'budget' => 'required|min:6|max:9',
            'duree' => 'required|min:1|max:1',
        ];
    }

    /**
     * Personnalise chaque message d'erreurs
     * @return array
     */
    public function messages() {
        return [
            'title.required' => 'Le titre est obligatoire',
            'title.min' => 'Le titre est trop court',
            'title.regex' => 'Le titre est de mauvais format',
            'title.unique' => 'Le titre est déjà pris',
            'synopsis.required' => 'Le synopsis est obligatoire',
            'synopsis.min' => 'Le synopsis est trop court',
            'langue.required' => 'La langue est obligatoire',
            'langue.in' => 'La langue doit etre fr, en ou es',
            'description.required' => 'La description est obligatoire',
            'description.min' => 'La description est trop courte',
            'description.max' => 'La description est trop longue',
            'annee.required' => 'L\'année est obligatoire',
            'annee.in' => 'Le format de l\'année n\'est pas valide',
            'bo.required' => 'Veuillez sélectionner la BO',
            'bo.in' => 'La BO doit etre vo, vost ou vostfr',
            'date_release.required' => 'La date de sortie est obligatoire',
            'date_release.date_format' => 'Le format de la date de sortie est invalide',
            'date_release.after' => 'Le a date doit etre supérieur à celle d\'aujourd\'hui',
            'budget.required' => 'Le budget est obligatoire',
            'budget.min' => 'Le budget minimum est de 100000',
            'budget.max' => 'Le budget maximum est de 999999999',
            'duree.required' => 'La durée est obligatoire',
            'duree.min' => 'La durée minimum est 1',
            'duree.max' => 'La durée minimum est 9',
        ];
    }

    public function authorize() {
        return true;
    }

}