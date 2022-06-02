<?php

namespace Database\Seeders;
use App\Models\persona;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        persona::truncate();
        $persona = new persona;
        $persona->nombre = "Rodrigo";
        $persona->apellido = "Mamani Achocalla";
        $persona->genero_id = 1;
        $persona->ci = "5713963";
        $persona->celular = "69207069";
        $persona->correo = "r0dr1-g0@outlook.es";
        $persona->direccion = "Av. Simon Bolivar";
        $persona->save();

        $persona = new persona;
        $persona->nombre = "Juana";
        $persona->apellido = "Perez";
        $persona->genero_id = 2;
        $persona->ci = "695847";
        $persona->celular = "77778888";
        $persona->correo = "juana@gmail.com";
        $persona->direccion = "Av. Sauces. 1er Anillo";
        $persona->save();
    }
}
