<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Catalogo;
use App\Ingreso;
use App\Sede;
use App\Almacen;
use App\Detalleingreso;
use App\Subtipo;
use App\Tipo;
use App\Proveedor;

use DataTables;
use Validator;
use Response;

use Carbon\Carbon;


class IngresoController extends Controller
{
    public function index(Request $request)
    {
       
        if($request->ajax()){
            $data = Ingreso::from('dbo_ingreso as i')
                            ->select('u.denominacion', DB::raw( 'CONCAT( p.nombre, " ", p.ApePat, " ", p.ApeMat ) as nombres'), 'i.observacion', 'i.fecha' , 'i.id_ingreso')                            
                            ->join('dbo_proveedor as p', 'p.id_proveedor', '=', 'i.id_proveedor')
                            ->join('sede as u', 'u.idsede', '=', 'i.id_sede')
                            ->where('u.idsede', auth()->user()->id_sede)
                            ->get();

           //dd($data);
            // agregar use DataTables; al controlador
            
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                        //var_dump($row);
   
                        $editUrl = url('intranet/ingreso/'.$row->id_ingreso.'/edit');
                        $btn = '<a href="'.$editUrl.'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary btn-sm">Edit</a>';

                           //$btn = $btn.' <a href="javascript:void(0)"  data-id="'.$row->id.'" data-original-title="Ver" class="ver btn btn-success btn-sm verDevolucion" id="botonView">Ver</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteEntrega">Eliminar</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }


        return view('intranet.ingreso.index');
    }

    public function create(Request $request)
    {  

        $tipos = Almacen::from('dbo_almacen as al')
                        ->select('ca.caracteristica as nombre', 't.id_tipo')
                        ->join('dbo_catalogo as ca', 'ca.id_catalogo', '=', 'al.id_catalogo')
                        ->join('dbo_subtipo as st', 'st.id_subtipo', '=', 'ca.id_subtipo')
                        ->join('dbo_tipo as t', 't.id_tipo', '=', 'st.id_tipo')
                        ->where( 'al.id_sede', auth()->user()->id_sede )
                        ->groupBy('ca.caracteristica', 't.id_tipo')
                        ->get();
                        //dd($tipos);

        $sedes = Sede::where( 'idsede', auth()->user()->id_sede )->get();
       // dd($sedes);
        
        $proveedor = Proveedor::select(DB::raw( 'CONCAT( nombre, " ", ApePat, " ", ApeMat ) as nombres'),'id_proveedor', 'email' )
                        ->get();

        //dd($proveedor);

        return view('intranet.ingreso.create', compact('tipos', 'proveedor', 'sedes'));
    }

    public function subtipos(Request $request)
    {

        $html = Subtipo::where('id_tipo', $request->id)->get();
    
        return $html;
    }

    public function subtiposca(Request $request)
    {

        $html = Catalogo::where('id_subtipo', $request->id)->get();
    
        return $html;
    }

    public function store(Request $request)
    {
        //return $request->all();

        try{
            DB::beginTransaction();

            $ingreso = Ingreso::create($request->all());

            $id_almacen = $request->get('id_almacen'); //array()
            $cantidad_muestra = $request->get('cantidad_muestra');
            $precio = $request->get('precio');

            $cont = 0;

            while($cont < count($id_almacen))
            {
                $detalle = new Detalleingreso;
                //$ingreso->id del ingreso que recien se guardo
                $detalle->id_ingreso = $ingreso->id_ingreso;
                //id_almacen de la posición cero
                $detalle->id_almacen = $id_almacen[$cont];
                $detalle->cantidad_muestra = $cantidad_muestra[$cont];
                $detalle->precio = $precio[$cont];
                $detalle->save();

                $cont = $cont + 1;
            }
            DB::commit();
        }catch(Exception $e){
            //Si existe algún error en la Transacción
            DB::rollback(); //Anular los cambios en la DB
        }

        return  redirect('intranet/ingreso')->with('success', 'EL ingreso fue añadido correctamente...');
        // $detalles = $request->data;

        // Ingreso::create($request->all());
        // Detalleingreso::create($request->all());
    }

    public function show(Request $request, $id)
    {

    }

    public function edit($id)
    {
        $ingresos = Ingreso::from('dbo_ingreso as i')
                            ->join('dbo_proveedor as p', 'p.id_proveedor', '=', 'i.id_proveedor')
                            ->join('sede as s', 's.idsede', '=', 'i.id_sede')
                            ->select(DB::raw( 'CONCAT( p.nombre, " ", p.ApePat, " ", p.ApeMat ) as nombres'), 'i.id_ingreso', 's.denominacion', 'i.fecha')
                            ->where('i.id_ingreso', $id)
                            ->get();
        //dd($ingresos);

        $detalles = Detalleingreso::from('dbo_detalle_ingreso as di')
                                    ->join('dbo_almacen as a' ,'a.id_almacen', '=', 'di.id_almacen')
                                    ->join('dbo_catalogo as c', 'c.id_catalogo', '=', 'a.id_catalogo')
                                    ->select('c.caracteristica', 'di.cantidad_muestra', 'di.precio')
                                    ->where('di.id_ingreso', $id)
                                    ->get();

        return view('intranet.ingreso.edit', compact('ingresos', 'detalles'));
    }

    
}
