<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{

    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('usuario');
            $table->string('email')->unique();
            $table->string('clave');
            $table->boolean('estado');
            $table->string('role');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
