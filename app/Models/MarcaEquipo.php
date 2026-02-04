<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarcaEquipo extends Model
{
    protected $table = 'marca_equipo';
    protected $primaryKey = 'id_marca';

    protected $fillable = [
        'marca',
    ];
}
