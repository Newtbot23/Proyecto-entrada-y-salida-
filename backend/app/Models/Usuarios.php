<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';

    protected $filiable = [
        'doc',
        'tipo_doc',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'telefono',
        'correo',
        'imagen',
        'codigo_qr',
        'id_rol',
        'id_licencia'
    ];

    public function tipoDoc()
{
    return $this->belongsTo(TipoDoc::class, 'id_tip_doc');
}

}
