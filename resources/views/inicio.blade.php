<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto Musical | Tu espacio musical</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>

<body>

    
    <div class="container">

        
        <header class="header">
            <img src="{{ asset('assets/logo.svg') }}" alt="Logo de Punto Musical" class="logo">
            <h2>PUNTO MUSICAL</h2>
        </header>

        <main class="main">

            <section class="hero">
                <p class="subtitle">EL LUGAR DONDE COMIENZA TU RITMO</p>

                <h1>La música es parte de lo que somos</h1>

                <p class="description">
                    Descubre el mundo de la música a través de discos,
                    vinilos e instrumentos. Encuentra nuevos sonidos
                    y disfruta de tus artistas favoritos.
                </p>

                <a href="https://www.youtube.com/watch?v=5NV6Rdv1a3I"
                   target="_blank"
                   class="video-button">
                    Escuchar música
                </a>
                <a href="{{ route('productos.index') }}" class="video-button">
                    Ver catálogo de productos
                </a>
            </section>

        </main>

       
        <footer class="footer">
            <p>Conceptualización de servicios en la nube</p>
            <p>Nombre: Miriam Lizbeth Muñoz Hernández</p>
            <p>Materia: Conceptualización de servicios en la nube</p>
            <p>Actividad 3.2. Sitio Web sencillo</p>
            <p class="copyright">© 2026 Punto Musical, Proyecto escolar</p>
        </footer>

    </div>

</body>
</html>
