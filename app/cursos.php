<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cursos extends Model
{
    protected $fillable = ['nombre','dni_profesor','curso_escolar'];

    protected $table = "cursos";
}
