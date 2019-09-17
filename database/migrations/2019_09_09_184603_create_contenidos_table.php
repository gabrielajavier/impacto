<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContenidosTable extends Migration
{

    public function up()
    {
        Schema::create('contenidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('usuario_id');
            $table->unsignedInteger('categoria_id');
            $table->string('contenidotitulo');
            $table->longText('contenidoimagen');
            $table->longText('contenidomain');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('contenido');
    }
}
