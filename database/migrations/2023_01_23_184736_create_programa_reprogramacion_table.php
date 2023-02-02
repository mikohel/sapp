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
        Schema::create('programa_reprogramacion', function (Blueprint $table) {
            $table->unsignedBigInteger('reprogramacion_id');
            $table->unsignedBigInteger('programa_id');
            $table->foreign('reprogramacion_id')->references('id')->on('reprogramacions');
            $table->foreign('programa_id')->references('id')->on('programas');
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
        Schema::dropIfExists('programa_reprogramacion');
    }
};
