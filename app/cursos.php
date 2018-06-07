<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cursos extends Model
{
    protected $fillable = ['nombre',
        'apellidos',
        'email','password',
        'dni',
        'fecha_nacimiento',
        'domicilio',
        'cuentas_pendientes',
        'curso_escolar',
        'rol',
        'created_at',
        'img_url'];

    protected $table = "users";
}
