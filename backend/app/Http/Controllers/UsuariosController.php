<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Models\Roles;
use App\Models\LicenciasSistema;
use App\Models\TipoDoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function create()
    {
        $tiposDoc = TipoDoc::all();
        $roles = Roles::all();
        $licencias = LicenciasSistema::all();

        return view('superadmin.usuarios_create', compact(
            'tiposDoc',
            'roles',
            'licencias'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_tip_doc' => 'required|exists:tipo_doc,id_tip_doc',
            'doc' => 'required|numeric|unique:usuarios,doc',
            'primer_nombre' => 'required|string|max:50',
            'segundo_nombre' => 'nullable|string|max:50',
            'primer_apellido' => 'required|string|max:50',
            'segundo_apellido' => 'nullable|string|max:50',
            'telefono' => 'required|string|max:13',
            'correo' => 'required|email|unique:usuarios,correo',
            'imagen' => 'nullable|image',
            'codigo_qr' => 'required|string|max:300',
            'contrasena' => 'required|min:6',
            'id_rol' => 'required|exists:roles,id_rol',
            'id_licencia' => 'required|exists:licencias_sistema,id_licencia',
        ]);

        $rutaImagen = null;
        if ($request->hasFile('imagen')) {
            $rutaImagen = $request->file('imagen')->store('usuarios', 'public');
        }

        Usuarios::create([
            'id_tip_doc' => $request->id_tip_doc,
            'doc' => $request->doc,
            'primer_nombre' => $request->primer_nombre,
            'segundo_nombre' => $request->segundo_nombre,
            'primer_apellido' => $request->primer_apellido,
            'segundo_apellido' => $request->segundo_apellido,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'imagen' => $rutaImagen,
            'codigo_qr' => $request->codigo_qr,
            'contrasena' => Hash::make($request->contrasena),
            'id_rol' => $request->id_rol,
            'id_licencia' => $request->id_licencia,
        ]);

        return redirect()->route('usuarios.create')
            ->with('success', 'Usuario registrado correctamente');
    }
}
