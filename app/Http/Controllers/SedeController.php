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


class SedeController extends Controller
{
    public function index(Request $request)
    {
        return view('intranet.sede.index');
    }
}
