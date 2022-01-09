<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Perros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perro', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Edad');
            $table->string('Raza');
            $table->string('Color');
            $table->string('Tamaño');
            
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perro');
    }
}
