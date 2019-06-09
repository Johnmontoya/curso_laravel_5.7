<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaLibro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('libro', 100)->nullable()->default('text');
            $table->string('isbn', 100)->nullable()->default('text');
            $table->string('autor', 100)->nullable()->default('text');
            $table->unsignedTinyInteger('cantidad');
            $table->string('editorial', 100)->nullable()->default('text');
            $table->string('foto', 100)->nullable()->default('text');
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
        Schema::dropIfExists('libro');
    }
}
