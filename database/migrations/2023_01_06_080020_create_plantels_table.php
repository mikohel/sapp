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
        Schema::create('plantels', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_plantel');
            $table->bigInteger('numero_plantel');
            $table->integer('tipo');
            $table->string('folder_id');
            $table->string('oficio_id');
            $table->integer('cierre');
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
        Schema::dropIfExists('plantels');
    }
};
