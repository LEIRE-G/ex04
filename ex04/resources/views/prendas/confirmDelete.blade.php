<h1>Eliminar IPrenda</h1>

<p>
    ¿Estás seguro de que deseas eliminar esta prenda?
    <strong>"{{ $prenda->nombre }}"?</strong>
 </p>

 <form method="POST" action="{{ route('prendas.destroy', $prenda) }}">
    @csrf
    @method('DELETE')

    <button type="submit">Sí, eliminar</button>
    <a href="{{ route('prendas.index') }}">Cancelar</a>
 </form>