<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\cursos;

class cursosController extends Controller
{

    public function show(){

        $profesores = DB::table('users')->get()->where('rol', 'profesor');
        $cursosacademicos = DB::table('cursosacademicos')->get();

        return view('admin.partials.registro_curso' , compact('profesores','cursosacademicos'));

    }

      public function up(Request $request){

        $this->validate($request, [
           'nombre' => 'required',
           'profesor' => 'required',
           'curso' => 'required',
        ]);

        $dni = explode('-', $request->profesor);

        $cursos = new Cursos([

            'nombre' => $request->nombre,
            'dni_profesor' => $dni[1],
            'curso_escolar' => $request->curso,
        ]);

        $cursos->save();

        return redirect('/new_curso')->with('status', 'El curso ha sido dado de alta con éxito !!!');
     }
}
