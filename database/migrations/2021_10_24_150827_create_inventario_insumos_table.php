<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarioInsumos', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('insumo_id');
            $table->integer('cantidad');
            $table->integer('totalCantidad');
            $table->text('descripcion');
            $table->tinyInteger('estado')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventarioInsumos');
    }
}
