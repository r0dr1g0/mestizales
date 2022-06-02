<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarioProductos', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('producto_id');
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
        Schema::dropIfExists('inventarioProductos');
    }
}
