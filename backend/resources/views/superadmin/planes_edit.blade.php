<h2>Editar plan</h2>

<form action="{{ route('superadmin.planes.update', $plan->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nombre_plan"
        value="{{ $plan->nombre_plan }}" required>

    <textarea name="caracteristicas" required>{{ $plan->caracteristicas }}</textarea>

    <input type="date" name="duracion_plan"
        value="{{ $plan->duracion_plan }}" required>

    <input type="number" name="precio_plan"
        value="{{ $plan->precio_plan }}" step="0.01" required>

    <button type="submit">Actualizar</button>
</form>
