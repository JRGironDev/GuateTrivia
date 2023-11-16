<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosAmistadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('estadosamistad')->insert([
            [
                'codigo' => 1,
                'estado' => 'Solicitud Enviada',
            ],
            [
                'codigo' => 2,
                'estado' => 'Amigos',
            ],
        ]);
    }
}
