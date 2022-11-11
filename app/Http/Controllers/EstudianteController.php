<?php

    namespace App\Http\Controllers;

    use App\Models\Estudiante;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;

    class EstudianteController extends Controller {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index() {
            $estudiantes = Estudiante::paginate(5);
            return view('estudiante.index')->with('estudiantes', $estudiantes);
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create() {
            return view('estudiante.form');
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
                'name'     => 'required | max:15',
                'lastname' => 'required | max:15',
                'age'      => 'required | max:2',
                'email'    => 'required | max:30'
            ]);

            $estudiante = Estudiante::create($request->only('name', 'lastname', 'age', 'email'));
            /**
             * Mostramos el mensaje de que se registro correctamente los datos.
             */
            Session::flash('messageSuccessful', 'Se ha registrado correctamente.');
            return redirect()->route('estudiante.index');
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\estudiante  $estudiante
         * @return \Illuminate\Http\Response
         */
        public function show(Estudiante $estudiante) {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\estudiante  $estudiante
         * @return \Illuminate\Http\Response
         */
        public function edit(Estudiante $estudiante) {
            return view('estudiante.form')->with('estudiante', $estudiante);
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Estudiante  $estudiante
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Estudiante $estudiante) {
                /**
             * Reglas de validación para el formulario.
             */
            $request->validate([
                'name'     => 'required | max:15',
                'lastname' => 'required | max:15',
                'age'      => 'required | max:2',
                'email'    => 'required | max:30'
            ]);
            
            $estudiante->name     = $request['name'];
            $estudiante->lastname = $request['lastname'];
            $estudiante->age      = $request['age'];
            $estudiante->email    = $request['email'];

            $estudiante->save();
            /**
             * Mostramos el mensaje de que se registro correctamente los datos.
             */
            Session::flash('messageUpdateSuccessful', 'Se ha actualizado ' . $estudiante->name  . '. ' . $estudiante->lastname . ' correctamente.');
            return redirect()->route('estudiante.index');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Estudiante  $estudiante
         * @return \Illuminate\Http\Response
         */
        public function destroy(Estudiante $estudiante) {
            $estudiante->delete();
            /**
             * Mostramos el mensaje de que se registro correctamente los datos.
             */
            Session::flash('messageDeleteSuccessful', 'Se ha eliminado ' . $estudiante->name  . '. ' . $estudiante->lastname . ' correctamente.');
            return redirect()->route('estudiante.index');
        }
    }

?>