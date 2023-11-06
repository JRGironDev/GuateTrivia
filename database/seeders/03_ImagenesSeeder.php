<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ruta a la imagen en la carpeta "public"
        $imagen1Path = public_path('images/desconocido.png');
        $imagen2Path = public_path('images/ninio3.jpg');
        $imagen3Path = public_path('images/niño2.jpg');
        $imagen4Path = public_path('images/niño3.jpg');
        $imagen5Path = public_path('images/niño4.jpg');
        $imagen6Path = public_path('images/niño5.jpg');

        // Leer el contenido de las imágenes
        $imagen1Datos = file_get_contents($imagen1Path);
        $imagen2Datos = file_get_contents($imagen2Path);
        $imagen3Datos = file_get_contents($imagen3Path);
        $imagen4Datos = file_get_contents($imagen4Path);
        $imagen5Datos = file_get_contents($imagen5Path);
        $imagen6Datos = file_get_contents($imagen6Path);

        // Insertar registros en la tabla
        DB::table('avatares')->insert([
            'NombreArchivo' => 'desconocido.png',
            'TipoArchivo' => 'png',
            'DatosImagen' => $imagen1Datos,
        ]);

        DB::table('avatares')->insert([
            'NombreArchivo' => 'ninio3.jpg',
            'TipoArchivo' => 'jpg',
            'DatosImagen' => $imagen2Datos,
        ]);

        DB::table('avatares')->insert([
            'NombreArchivo' => 'niño2.jpg',
            'TipoArchivo' => 'jpg',
            'DatosImagen' => $imagen3Datos,
        ]);

        DB::table('avatares')->insert([
            'NombreArchivo' => 'niño3.jpg',
            'TipoArchivo' => 'jpg',
            'DatosImagen' => $imagen4Datos,
        ]);

        DB::table('avatares')->insert([
            'NombreArchivo' => 'niño4.jpg',
            'TipoArchivo' => 'jpg',
            'DatosImagen' => $imagen5Datos,
        ]);

        DB::table('avatares')->insert([
            'NombreArchivo' => 'niño5.jpg',
            'TipoArchivo' => 'jpg',
            'DatosImagen' => $imagen5Datos,
        ]);

    }
}
