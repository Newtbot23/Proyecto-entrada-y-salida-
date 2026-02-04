<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroEquipos extends Model
{
    protected $table = 'registro_equipos';
    protected $primaryKey = 'id_registro_equipo';
    protected $fillable = [
        'id_equipo',
        'doc',
        'fecha',
        'observacion'
    ];
    public function equipo()
    {
        return $this->belongsTo(Equipo::class, 'id_equipo');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'doc', 'doc');
    }
}
