<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LicenciasSistema extends Model
{
    protected $table = 'licencias_sistema'; // 👈 NOMBRE REAL DE TU TABLA

    protected $primaryKey = 'id_licencia';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
    ];
}
