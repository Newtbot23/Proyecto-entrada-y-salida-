<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculo';
    protected $primaryKey = 'placa';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'placa',
        'id_tip_vehiculo',
        'doc',
        'marca',
        'modelo',
        'color',
        'descripcion',
    ];

    public function tipo()
{
    return $this->belongsTo(TipVehiculo::class, 'id_tip_vehiculo');
}

public function usuario()
{
    return $this->belongsTo(Usuario::class, 'doc', 'doc');
}

public function registros()
{
    return $this->hasMany(Registro::class, 'placa', 'placa');
}


}
