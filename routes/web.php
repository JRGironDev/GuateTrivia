<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\AmistadController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\preguntasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/select-avatar',function () {
    return view('select-avatar');
});

//revisar
Route::get('/buscar-amigo',function () {
    return view('buscar-amigo');
});

// imagenes avatar
Route::resource('/avatar', AvatarController::class);
Route::get('avatar/{id}', 'AvatarController@show');

Route::resource('/amistad', AmistadController::class)->only([
    'destroy'
]);

Route::delete('/amistad/{ID}', [AmistadController::class, 'destroy'])->name('amistad.destroy');
Route::post('/enviar-solicitud-amistad', [AmistadController::class, 'enviarSolicitudAmistad' ])->name('enviar-solicitud-amistad');

// vistas de amistad
Route::get('/mis-amigos', [AmistadController::class, 'misamigos']);
Route::get('/buscar-amigos', [AmistadController::class, 'buscaramigos']);
Route::get('/solicitud-enviada', [AmistadController::class, 'solicitudenviada']);
Route::get('/solicitud-recibida', [AmistadController::class, 'solicitudrecibida']);

Route::get('/solicitud-recibida', [AmistadController::class, 'solicitudrecibida'])->name('solicitud-recibida');
Route::get('/solicitud-enviada', [AmistadController::class, 'solicitudenviada'])->name('solicitud-enviada');
Route::get('/mis-amigos', [AmistadController::class, 'misamigos'])->name('mis-amigos');
Route::patch('/amistad/aceptar/{ID}', [AmistadController::class, 'aceptar'])->name('amistad.aceptar');
Route::get('/buscar-amigos', [AmistadController::class, 'buscaramigos'])->name('buscar-amigos');



Route::get('/search-amigos', 'AmistadController@buscarAmigo')->name('buscar_amigos');

/*Rutas para preguntas*/
Route::get('/preguntas', [preguntasController::class, 'index']);
Route::get('/resultado', [preguntasController::class, 'resultado'])->name('preguntas.resultado');


require __DIR__.'/auth.php';
