<div>
    @forelse ($planes as $plan)
        <p>{{ $plan->id }}</p>
        <h2>{{ $plan->nombre_plan }}</h2>
        <h3>Duracion</h3>
        <p>{{ $plan->duracion_plan }}</p>
        <h3>caracteristicas</h3>
        <p>{{ $plan->caracteristicas }}</p>
        <h3>precio</h3>
        <p>{{ $plan->precio_plan }}</p>
    @empty
        <p>No hay planes con el momento</p>
    @endforelse
</div>


<button type="submit">Guardar</button>