<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleFichaUsuario extends Model
{
    protected $table = 'detalle_ficha_usuario';
    protected $primaryKey = 'id_ficha_usuario';
    protected $fillable = [
        'id_ficha',
        'doc',
        'tipo_participante'
    ];
    public function ficha()
    {
        return $this->belongsTo(Ficha::class, 'id_ficha');
    }
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'doc', 'doc');
    }
}
