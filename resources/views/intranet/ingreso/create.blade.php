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
        <h1 class="page-header text-overflow">NUEVO INGRESO</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->


    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
    <li><a href=" {{ url('intranet') }} "><i class="fas fa-home"></i></a></li>
    <li><a href="{{ url('intranet/ingreso') }}">Lista de ingresos</a></li>
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
                    Nuevo ingreso</h3>
                </div>

                <form class="form" action=" {{ route('intranet.ingreso.store') }} " method="post">
                    {{ csrf_field() }}
                    <div class="panel-body">
                        <div class="row center">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Proveedor:</label>
                                    <select class="servicio form-control" name="id_proveedor" id="servicio">
                                        <option value="" selected="selected" disabled="true">-- Seleccione una opción --</option>
                                        @foreach( $proveedor as $pro )
                                            <option value=" {{ $pro->id_proveedor }} "> {{ $pro->nombres }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Sede:</label>
                                    @foreach ($sedes as $sede)
                                        <input type="id_sede" name="id_sede" class="form-control" value="{{ $sede->denominacion }}">
                                    @endforeach
                                    
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Fecha: </label><br/>
                                    <input type="text" name="fecha" class="form-control" value=" {{date('Y-m-d')}} ">
                                </div>
                            </div>
                        </div>
                        <h4>Detalle del Ingreso</h4><br/>
                    
                        <div class="row center">
                           
                            <div class="col-sm-12 panel panel-body panel-primary">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="articulo">Artículo</label>
                                        <select name="pid_articulo" id="pid_articulo" class="form-control selectpicker" data-live-search="true">
                                                <option value="--- Selecciones una Opción ---" disabled="true" selected="true" required>--- Selecciones una Opción ---</option>
                                                @foreach($tipos as $tipe)
                                                    <option value="{{ $tipe->id_tipo }}">
                                                        {{ $tipe->nombre }}
                                                    </option>
                                                @endforeach
                                        </select>
                                        </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="pcantidad">Cantidad</label>
                                        <input type="number" name="pcantidad" id="pcantidad" class="form-control" placeholder="Cantidad">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pprecio">Precio</label>
                                        <input type="number" name="pmonto" id="pmonto" class="form-control" placeholder="Precio">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button type="button" id="bt_add" class="btn btn-primary">
                                            Agregar
                                        </button>
                                    </div>
                                </div>
        
                                <div class="col-md-12">
                                    <table id="detalles" class="table table-striped table-bordered table-hover table-condensed" style="margin-top: 10px">
                                        <thead style="background-color: #A9D0F5">
                                            <th>Opciones</th>
                                            <th>Artículo</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                        </thead>
                                        <tfoot>
                                            <th>Total</th>
                                            <th></th>
                                            <th></th>
                                            {{-- <th><h4 id="total">0.00</h4></th> --}}
                                        </tfoot>
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
        
        $(document).ready(function(){
		$("#bt_add").click(function(){
			agregar();
		});
	});

	var cont = 0;
	var total = 0;
	var subtotal = [];

	//Cuando cargue el documento
	//Ocultar el botón Guardar
	$("#guardar").hide();

	function agregar(){
		//Obtener los valores de los inputs
		id_almacen = $("#pid_articulo").val();
		articulo = $("#pid_articulo option:selected").text();
		cantidad = $("#pcantidad").val();
		precio = $("#pmonto").val();

		//Validar los campos
		if(id_almacen != "" && cantidad > 0 && precio != ""){

			//subtotal array inicie en el indice cero

			// total = total + precio[cont];

			var fila = '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn" onclick="eliminar('+cont+')"><i style="color: red;" class="fa fa-trash"></i></button></td><td><input type="hidden" name="id_almacen[]" value="'+id_almacen+'">'+articulo+'</td><td><input type="hidden" name="cantidad_muestra[]" value="'+cantidad+'">'+cantidad+'</td><td><input type="hidden" name="precio[]" value="'+precio+'">'+precio+'</td></tr>';

			cont++;
			limpiar();
			$("#total").html("$" + total);
			evaluar();
			$("#detalles").append(fila);
		}else{
			alertify.alert('Faltan Datos', 'Necesita completar los campos requeridos!');
		}
	}

	function limpiar(){
		$("#pcantidad").val("");
		$("#pmonto").val("");
	}

	//Muestra botón guardar
	function evaluar(){
		if(cantidad > 0){
			$("#guardar").show();
		}else{
			$("#guardar").hide();
		}
	}

	function eliminar(index){
		total = total-subtotal[index];
		$("#total").html("$" + total);
		$("#fila" + index).remove();
		evaluar();
	}
        
        
</script>

@endsection
