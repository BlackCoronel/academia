<?php

use Illuminate\Database\Seeder;

class cursosAcademicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cursos = ['1º ESO' , '2º ESO' , '3º ESO' , '4º ESO','1º BACHILLER'];

        for($i = 0; $i < count($cursos); $i++){

            DB::table("cursosacademicos")->insert([

                "nombre_curso" => $cursos[$i],

            ]);

        }
    }
}
