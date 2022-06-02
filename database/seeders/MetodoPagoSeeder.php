<?php

namespace Database\Seeders;
use App\models\metodoPago;
use Illuminate\Database\Seeder;

class MetodoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        metodoPago::truncate();
        $metodoPagos = new metodoPago;
        $metodoPagos->nombre = "Efectivo";
        $metodoPagos->save();

        $metodoPagos = new metodoPago;
        $metodoPagos->nombre = "Tarjeta C D";
        $metodoPagos->save();

        $metodoPagos = new metodoPago;
        $metodoPagos->nombre = "QR";
        $metodoPagos->save();
    }
}
