<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Virtual Mi Barrio </title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fdf2f4; /* Fondo rosa pastel claro */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #d87093; /* Rosa viejo elegante */
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0 0 10px 0;
            font-size: 2.2rem;
        }

        header p {
            margin: 0;
            font-size: 1.1rem;
        }

        nav {
            background-color: #4a2c3d; /* Púrpura/marrón oscuro elegante */
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: #f7d6e0;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1rem;
            font-weight: 500;
        }

        nav a:hover {
            color: #ffffff;
        }

        main {
            width: 90%;
            max-width: 900px;
            margin: 40px auto;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bienvenida {
            background-color: #ffffff;
            padding: 50px 40px;
            text-align: center;
            border-radius: 12px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 4px 15px rgba(216, 112, 147, 0.15);
            border: 1px solid #f3d5dd;
        }

        .bienvenida h2 {
            margin: 0 0 15px 0;
            color: #4a2c3d;
            font-size: 1.8rem;
        }

        .bienvenida p {
            margin: 0 0 25px 0;
            color: #6c5b7b;
            font-size: 1.1rem;
        }

        .boton {
            display: inline-block;
            background-color: #e84393; /* Rosa cosmético vibrante */
            color: white;
            padding: 12px 28px;
            text-decoration: none;
            border-radius: 25px; /* Bordes redondeados estilo makeup */
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(232, 67, 147, 0.3);
            transition: background-color 0.3s;
        }

        .boton:hover {
            background-color: #d63031;
        }

        footer {
            padding: 20px;
            text-align: center;
            background-color: #4a2c3d;
            color: #f7d6e0;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tienda Virtual </h1>
        <p>Tu tienda en línea para encontrar el mejor maquillaje y cuidado personal</p>
    </header>

    <nav>
        <a href="/">Inicio</a>
        <a href="/productos">Productos</a>
        <a href="#">Categorías</a>
        <a href="#">Contacto</a>
    </nav>

    <main>
        <section class="bienvenida">
            <h2>Bienvenido a nuestra tienda</h2>
            <p>Encuentra los mejores productos de belleza en un solo lugar</p>
            <a href="/productos" class="boton">Ver Productos</a>
        </section>
    </main>

    <footer>
        <p>2026 Tienda virtual - Todos los derechos reservados</p>
    </footer>
</body>
</html>