<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // $table->unsignedInteger('persona_id')->nullable();
            $table->unsignedInteger('persona_id'); // habilitar despues
            // $table->string('name')->nullable(); // // Agregamos ese atributo nuevo
            // $table->string('name');  // ATRIBUTO ORIGINAL COMENTADO
            $table->string('username')->nullable(); // Agregamos ese atributo nuevo
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->tinyInteger('estado')->default('1'); // Agregamos ese atributo nuevo
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
        Schema::dropIfExists('users');
    }
}
