<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipo';
    protected $primaryKey = 'id_equipo';

    protected $fillable = [
        'tipo',
        'serial',
        'placa_sena',
        'id_marca',
        'estado',
        'modelo',
        'tipo_equipo',
        'caracteristicas',
        'id_sistema_operativo',
    ];

    public function marca()
    {
        return $this->belongsTo(MarcaEquipo::class, 'id_marca');
    }

    public function sistemaOperativo()
    {
        return $this->belongsTo(SistemaOperativo::class, 'id_sistema_operativo');
    }

    public function asignaciones()
{
    return $this->hasMany(Asignacion::class, 'id_equipo');
}

public function registros()
{
    return $this->hasMany(RegistroEquipos::class, 'id_equipo');
}
}
