@include('layout.title')

<h1> Editar Ingrediente</h1>

@if ($errors->any())
    <div style ="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<form method="POST" action="{{ route('prendas.update', $prenda->id) }}" >
    @csrf
    @method('PUT')

    <input type="text" name="nombre" value="{{ $prenda->nombre }}">
    <input type="text" name="descripcion" value="{{ $prenda->descripcion }}">
    <input type="number" name="precio" value="{{ $prenda->precio }}">
    <button type="submit">Actualizar</button>
</form>