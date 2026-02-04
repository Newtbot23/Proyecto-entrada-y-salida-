<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LicenciaSistema extends Model
{
    protected $table = 'licencia_sistema';
    protected $primaryKey = 'id_licencia';

    protected $fillable = [
        'fecha_inicio',
        'fecha_vencimiento',
        'estado',
        'fecha_ultima_validacion',
        'creada_en',
        'id_plan_lic',
        'id_entidad',
    ];
}
