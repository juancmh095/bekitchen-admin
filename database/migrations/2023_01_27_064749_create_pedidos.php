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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_usuario',null);
            $table->string('productos',null);
            $table->date('fecha',null);
            $table->string('tipoDelivery',null);
            $table->string('mPago',null);
            $table->string('direccion',null);
            $table->integer('subtotal',null);
            $table->integer('descuento',null);
            $table->integer('total',null);
            $table->string('cupon',null);

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
        Schema::dropIfExists('pedidos');
    }
};
