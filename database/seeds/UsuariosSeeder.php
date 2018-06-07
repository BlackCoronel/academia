<?php

use Illuminate\Database\Seeder;
use Faker\Provider\es_ES\Person;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,30) as $index ){

            DB::table('users')->insert([

                "nombre" => $faker->firstName,
                "apellidos" => $faker->lastName,
                "dni" => $faker->dni,
                "email" => $faker->email,
                "password" => bcrypt("pass"),
                "fecha_nacimiento" =>$faker->date("Y-m-d"),
                "domicilio" => $faker->address,
                "cuentas_pendientes" => $faker->numberBetween(1,500),
                "curso_escolar" => $faker->numberBetween(1,20),
                "img_url" => "img/perfil/perfil.jpg",
                "rol" => $faker->rol,
                "created_at" => $faker->date("Y-m-d"),

            ]);

        }
    }
}
