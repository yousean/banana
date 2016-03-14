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
class ActorsRequest extends FormRequest
{
    /**
     * Création de validateur par champs
     * @return array
     */
    public function rules() {
        return [
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:3',
            'biography' => 'required|min:10',
            'city' => 'required|min:3|max:15',
        ];
    }

    /**
     * Personnalise chaque message d'erreurs
     * @return array
     */
    public function messages() {
        return [
            'firstname.required' => 'Le prénom est obligatoire',
            'firstname.min' => 'Le prénom est trop court',
            'biography.required' => 'La biographie est obligatoire',
            'biography.min' => 'La biographie est trop courte',
            'city.required' => 'La ville est obligatoire',
            'city.min' => 'Le nom de la ville est trop courte',
            'city.max' => 'Le nom de la ville est trop longue',

        ];
    }

    public function authorize() {
        return true;
    }

}