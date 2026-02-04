<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    protected $table = 'ficha';
    protected $primaryKey = 'id_ficha';

    protected $fillable = [
        'id_programa',
        'id_ambiente',
        'id_jornada',
    ];

    public function programa()
{
    return $this->belongsTo(Programa::class, 'id_programa');
}

public function ambiente()
{
    return $this->belongsTo(Ambiente::class, 'id_ambiente');
}

public function jornada()
{
    return $this->belongsTo(Jornada::class, 'id_jornada');
}

public function usuarios()
{
    return $this->hasMany(DetalleFichaUsuario::class, 'id_ficha');
}

}
