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
        Schema::create('amistades', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Persona1')->unsigned();
            $table->bigInteger('Persona2')->unsigned();
            $table->datetime('FechaConfirmacion')->nullable();
            $table->integer('EstadoSolicitud')->nullable();
            
            $table->unique(['Persona1', 'Persona2'], 'unique_amistades');
            $table->index('EstadoSolicitud');
            $table->index('Persona2');
            
            $table->foreign('EstadoSolicitud')->references('codigo')->on('estadosamistad');
            $table->foreign('Persona1')->references('id')->on('users');
            $table->foreign('Persona2')->references('id')->on('users');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('amistades');
    }
};
