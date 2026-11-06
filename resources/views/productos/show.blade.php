
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del producto | Punto Musical</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    <header>
        <a href="{{ url('/') }}">
            <img src="{{ asset('assets/logo.svg') }}"
                 alt="Logo de Punto Musical"
                 class="logo">
        </a>
        <h1>Detalles del producto</h1>
    </header>

    <main>
        <article class="producto">

            @if($producto->imagen)
                <img src="{{ asset($producto->imagen) }}"
                     alt="{{ $producto->nombre }}">
            @endif

            <h2>{{ $producto->nombre }}</h2>

            <p><strong>Categoría:</strong> {{ $producto->categoria }}</p>

            <p><strong>Descripción:</strong>
                {{ $producto->descripcion ?? 'Sin descripción disponible.' }}
            </p>

            <p><strong>Precio:</strong>
                ${{ number_format($producto->precio, 2) }}
            </p>

            <p><strong>Existencias:</strong> {{ $producto->existencia }}</p>

            <a href="{{ route('productos.edit', $producto) }}">
                Editar producto
            </a>

            <a href="{{ route('productos.index') }}">
                Volver al catálogo
            </a>
            <a href="{{ url('/') }}">Volver al inicio
            </a>
        </article>
    </main>

</body>
</html>
