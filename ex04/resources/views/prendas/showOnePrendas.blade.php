@include('layout.title')

<h1>{{ $prenda->nombre }}</h1>
<p>Descripción: {{ $prenda->descripcion }}</p>
<p>Precio: ${{ $prenda->precio }}</p>