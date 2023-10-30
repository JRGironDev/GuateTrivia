<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amistad extends Model
{
    use HasFactory;

    protected $table = 'amistades'; 

    protected $fillable = [
        // Otros campos
        'Persona1',
        'Persona2',
        'EstadoSolicitud',
    ];

    public $timestamps = false; // Deshabilitar registro de fechas

    // En el modelo Amistad
    // public function user()
    // {
    //     return $this->belongsTo(user::class, 'id');
    // }

    // En el modelo "Amistades"
    public function persona1()
    {
        return $this->belongsTo(users::class, 'Persona1');
    }

    public function persona2()
    {
        return $this->belongsTo(users::class, 'Persona2');
    }

}

