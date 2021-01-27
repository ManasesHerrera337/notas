<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relagruposmaterias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('grupos_materias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('grupos_id')->foreign('grupos_id')->references('id')->on('grupos')->onDelete('cascade'); 
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
        Schema::dropIfExists('grupos_materias');
    }
}
