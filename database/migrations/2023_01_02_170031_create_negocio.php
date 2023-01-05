<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negocio', function (Blueprint $table) {
            $table->id();
            $table->string('contacto');
            $table->string('email');
            $table->string('telefono');
            $table->string('nombre_comercial');
            $table->string('alias');
            $table->string('tipo');
            $table->string('estado');
            $table->string('pais');
            $table->string('municipio');
            $table->string('calle');
            $table->string('entre');
            $table->string('cp');
            $table->string('foto');
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
        Schema::dropIfExists('negocio');
    }
};
