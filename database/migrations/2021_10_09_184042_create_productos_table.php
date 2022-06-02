<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('catProducto_id')->constrained('catProductos');
            // $table->foreignId('clasProducto_id')->constrained('clasProductos');
            $table->unsignedInteger('catProducto_id'); // original
            // $table->unsignedBigInteger('catProducto_id')->nullable(); // modificado con la relacion foregin
            $table->unsignedInteger('clasProducto_id'); // original
            // $table->unsignedBigInteger('clasProducto_id')->nullable(); // modificado con la relacion foreing
            $table->string('nombre', 70);
            $table->integer('precio');
            $table->text('descripcion');
            $table->tinyInteger('estado')->default('1');

            // $table->foreign('catProducto_id')->references('id')->on('catproductos');
            // $table->foreign('catProducto_id')->references('id')->on('catproductos')->onDelete('set null'); // para eliminar solo un atributo de la tabla
            // $table->foreign('clasProducto_id')->references('id')->on('clasproductos');

            $table->timestamps();
            // $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
