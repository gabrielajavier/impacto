<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoContenidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_contenidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo_contenido_url')->nullable();
            $table->string('tipo_contenido_leyenda');
            $table->longText('tipo_contenido_texto');
            $table->string('tipo_contenido_file')->nullable();
            $table->string('tipo_archivo');
            $table->unsignedInteger('contenido_id');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('tipo_contenidos');
    }
}
