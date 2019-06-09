<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaLibroPrestamo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_prestamo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('usuario_id')->unsigned()->index();;
            $table->foreign('usuario_id', 'fk_libroP_usuario')->references('id')->on('usuario')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('libro_id')->unsigned()->index();;          
            $table->foreign('libro_id', 'fk_libroP_libro')->references('id')->on('libro')->onDelete('cascade')->onUpdate('cascade');
            $table->date('fecha_prestamo');            
            $table->string('prestado_a', 100)->nullable()->default('text');
            $table->boolean('estado')->nullable()->default(false);
            $table->date('fecha_devolucion');
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
        Schema::dropIfExists('libro_prestamo');
    }
}
