<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres'); 
            $table->string('apellidos'); 
            $table->string('cedula')->unique();
            $table->string('fechaNac');  
            $table->integer('edad');
            $table->string('correo')->unique(); 
            $table->integer('anio');
            $table->integer('seccion');
            $table->string('status');  
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
       Schema::dropIfExists('alumnos');
    }
}
