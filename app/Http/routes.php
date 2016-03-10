<?php





Route::get('/',['as'=>'static_welcome', function () {
    return view('static/welcome');
}]);


/*
 * dossier de ma vu / nom de ma vue
 */
Route::get('/contact', function () {
    return view('static/contact');
});


Route::get('/concept', function () {
    return view('static/concept');
});

Route::get('/a_propos', function () {
    return view('static/a_propos');
});


Route::group(['middleware' => ['web']], function () {
/*
|--------------------------------------------------------------------------
| Movies
|--------------------------------------------------------------------------
*/

Route::group(['prefix' =>'movies'], function (){

    /*
     * uses (c'est un mot clé) : permettant d'appeler un controller
     * nom du controller ( = nom du fichier) @ action du controller
     */
    Route::get('/lister', [
        'as' => 'movies_lister',
        'uses' => 'MoviesController@lister'
    ]);

    Route::get('/supprimer/{id}', [
        'as' => 'movies_supprimer',
        'uses' => 'MoviesController@supprimer'
    ]);

    Route::get('/voir/{id}', [
        'as' => 'movies_voir',
        'uses' => 'MoviesController@voir'
    ]);

    // route en get
    Route::get('/creer', [
        'as' => 'movies_creer',
        'uses' => 'MoviesController@creer'
    ]);

    // route en post
    Route::post('/enregistrer', [
        'as' => 'movies_enregistrer',
        'uses' => 'MoviesController@enregistrer'
    ]);

    Route::get('/visible/{id}', [
        'as' => 'movies_visible',
        'uses' => 'MoviesController@visible'
    ]);

    /*
     *
     */
    Route::get('/editer/{id}', [
        'as' => 'movies_editer',
        'uses' => 'MoviesController@editer'
    ]);
});


/*
|--------------------------------------------------------------------------
| Catégories
|--------------------------------------------------------------------------
*/

Route::group(['prefix' =>'categories'], function (){

    /*
     * uses (c'est un mot clé) : permettant d'appeler un controller
     * nom du controller ( = nom du fichier) @ action du controller
     */
    Route::get('/lister', [
        'as' => 'categories_lister',
        'uses' => 'CategoriesController@lister'
    ]);

    Route::get('/supprimer/{id}', [
        'as' => 'categories_supprimer',
        'uses' => 'MoviesController@categories'
    ]);

    Route::get('/voir/{id}', [
        'as' => 'categories_voir',
        'uses' => 'CategoriesController@voir'
    ]);

    Route::get('/creer', [
        'as' => 'categories_creer',
        'uses' => 'CategoriesController@creer'
    ]);

    // route en post
    Route::post('/enregistrer', [
        'as' => 'categories_enregistrer',
        'uses' => 'CategoriesController@enregistrer'
    ]);

    Route::get('/editer', [
        'as' => 'categories_editer',
        'uses' => 'CategoriesController@editer'
    ]);
});


/*
|--------------------------------------------------------------------------
| Acotrs
|--------------------------------------------------------------------------
*/

Route::group(['prefix' =>'actors'], function (){

    /*
     * uses (c'est un mot clé) : permettant d'appeler un controller
     * nom du controller ( = nom du fichier) @ action du controller
     */
    Route::get('/lister', [
        'as' => 'actors_lister',
        'uses' => 'ActorsController@lister'
    ]);

    Route::get('/supprimer/{id}', [
        'as' => 'actors_supprimer',
        'uses' => 'ActorsController@supprimer'
    ]);

    Route::get('/voir/{id}', [
        'as' => 'actors_voir',
        'uses' => 'ActorsController@voir'
    ]);

    Route::get('/creer', [
        'as' => 'actors_creer',
        'uses' => 'ActorsController@creer'
    ]);

    // route en post
    Route::post('/enregistrer', [
        'as' => 'actors_enregistrer',
        'uses' => 'ActorsController@enregistrer'
    ]);

    Route::get('/editer', [
        'as' => 'actors_editer',
        'uses' => 'ActorsController@editer'
    ]);
});


/*
|--------------------------------------------------------------------------
| Directors
|--------------------------------------------------------------------------
*/

Route::group(['prefix' =>'directors'], function (){

    /*
     * uses (c'est un mot clé) : permettant d'appeler un controller
     * nom du controller ( = nom du fichier) @ action du controller
     */
    Route::get('/lister', [
        'as' => 'directors_lister',
        'uses' => 'DirectorsController@lister'
    ]);

    Route::get('/supprimer/{id}', [
        'as' => 'directors_supprimer',
        'uses' => 'DirectorsController@supprimer'
    ]);

    Route::get('/voir/{id}', [
        'as' => 'directors_voir',
        'uses' => 'DirectorsController@voir'
    ]);

    Route::get('/creer', [
        'as' => 'directors_creer',
        'uses' => 'DirectorsController@creer'
    ]);

    Route::post('/enregistrer', [
        'as' => 'directors_enregistrer',
        'uses' => 'DirectorsController@enregistrer'
    ]);

    Route::get('/editer', [
        'as' => 'directors_editer',
        'uses' => 'DirectorsController@editer'
    ]);
});


/*
Route::get('/lister', [
    'uses' => 'CategoriesController@lister'
]);

Route::get('/voir', [
    'uses' => 'CategoriesController@voir'
]);

Route::get('/creer', [
    'uses' => 'CategoriesController@creer'
]);

Route::get('/editer', [
    'uses' => 'CategoriesController@editer'
]);
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


    //
});
