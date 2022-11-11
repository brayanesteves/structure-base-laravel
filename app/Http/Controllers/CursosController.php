<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CursosController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $cursos = Cursos::paginate(5);
        return view('courses.index')->with('course', $cursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('courses.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        /**
             * Reglas de validación para el formulario.
             */
            $request->validate([
                'name'     => 'required | max:255'                
            ]);

            $curso = Cursos::create($request->only('name', 'schedule', 'init_date', 'end_date'));
            /**
             * Mostramos el mensaje de que se registro correctamente los datos.
             */
            Session::flash('messageSuccessful', 'Se ha registrado correctamente.');
            return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function show(Cursos $cursos) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function edit(Cursos $course) {
        return view('courses.form')->with('course', $course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cursos $course) {
            /**
             * Reglas de validación para el formulario.
             */
            $request->validate([
                'name'     => 'required | max:255'
            ]);
            
            $course->name      = $request['name'];
            $course->schedule  = $request['schedule'];
            $course->init_date = $request['init_date'];
            $course->end_date  = $request['end_date'];

            $course->save();
            /**
             * Mostramos el mensaje de que se registro correctamente los datos.
             */
            Session::flash('messageUpdateSuccessful', 'Se ha actualizado ' . $course->name . ' correctamente.');
            return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cursos $course) {
        $estudiante->delete();
        /**
        * Mostramos el mensaje de que se registro correctamente los datos.
        */
        Session::flash('messageDeleteSuccessful', 'Se ha eliminado ' . $course->name . ' correctamente.');
        return redirect()->route('courses.index');
    }
}
