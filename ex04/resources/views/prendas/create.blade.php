@include('layout.title')



<h1>Nueva Prenda</h1>

@if ($errors->any())
    <div style ="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<form method="POST" action="{{ route('prendas.store') }}" >
    @csrf

    <input type="text" name="nombre" placeholder="Nombre " value="{{ old('nombre') }}">
    <input type="text" name="descripcion" placeholder="Descripción" value="{{ old('descripcion') }}">
    <input type="number" name="precio" step="0.01" placeholder="Precio" value="{{ old('precio') }}">
    
    <button type="submit">Guardar</button>
</form>