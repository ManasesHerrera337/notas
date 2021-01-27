<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Incritos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscritos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('alumnos_id')->foreign('alumnos_id')->references('id')->on('alumnos')->onDelete('cascade'); 
            $table->unsignedInteger('materias_id')->foreign('materias_id')->references('id')->on('materias')->onDelete('cascade');   
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
         Schema::dropIfExists('inscritos');
    }
}
