<?php

namespace App\Http\Controllers;


use App\User;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    

    public function index()
    {
        return view('intranet.user.index');
    }


}
