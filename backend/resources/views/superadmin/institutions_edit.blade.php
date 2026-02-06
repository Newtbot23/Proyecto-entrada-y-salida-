<h2>Editar plan</h2>

<form action="{{ route('superadmin.institutions.update', $entidad->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nombre_entidad"
        value="{{ $entidad->nombre_entidad }}" required><br>
        
    <input type="email" name="correo"
        value="{{ $entidad->correo }}" required><br>

    <input type="text" name="direccion"
        value="{{ $entidad->direccion }}" required><br>

    <input type="text" name="nombre_titular"
        value="{{ $entidad->nombre_titular }}" required><br>

    <input type="number" name="telefono"
        value="{{ $entidad->telefono }}" required><br>

    <input type="number" name="nit"
        value="{{ $entidad->nit }}" step="0.01" required><br>

    <button type="submit">Actualizar</button>
</form>
