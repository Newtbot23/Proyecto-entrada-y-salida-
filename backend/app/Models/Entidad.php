<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    protected $table = 'entidad';
    protected $primaryKey = 'id_entidad';

    protected $fillable = [
        'nombre_entidad',
        'correo',
        'direccion',
        'id_licencia',
    ];
}
