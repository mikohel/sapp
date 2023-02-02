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
        Schema::create('programas', function (Blueprint $table) {
            $table->id();
            $table->integer('anual');
            $table->integer('cantidad')->unsigned();
            $table->string('descripcion_de_avance');
            $table->string('folder_id');
            $table->integer('estado')->unsigned();
            $table->integer('mes')->unsigned();
            $table->integer('mes_reprogramado')->unsigned();
            $table->longText('motivo_de_cancelacion');
            $table->longText('motivo_reprogramacion');
            $table->integer('realizada')->unsigned();
            $table->integer('reprogramada')->unsigned();
            $table->string('actividad_id');
            $table->unsignedBigInteger('plantel_id');
            $table->string('archivo');
            $table->unsignedBigInteger('usuario_id');
            $table->string('observaciones');
            $table->integer('validada')->unsigned();
            $table->integer('original')->unsigned();
            $table->integer('cantidad_original')->unsigned();
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
        Schema::dropIfExists('programas');
    }
};
