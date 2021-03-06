<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usuariosController extends Controller
{
    public function store(Request $request) {

        $this->validate($request, [

            'name' => 'required|alpha|min:3',
            'apellidos' => 'required|alpha',
            'email' => 'required|unique:users',
            'dni' => 'required|unique:users|string|min:9',
            'address'=> 'required',
            'date' => 'required',
            'curso' => 'required',
            'rol' => 'required',

        ]);

        $user = new Usuarios([

            'nombre' => $request->get("name"),
            'apellidos' => $request->get("apellidos"),
            'email' => $request->get("email"),
            'dni' => $request->get("dni"),
            'domicilio' => $request->get("address"),
            'password' => bcrypt("pass"),
            'fecha_nacimiento' => $request->get("date"),
            'curso_escolar' => $request->get("curso"),
            'rol' => $request->get('rol'),
            'cuentas_pendientes' => '0',
            'img_url' => 'img/perfil/perfil.jpg',

        ]);

        $user->save();

        return redirect('/register')->with('status', 'El usuario ha sido registrado con éxito !!!');
    }

    public function show () {

        $usuarios = DB::table('users')->get();

       return view('admin.partials.mostrarUsuarios', compact('usuarios'));
    }

    public function returnCursos(){

        $cursos = DB::table('cursosacademicos')->get();
        $roles = DB::table('roles')->get();

        return view("admin.partials.register", compact('cursos','roles'));
    }

    public function edit_user(Request $request){

        $this->validate($request,['nif'=> 'required']);

        $consulta = DB::table('users')->where('dni', $request->nif)->get();
        $cursos = DB::table('cursos')->get();
        $roles = DB::table('roles')->get();

        if(count($consulta) > 0){

            return view('admin.partials.edit_user', compact('consulta', 'cursos','roles'));

        }
    }

    public function delete(Request $request){

        $this->validate($request,[

           'borrar_dni' => 'required',

        ]);

        DB::table('users')->where('dni', $request->borrar_dni)->delete();

         return redirect('panel')->with('status', 'El usuario se ha eliminado con éxito !!!');
    }

    public function parametros(){

        return view("admin.panel");
    }
}
