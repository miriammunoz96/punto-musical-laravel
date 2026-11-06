
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo | Punto Musical</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    <header>
        <a href="{{ url('/') }}">
            <img src="{{ asset('assets/logo.svg') }}"
                 alt="Logo de Punto Musical"
                 class="logo">
        </a>
        <h1>Catálogo de productos</h1>
        <p>Encuentra tu próximo sonido favorito.</p>
    </header>

    <main>
        <h2>Nuestros productos</h2>

        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <a href="{{ route('productos.create') }}">
            Agregar producto
        </a>

        @if($productos->isEmpty())
            <p>Por el momento no hay productos registrados.</p>
        @else
            <div class="catalogo-productos">
                @foreach($productos as $producto)
                    <article class="producto">
                        @if($producto->imagen)
                            <img src="{{ asset($producto->imagen) }}"
                                 alt="{{ $producto->nombre }}">
                        @endif

                        <h3>{{ $producto->nombre }}</h3>
                        <p>{{ $producto->categoria }}</p>
                        <p>{{ $producto->descripcion }}</p>
                        <p>${{ number_format($producto->precio, 2) }}</p>
                        <p>Existencias: {{ $producto->existencia }}</p>

                        <a href="{{ route('productos.show', $producto) }}">
                            Ver detalles
                        </a>

                        <a href="{{ route('productos.edit', $producto) }}">
                            Editar
                        </a>

                        <form action="{{ route('productos.destroy', $producto) }}"
                              method="POST"
                              onsubmit="return confirm('¿Eliminar este producto?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </article>
                @endforeach
            </div>
        @endif

        <a href="{{ url('/') }}">Volver al inicio</a>
    </main>

</body>
</html>
