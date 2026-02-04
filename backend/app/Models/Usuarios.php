<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'usuarios';
    protected $primaryKey = 'doc';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'doc',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'telefono',
        'correo',
        'imagen',
        'codigo_qr',
        'contrasena',
        'id_rol',
        'id_entidad'
    ];

    protected $hidden = [
        'contrasena',
    ];

    /* =========================
       RELACIONES
    ========================= */

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'id_rol');
    }

    public function entidad()
    {
        return $this->belongsTo(Entidad::class, 'id_entidad');
    }

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'doc', 'doc');
    }

    public function asignaciones()
{
    return $this->hasMany(Asignacion::class, 'doc', 'doc');
}

public function registrosEquipos()
{
    return $this->hasMany(RegistroEquipos::class, 'doc', 'doc');
}

public function registros()
{
    return $this->hasMany(Registro::class, 'doc', 'doc');
}

public function fichas()
{
    return $this->hasMany(DetalleFichaUsuario::class, 'doc', 'doc');
}

}
