<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalleingreso extends Model
{
    protected $table = 'dbo_detalle_ingreso';

    protected $primaryKey = 'id_detalle_ingreso';

    
    protected $fillable = [ 'id_ingreso', 'id_almacen', 'id_catalogo',  'cantidad_muestra', 'precio' ];

    public $timestamps = false;
}
