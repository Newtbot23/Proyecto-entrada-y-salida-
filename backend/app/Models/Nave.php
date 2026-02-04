<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nave extends Model
{
    protected $table = 'nave';
    protected $primaryKey = 'id_nave';

    protected $fillable = [
        'nave',
    ];

    public function ambientes()
{
    return $this->hasMany(Ambiente::class, 'id_nave');
}
}
