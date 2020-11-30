@extends('layout.layout')

@section('estilo')
<link href="{{ asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css')}}" rel="stylesheet" />

    <style>
        .center{
            display: flex;
            justify-content: center
        }
        .panel-heading{
            border-bottom: 1px solid #25476a;
        }

        .panel-primary{
            border: 1px solid #337ab7;
        }
        
    </style>

@endsection

@section('content')
    
<div id="page-head">
                    
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">MODIFICAR DATOS</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->


    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
    <li><a href=" {{ url('/') }} "><i class="fas fa-home"></i></a></li>
    <li><a href="{{ url('intranet/ingreso') }}">Ingreso</a></li>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->

</div>

<div id="page-content">
    <!-- mensjaje -->
        @if(\Session::has('warnign'))
        <div class=" alert alert-danger " style="margin-top: 1em;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if(\Session::has('success'))
        <div class=" alert alert-success " style="margin-top: 1em;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>

            <p> {{ \Session::get('success') }} </p>
        </div>
        @endif
    {{-- fin de mensaje --}}



    <!-- Add Row -->
    <!--===================================================-->
    <div class="row center"> 
        <div class="col-sm-10 ">       
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                    Editar</h3>
                </div>

                <form class="form" action=" {{ route('intranet.ingreso.store') }} " method="post">
                    {{ csrf_field() }}
                    <div class="panel-body">
                        <div class="row center">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Proveedor:</label>
                                    @foreach ($ingresos as $ingreso)
                                        <input type="text" name="id_proveedor" class="form-control" value="{{ $ingreso->nombres }}">
                                    @endforeach                                   
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Sede:</label>
                                    @foreach ($ingresos as $ingreso)
                                        <input type="text" name="" class="form-control" value="{{ $ingreso->denominacion }}" disabled>
                                    @endforeach  
                                    
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Fecha: </label><br/>
                                    @foreach ($ingresos as $ingreso)
                                        <input type="date" name="fecha" class="form-control" value="{{ $ingreso->fecha }}" >
                                    @endforeach 
                                </div>
                            </div>
                        </div>
                        <h4>Detalle de Ingreso</h4><br/>
                    
                        <div class="row center">
                           
                            <div class="col-sm-12 panel panel-body panel-primary">
        
                                <div class="col-md-12">
                                    <table id="detalles" class="table table-striped table-bordered table-hover table-condensed" style="margin-top: 10px">
                                        <thead style="background-color: #A9D0F5">
                                            <th>Opciones</th>
                                            <th>Artículo</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                        </thead>
                                        @foreach( $detalles as $detalle)
                                        <tfoot>                                            
                                            <th></th>
                                        <th> <input type="text" value="{{ $detalle->caracteristica }}" disabled> </th>
                                            <th> <input type="text"  value="{{ $detalle->cantidad_muestra }}"> </th>
                                            <th> <input type="text" value="{{ $detalle->precio }}"> </th>
                                            {{-- <th><h4 id="total">0.00</h4></th> --}}
                                        </tfoot>
                                        @endforeach
                                        <tbody>
        
                                        </tbody>
                                    </table>
                                </div>


                                <div class="row">
                                    {{-- <input type="submit" value="enviar"> --}}
                                    <div class="col-md-12" id="guardar">
                                        <div class="form-group">
                                            <button class="btn btn-success" type="submit">
                                                Guardar
                                            </button>
                                        </div>
                                    </div>
                                </div>
        
                            </div><!-- panel-body -->
                            
                        </div><!-- fin row detalle -->
        
        
                        
                    </div>
                </form>
                

            </div>
        </div>
    </div>
</div>

   

@endsection


@section('script')
<script src="{{ asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js')}}"></script>

<script>
        
   
</script>

@endsection
