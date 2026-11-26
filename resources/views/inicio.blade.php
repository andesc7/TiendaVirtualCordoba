<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $nombreHeladeria }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <header>
    <h1>Gelato Nieve &amp; Menta</h1>
    <p>Administrador: Andres Lopez | Sede: Pasto | Tel: +573107555409</p>
</header>

    <nav>
        <a href="/">Inicio</a>
        <a href="/productos">Productos</a>
        <a href="#">Categorías</a>
        <a href="#">Contacto</a>
    </nav>

    <main>
        <section class="hero">
            <h2>¡Bienvenido a {{ $nombreHeladeria }}!</h2>
            <p>Los mejores helados, copas y malteadas de {{ $ciudad }}.</p>

            @if ($edad >= 18)
                <div class="aviso ok">El administrador es mayor de edad ({{ $edad }} años).</div>
            @else
                <div class="aviso no">El administrador es menor de edad ({{ $edad }} años).</div>
            @endif

            @if ($diaSemana == 'martes')
                <div class="aviso promo"> ¡Hoy es martes de 2x1 en conos!</div>
            @else
                <div class="aviso ok">Hoy es {{ $diaSemana }}. ¡Te esperamos!</div>
            @endif

            @if ($saborDisponible)
                <div class="aviso ok"> Sabor especial: {{ $SaborEspecial }} (disponible)</div>
            @else
                <div class="aviso no">El sabor especial {{ $SaborEspecial }} está agotado.</div>
            @endif

            <a href="/productos" class="boton">Ver catálogo</a>
        </section>
    </main>

    <footer>
        <p>2026 {{ $nombreHeladeria }} - Todos los derechos reservados</p>
    </footer>
</body>
</html>
