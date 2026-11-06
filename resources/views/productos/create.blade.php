
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar producto | Punto Musical</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    <header>
        <a href="{{ url('/') }}">
            <img src="{{ asset('assets/logo.svg') }}"
                 alt="Logo de Punto Musical"
                 class="logo">
        </a>
        <h1>Agregar producto</h1>
    </header>

    <main>
        <h2>Registrar un nuevo producto</h2>

        <form action="{{ route('productos.store') }}" method="POST">
            @csrf

            <label for="nombre">Nombre del producto:</label>
            <input type="text" id="nombre" name="nombre"
                   value="{{ old('nombre') }}" required>
            @error('nombre')
                <p>{{ $message }}</p>
            @enderror

            <label for="categoria">Categoría:</label>
            <select id="categoria" name="categoria" required>
                <option value="">Selecciona una categoría</option>
                <option value="Discos">Discos</option>
                <option value="Vinilos">Vinilos</option>
                <option value="Instrumentos de cuerda">Instrumentos de cuerda</option>
            </select>
            @error('categoria')
                <p>{{ $message }}</p>
            @enderror

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion">{{ old('descripcion') }}</textarea>

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio"
                   step="0.01" min="0" value="{{ old('precio') }}" required>

            <label for="existencia">Existencias:</label>
            <input type="number" id="existencia" name="existencia"
                   min="0" value="{{ old('existencia', 0) }}" required>

            <label for="imagen">Ruta de la imagen (opcional):</label>
            <input type="text" id="imagen" name="imagen"
                   placeholder="assets/producto.jpg">

            <button type="submit">Guardar producto</button>
        </form>

        <a href="{{ route('productos.index') }}">Volver al catálogo</a>
        <a href="{{ url('/') }}">Volver al inicio</a>
    </main>

</body>
</html>
