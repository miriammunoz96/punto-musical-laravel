
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar producto | Punto Musical</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    <header>
        <a href="{{ url('/') }}">
            <img src="{{ asset('assets/logo.svg') }}"
                 alt="Logo de Punto Musical"
                 class="logo">
        </a>
        <h1>Editar producto</h1>
    </header>

    <main>
        <h2>Modificar información del producto</h2>

        <form action="{{ route('productos.update', $producto) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nombre">Nombre del producto:</label>
            <input type="text" id="nombre" name="nombre"
                   value="{{ old('nombre', $producto->nombre) }}" required>

            <label for="categoria">Categoría:</label>
            <select id="categoria" name="categoria" required>
                <option value="Discos" {{ old('categoria', $producto->categoria) == 'Discos' ? 'selected' : '' }}>Discos</option>
                <option value="Vinilos" {{ old('categoria', $producto->categoria) == 'Vinilos' ? 'selected' : '' }}>Vinilos</option>
                <option value="Instrumentos de cuerda" {{ old('categoria', $producto->categoria) == 'Instrumentos de cuerda' ? 'selected' : '' }}>Instrumentos de cuerda</option>
            </select>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion">{{ old('descripcion', $producto->descripcion) }}</textarea>

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio"
                   step="0.01" min="0"
                   value="{{ old('precio', $producto->precio) }}" required>

            <label for="existencia">Existencias:</label>
            <input type="number" id="existencia" name="existencia"
                   min="0"
                   value="{{ old('existencia', $producto->existencia) }}" required>

            <label for="imagen">Ruta de la imagen (opcional):</label>
            <input type="text" id="imagen" name="imagen"
                   value="{{ old('imagen', $producto->imagen) }}"
                   placeholder="assets/producto.jpg">

            <button type="submit">Guardar cambios</button>
        </form>

        <a href="{{ route('productos.index') }}">Volver al catálogo</a>
        <a href="{{ url('/') }}">Volver al inicio</a>
    </main>

</body>
</html>
