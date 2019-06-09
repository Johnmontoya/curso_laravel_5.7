<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPermisoRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_rol', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('rol_id')->unsigned()->index();
            $table->foreign('rol_id', 'fk_permisoRol_rol')->references('id')->on('rol')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('permiso_id')->unsigned()->index();
            $table->foreign('permiso_id', 'fk_permisoRol_permiso')->references('id')->on('permiso')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('permiso_rol');
    }
}
