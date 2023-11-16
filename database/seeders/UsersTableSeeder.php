<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Julio Pérez','email' => 'julioperez01@example.com','password' => 'Password_01', 'aboutMe' => 'Soy un niño de 10 años que le gusta jugar fútbol y videojuegos.','RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'3','nivelusuario'=>'100'],
            ['name' => 'María García','email' => 'mariagarcia02@example.com','password' => 'Password_02', 'aboutMe' => 'Soy una niña de 12 años que le gusta jugar con muñecas y pintar.','RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'7','nivelusuario'=>'90'],
            ['name' => 'Carlos Rodríguez','email' => 'carlosrodriguez03@example.com','password' => 'Password_03', 'aboutMe' => 'Soy un niño de 13 años que le gusta jugar con carritos y ver caricaturas.','RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'6','nivelusuario'=>'80'],
            ['name' => 'Ana Martínez','email' => 'anamartinez04@example.com','password' => 'Password_04', 'aboutMe' => 'Soy una niña de 10 años que le gusta jugar con muñecas y pintar.','RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'9','nivelusuario'=>'70'],
            ['name' => 'Luis Sánchez','email' => 'luissanchez05@example.com','password' => 'Password_05', 'aboutMe' => 'Soy un niño de 11 años que le gusta jugar con carritos y ver caricaturas.','RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'5','nivelusuario'=>'60'],
            ['name' => 'Pedro López','email' => 'pedrolopez06@example.com','password' => 'Password_06', 'aboutMe' => 'Soy un niño de 11 años que le gusta jugar con carritos y ver caricaturas.','RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'8','nivelusuario'=>'50'],
            ['name' => 'Jorge González','email' => 'jorgegonzalez07@example.com','password' => 'Password_07', 'aboutMe' => 'Soy un niño de 12 años que le gusta jugar con carritos y ver caricaturas.','RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'4','nivelusuario'=>'100'],
            ['name' => 'Andrea Hernández','email' => 'andreahernandez08@example.com','password' => 'Password_08', 'aboutMe' => 'Soy una niña de 13 años que le gusta jugar con muñecas y pintar.','RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'2','nivelusuario'=>'100'],
            ['name' => 'Pedro Ramírez','email' => 'pedroramirez09@example.com','password' => 'Password_09', 'aboutMe' => 'Soy un niño de 12 años que le gusta jugar con carritos y ver caricaturas.','RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'1','nivelusuario'=>'90'],
            ['name' => 'Sofia Torres','email' => 'sofiatorres10@example.com','password' => 'Password_10', 'aboutMe' => 'Soy una niña de 10 año que le gusta jugar con muñecas y pintar.','RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'10','nivelusuario'=>'60'],
            ['name' => 'Juan Pérez','email' => 'juanperez11@example.com','password' => 'Password_11', 'aboutMe' => 'Soy un niño de 11 años que le gusta jugar fútbol y videojuegos.','RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'7','nivelusuario'=>'80'],
            ['name' => 'María Ramirez','email' => 'mariaramirez12@example.com','password' => 'Password_12', 'aboutMe' => 'Soy una niña de 12 años que le gusta jugar con muñecas y pintar.','RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'7','nivelusuario'=>'50'],
            ['name' => 'Luis Rodríguez','email' => 'luisrodriguez13@example.com','password' => 'Password_13', 'aboutMe' => 'Soy un niño de 13 años que le gusta jugar con carritos y ver caricaturas.','RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'4','nivelusuario'=>'40'],
            ['name' => 'Karen Martínez','email' => 'karenmartinez14@example.com','password' => 'Password_14', 'aboutMe' => 'Soy una niña de 11 años que le gusta jugar con muñecas y pintar.','RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'2','nivelusuario'=>'100'],
            ['name' => 'Carlos Sánchez','email' => 'carlossanchez15@example.com','password' => 'Password_15', 'aboutMe' => 'Soy un niño de 12 años que le gusta jugar con carritos y ver caricaturas.','RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'0','nivelusuario'=>'90'],
            ['name' => 'Laura López','email' => 'lauralopez16@example.com','password' => 'Password_16', 'aboutMe' => 'Soy una niña de 13 años que le gusta jugar con muñecas y pintar.','RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'10','nivelusuario'=>'60'],
            ['name' => 'José Gómez','email' => 'josegomez17@example.com','password' => 'Password_17', 'aboutMe' => 'Soy un niño de 10 años que le gusta jugar con carritos y ver caricaturas.' ,'RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'2','nivelusuario'=>'30'],
            ['name' => 'Sofía Ramírez','email' => 'sofiaramirez18@example.com','password' => 'Password_18', 'aboutMe' => 'Soy una niña de 13 años que le gusta jugar con muñecas y pintar.','RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'3','nivelusuario'=>'100'],
            ['name' => 'Diego Torres','email' => 'diegotorres19@example.com','password' => 'Password_19', 'aboutMe' => 'Soy un niño de 11 años que le gusta jugar con carritos y ver caricaturas.','RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'3','nivelusuario'=>'20'],
            ['name' => 'Valentina Castro','email' => 'valentinacastro20@example.com','password' => 'Password_20', 'aboutMe' => 'Soy una niña de 12 años que le gusta jugar con muñecas y pintar.','RutaPerfil'=>'images/perfiles/profile_picture_default.png','mejortrofeo'=>'9','nivelusuario'=>'100'],
        ]);
    }
}
