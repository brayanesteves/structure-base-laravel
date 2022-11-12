<?php

    use App\Http\Controllers\EstudianteController;
    use App\Http\Controllers\CursosController;
    use App\Http\Controllers\CursosAsignadosController;
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

    /**
     * Nos permite acceder a los métodos de 'CursosController'
     */
    Route::get('/course',                    ['as' => 'course.index',   'uses' => 'CursosController@index']);
    Route::post('/course',                   ['as' => 'course.store',   'uses' => 'CursosController@store']);
    Route::get('/course/create',             ['as' => 'course.create',  'uses' => 'CursosController@create']);
    Route::get('/course/{course}',           ['as' => 'course.show',    'uses' => 'CursosController@show']);
    Route::put('/course/{course}/update',    ['as' => 'course.update',  'uses' => 'CursosController@update']);
    Route::get('/course/{course}/edit',      ['as' => 'course.edit',    'uses' => 'CursosController@edit']);
    Route::delete('/course/{course}/delete', ['as' => 'course.destroy', 'uses' => 'CursosController@destroy']);

    /**
     * Nos permite acceder a los métodos de 'CursosAsignadosController'
     */
    Route::get('/assign',                    ['as' => 'assign.index',   'uses' => 'CursosAsignadosController@index']);
    Route::post('/assign',                   ['as' => 'assign.store',   'uses' => 'CursosAsignadosController@store']);
    Route::get('/assign/create',             ['as' => 'assign.create',  'uses' => 'CursosAsignadosController@create']);
    Route::get('/assign/{assign}',           ['as' => 'assign.show',    'uses' => 'CursosAsignadosController@show']);
    Route::put('/assign/{assign}/update',    ['as' => 'assign.update',  'uses' => 'CursosAsignadosController@update']);
    Route::get('/assign/{assign}/edit',      ['as' => 'assign.edit',    'uses' => 'CursosAsignadosController@edit']);
    Route::delete('/assign/{assign}/delete', ['as' => 'assign.destroy', 'uses' => 'CursosAsignadosController@destroy']);

?>