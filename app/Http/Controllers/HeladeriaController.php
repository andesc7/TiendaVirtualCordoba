<?php

namespace App\Http\Controllers;

class HeladeriaController extends Controller
{
    public function inicio()
    {
        $datos = [
            'nombreHeladeria' => 'Gelato Nieve & Menta',
            'administrador'   => 'Nombre del Administrador',
            'ciudad'          => 'Pasto',
            'edad'            => 20,
            'diaSemana'       => 'martes',
            'SaborEspecial'   => 'Maracuyá Tropical',
            'saborDisponible' => true,
        ];

        return view('inicio', $datos);
    }

    public function productos()
    {
        // La información se maneja con arreglos (sin Eloquent), como pide el taller.
        $categorias = [
            1 => ['nombre' => 'Helados de Cono', 'descripcion' => 'Clásicos en cono crujiente.', 'icono' => '🍦'],
            2 => ['nombre' => 'Copas',           'descripcion' => 'Copas cargadas de toppings.', 'icono' => '🍨'],
            3 => ['nombre' => 'Malteadas',       'descripcion' => 'Cremosas y bien frías.',      'icono' => '🥤'],
        ];

        $productos = [
            ['nombre' => 'Cono de Vainilla',    'descripcion' => 'Vainilla natural.',          'precio' => 4500,  'stock' => 20, 'categoria_id' => 1],
            ['nombre' => 'Cono de Menta',       'descripcion' => 'Menta con chips de chocolate.', 'precio' => 5000, 'stock' => 12, 'categoria_id' => 1],
            ['nombre' => 'Cono Maracuyá',       'descripcion' => 'Sabor tropical.',            'precio' => 5000,  'stock' => 0,  'categoria_id' => 1],
            ['nombre' => 'Copa Brownie',        'descripcion' => 'Helado, brownie y salsa.',   'precio' => 12000, 'stock' => 8,  'categoria_id' => 2],
            ['nombre' => 'Copa Frutal',         'descripcion' => 'Frutas frescas y helado.',   'precio' => 11000, 'stock' => 5,  'categoria_id' => 2],
            ['nombre' => 'Malteada de Fresa',   'descripcion' => 'Con crema chantilly.',       'precio' => 9500,  'stock' => 15, 'categoria_id' => 3],
            ['nombre' => 'Malteada de Chocolate','descripcion' => 'Chocolate intenso.',        'precio' => 9500,  'stock' => 0,  'categoria_id' => 3],
        ];

        return view('productos', compact('categorias', 'productos'));
    }
}
