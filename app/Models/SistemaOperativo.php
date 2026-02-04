<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SistemaOperativo extends Model
{
    protected $table = 'sistema_operativo';
    protected $primaryKey = 'id_sistema_operativo';

    protected $fillable = [
        'sistema_operativo',
    ];
}
