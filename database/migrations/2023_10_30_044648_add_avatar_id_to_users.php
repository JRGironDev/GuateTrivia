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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('AvatarID')->default(1);
            $table->string('RutaPerfil', 150);
            $table->string('mejortrofeo')->default(0);
            $table->integer('nivelusuario')->default(0);
            $table->foreign('AvatarID')->references('ID')->on('Avatares');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['AvatarID']);
            $table->dropColumn(['AvatarID','RutaPerfil', 'mejortrofeo', 'nivelusuario']);
        });
    }
};
