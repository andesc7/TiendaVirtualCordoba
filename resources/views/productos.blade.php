<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - Gelato Nieve & Menta</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>🍨 Catálogo de Helados 🍨</h1>
    </header>

    <nav>
        <a href="/">Inicio</a>
        <a href="/productos">Productos</a>
        <a href="#">Categorías</a>
        <a href="#">Contacto</a>
    </nav>

    <main>
        @foreach ($categorias as $id => $categoria)
            <section class="categoria">
                <h3>{{ $categoria['icono'] }} {{ $categoria['nombre'] }}</h3>
                <p>{{ $categoria['descripcion'] }}</p>

                <div class="grid">
                    @foreach ($productos as $producto)
                        @if ($producto['categoria_id'] == $id)
                            <article class="card {{ $producto['stock'] > 0 ? '' : 'agotado' }}">
                                <div class="icono">{{ $categoria['icono'] }}</div>
                                <h4>{{ $producto['nombre'] }}</h4>
                                <p>{{ $producto['descripcion'] }}</p>
                                <div class="precio">${{ number_format($producto['precio'], 0, ',', '.') }}</div>
                                @if ($producto['stock'] > 0)
                                    <span class="etiqueta">Stock: {{ $producto['stock'] }}</span>
                                @else
                                    <span class="etiqueta rojo">Agotado</span>
                                @endif
                            </article>
                        @endif
                    @endforeach
                </div>
            </section>
        @endforeach

        <div style="text-align:center"><a href="/" class="boton">Volver al inicio</a></div>
    </main>

    <footer>
        <p>2026 Gelato Nieve & Menta - Todos los derechos reservados</p>
    </footer>
</body>
</html>
