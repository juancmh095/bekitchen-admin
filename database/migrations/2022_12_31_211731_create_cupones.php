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
        Schema::create('cupones', function (Blueprint $table) {
            $table->id();
            $table->integer('procentaje');
            $table->integer('importe');
            $table->date('limite_fecha');
            $table->integer('canjes');
            $table->string('codigo');
            $table->integer('importe_minimo');
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
        Schema::dropIfExists('cupones');
    }
};
