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
        Schema::create('sucursales', function (Blueprint $table) {
            $table->id();
            $table->string("logo");
            $table->string("nombre");
            $table->string("direccion");
            $table->string("telefono");
            $table->string("correo");
            $table->string("menu");
            $table->string("lat");
            $table->string("lng");
            $table->boolean('delivery');
            $table->boolean('tienda');
            $table->integer('id_negocio');
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
        Schema::dropIfExists('sucursales');
    }
};
