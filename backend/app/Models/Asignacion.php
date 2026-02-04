<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table = 'asignaciones';
    protected $primaryKey = 'id_asignacion';

    protected $fillable = [
        'doc',
        'id_ambiente',
        'id_equipo',
        'estado'
    ];
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'doc', 'doc');
    }
    public function ambiente()
    {
        return $this->belongsTo(Ambiente::class, 'id_ambiente');
    }
    public function equipo()
    {
        return $this->belongsTo(Equipo::class, 'id_equipo');
    }
}
