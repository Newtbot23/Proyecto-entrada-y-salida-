<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Entidades extends Model
{

    protected $table = 'entidades'; // solo si tu tabla NO se llama entidades

    protected $fillable = [
        'nombre_entidad',
        'correo',
        'direccion',
        'nombre_titular',
        'telefono',
        'nit'
    ];
}
