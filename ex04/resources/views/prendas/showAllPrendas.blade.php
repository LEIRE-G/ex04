@include('layout.title')

@if(session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

<table>
    <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
    </tr>
    @foreach ($prendas as $prenda)
        <tr>
            <td><a href="{{ route('prendas.show', $prenda->id) }}">{{ $prenda->nombre }}</a></td>
            <td><a href="{{ route('prendas.edit', $prenda->id) }}">Editar</a></td>
            <td><a href="{{ route('prendas.confirmDelete', $prenda) }}">Eliminar</a></td>
        </tr>
    @endforeach
</table>