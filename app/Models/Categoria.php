<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table ='categorias';

    protected $fillable = [ 
        'nombre',
        'descripcion'
    ];

    public function productos()
    {
        return $this->hesMany(Producto::class, 'categoria_id');

    }


}
