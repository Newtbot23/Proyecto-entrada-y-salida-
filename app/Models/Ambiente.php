<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
    protected $table = 'ambiente';
    protected $primaryKey = 'id_ambiente';

    protected $fillable = [
        'ambiente',
        'id_nave',
    ];

    public function nave()
{
    return $this->belongsTo(Nave::class, 'id_nave');
}

public function asignaciones()
{
    return $this->hasMany(Asignacion::class, 'id_ambiente');
}

}
