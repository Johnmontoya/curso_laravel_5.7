<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarioRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_rol', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('estado')->nullable()->default(false);
            $table->bigInteger('rol_id')->unsigned()->index();
            $table->foreign('rol_id', 'fk_usuarioRol_rol')->references('id')->on('rol')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('usuario_id')->unsigned()->index();;
            $table->foreign('usuario_id', 'fk_usuarioRol_usuario')->references('id')->on('usuario')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('usuario_rol');
    }
}
