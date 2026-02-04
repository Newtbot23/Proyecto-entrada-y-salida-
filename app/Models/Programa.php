<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programa';
    protected $primaryKey = 'id_programa';

    protected $fillable = [
        'programa',
    ];
}
