<?php

    use App\Http\Controllers\EstudianteController;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    Route::get('/', function () {
        return view('welcome');
    });

    /**
     * Nos permite acceder a los métodos de 'EstudianteController'
     */
    Route::get('/estudiante',                 ['as' => 'estudiante.index',   'uses' => 'EstudianteController@index']);
    Route::post('/estudiante',                ['as' => 'estudiante.store',   'uses' => 'EstudianteController@store']);
    Route::get('/estudiante/create',          ['as' => 'estudiante.create',  'uses' => 'EstudianteController@create']);
    Route::get('/estudiante/{estudiante}',    ['as' => 'estudiante.show',    'uses' => 'EstudianteController@show']);
    Route::put('/estudiante/{estudiante}',    ['as' => 'estudiante.update',  'uses' => 'EstudianteController@update']);
    Route::get('/estudiante/{estudiante}',    ['as' => 'estudiante.edit',    'uses' => 'EstudianteController@edit']);
    Route::delete('/estudiante/{estudiante}', ['as' => 'estudiante.destroy', 'uses' => 'EstudianteController@destroy']);

?>