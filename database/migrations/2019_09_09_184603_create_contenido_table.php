<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContenidoTable extends Migration
{

    public function up()
    {
        Schema::create('contenido', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('usuario_id');
            $table->unsignedInteger('categoria_id');
            $table->string('contenido_titulo');
            $table->string('contenido_imagen');
            $table->longText('contenido_main');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('contenido');
    }
}
