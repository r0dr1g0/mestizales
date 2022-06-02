<?php

namespace Database\Seeders;
use App\Models\Genero;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        genero::truncate();
        $generos = new genero;
        $generos->nombre = "Masculino";
        $generos->save();

        $generos = new genero;
        $generos->nombre = "Femenino";
        $generos->save();


    }
}
