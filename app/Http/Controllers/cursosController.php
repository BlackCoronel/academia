<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cursosController extends Controller
{

    public function show(){

        $profesores = DB::table('users')->get()->where('rol', 'profesor');

        return view('admin.partials.registro_curso' , compact('profesores'));

    }

      public function up(){

     }
}
