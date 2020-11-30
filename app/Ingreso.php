<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table = 'dbo_ingreso';

    protected $primaryKey = 'id_ingreso';

    
    protected $fillable = [ 'id_sede', 'id_proveedor' , 'id_catalogo', 'total_monto', 'monto', 'fecha', 'estado', 'observacion' ];
}
