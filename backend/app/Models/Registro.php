<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table = 'registro';
    protected $primaryKey = 'id_registro';

    protected $fillable = [
        'doc',
        'placa',
        'id_equipo',
        'fecha',
        'hora_entrada',
        'hora_salida'
    ];
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'doc', 'doc');
    }

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class, 'placa', 'placa');
    }

    public function equipo()
    {
        return $this->belongsTo(Equipo::class, 'id_equipo');
    }
}
