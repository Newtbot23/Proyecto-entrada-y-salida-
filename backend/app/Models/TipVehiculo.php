<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipVehiculo extends Model
{
    protected $table = 'tip_vehiculo';
    protected $primaryKey = 'id_tip_vehiculo';

    protected $fillable = [
        'tip_vehiculo',
    ];
}
