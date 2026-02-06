<?php

namespace App\Http\Controllers;

use App\Models\Entidades;
use Illuminate\Http\Request;

class EntidadesController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->get('buscar');

        $institutions = Entidades::when($busqueda, function ($query, $busqueda) {
            $query->where('nombre_entidad', 'like', "%$busqueda%");
        })->paginate(5);

        return view('superadmin.institutions', compact('institutions', 'busqueda'));
    }

    public function create()
{
    return view('superadmin.institutions_create');
}

    public function store(Request $request)
    {
        $request->validate([
            'nombre_entidad' => 'required|string|max:200',
            'correo' => 'required|email',
            'direccion' => 'required|string',
            'nombre_titular' => 'required|string|max:200',
            'telefono' => 'required|numeric',
            'nit' => 'required|numeric'
        ]);

        Entidades::create($request->all());

        return redirect()->route('superadmin.institutions.index')
            ->with('success', 'Entidad creada correctamente');
    }

    public function edit($id)
    {
        $entidad = Entidades::findOrFail($id);
        return view('superadmin.institutions_edit', compact('entidad'));
    }

    public function update(Request $request, $id)
    {
        $entidad = Entidades::findOrFail($id);

        $request->validate([
            'nombre_entidad' => 'required|string|max:200',
            'correo' => 'required|email',
            'direccion' => 'required|string',
            'nombre_titular' => 'required|string|max:200',
            'telefono' => 'required|numeric',
            'nit' => 'required|numeric'
        ]);

        $entidad->update($request->all());

        return redirect()->route('superadmin.institutions.index')
            ->with('success', 'Entidad actualizada');
    }

    public function destroy($id)
    {
        Entidades::findOrFail($id)->delete();

        return redirect()->route('superadmin.institutions.index')
            ->with('success', 'Entidad eliminada');
    }
}
