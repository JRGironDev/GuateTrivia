<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('avatares', function (Blueprint $table) {
            $table->id();
            $table->string('NombreArchivo', 100);
            $table->string('TipoArchivo', 50);
            $table->binary('DatosImagen');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('avatares');
    }    
};
