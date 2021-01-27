<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Restricciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restricciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('materias_id')->foreign('materias_id')->references('id')->on('materias')->onDelete('cascade');
            $table->string('anio'); 
            $table->integer('cant_hembras');
            $table->integer('cant_varones');
            $table->integer('cant_total');
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
        Schema::dropIfExists('restricciones');
    }
}
