<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Sede;
use App\Role;
use App\Almacen;

use Validator;
use Response;

use Carbon\Carbon;

use Illuminate\Http\Request;


class SedeController extends Controller
{
    public function index(Request $request)
    {

        $sedes = Sede::get();

        for ($i=0; $i <  count($sedes) ; $i++) { 
            
            
            $cantidad_registros = Almacen::from('dbo_almacen as al')
                                            ->join('dbo_catalogo as ca', 'ca.id_catalogo', '=', 'al.id_catalogo')
                                            ->join('dbo_subtipo as sbt', 'sbt.id_subtipo', '=', 'ca.id_subtipo')                          
                                            ->join('dbo_tipo as ti', 'ti.id_tipo', '=', 'sbt.id_tipo')
                                            ->join('sede as u', 'u.idsede', '=', 'al.id_sede')
                                            ->where('al.id_sede',   $sedes[$i]["idsede"])
                                            ->count();

            $sedes[$i]["cantidad_registros"] = $cantidad_registros;
                                          //  dd($cantidad_registros);

        }

       /// dd($sedes);

        return view('intranet.sede.index', compact('sedes'));
    }

    public function edit(Request $request, $id)
    {
        $sedes = Sede::find($id);

        //dd($sedes);

        return view('intranet.sede.edit', compact('sedes'));
    }
}
