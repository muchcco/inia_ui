<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Sede;
use App\Role;

use Validator;
use Response;

use Carbon\Carbon;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    

    public function index(Request $request)
    {   
        $usuario = User::from('users as u')
                    ->join('sede as se', 'se.idsede', '=', 'u.id_sede')
                    ->join('roles as rl', 'rl.id', '=', 'u.role_id')
                    ->select(DB::raw( 'CONCAT( u.name, " ", u.last_name ) as nombres'), 'se.denominacion', 'rl.descripcion as rol_name' , 'u.name', 'u.last_name', 'u.email', 'se.direccion')
                    ->where( 'u.id', Auth()->user()->id )
                    ->get();

        //dd($usuario);

        return view('intranet.user.index', compact('usuario'));
    }


}
