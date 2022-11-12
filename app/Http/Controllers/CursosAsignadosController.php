<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Cursos;
use App\Models\CursosAsignados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursosAsignadosController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $estudiantes = Estudiante::all();
        $cursos = Cursos::all();
        $studentsAssign = CursosAsignados::all();
        $studentsAssign_LeftJoin = DB::table('cursos_asignados')->leftJoin('estudiantes', function($join) {
            $join->on('cursos_asignados.reference_estudiante', '=', 'estudiantes.id'); 
        })->leftJoin('cursos', function($join) {
            $join->on('cursos_asignados.reference_curso', '=', 'cursos.id'); 
        })
        ->select('cursos_asignados.*', 'estudiantes.name', 'estudiantes.lastname', 'cursos.name AS name_curso')
        ->get();;
        return view('assign.index')->with('estudiantes', $estudiantes)->with('course', $cursos)->with('studentsAssign', $studentsAssign)->with('studentsAssign_LeftJoin', $studentsAssign_LeftJoin);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $estudiantes = Estudiante::all();
        $cursos = Cursos::all();
        return view('assign.form')->with('estudiantes', $estudiantes)->with('course', $cursos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CursosAsignados  $cursosAsignados
     * @return \Illuminate\Http\Response
     */
    public function show(CursosAsignados $cursosAsignados) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CursosAsignados  $cursosAsignados
     * @return \Illuminate\Http\Response
     */
    public function edit(CursosAsignados $cursosAsignados) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CursosAsignados  $cursosAsignados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CursosAsignados $cursosAsignados) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CursosAsignados  $cursosAsignados
     * @return \Illuminate\Http\Response
     */
    public function destroy(CursosAsignados $cursosAsignados) {
        //
    }
}
