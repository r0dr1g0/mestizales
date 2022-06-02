<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasProductosTable extends Migration
{
    public function up()
    {
        Schema::create('clasProductos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',20);
            $table->tinyInteger('estado')->default('1');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clasProductos');
    }
}
