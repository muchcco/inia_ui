@extends('layout.layout')

@section('estilo')

 <!--DataTables [ OPTIONAL ]-->
 <link href="{{ asset('//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css')}}" rel="stylesheet">

@endsection

@section('content')

<div id="page-head">
                    
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">MIS DOCUMENTOS</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->


    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
    <li><a href=" {{ url('/') }} "><i class="fas fa-home"></i></a></li>
    <li><a href="#">Mis Archivos</a></li>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->

</div>

<div id="page-content">
    <!-- Add Row -->
    <!--===================================================-->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Elija la carpeta donde guardará el archivo</h3>
        </div>

        <div id="demo-custom-toolbar2" class="table-toolbar-left" style="padding-left:1.5em;">
            <button type="button" class="btn btn-purple" data-toggle="modal" data-target="#exampleModal">
                <i class="demo-pli-plus"></i> Añadir Nuevo
              </button>
        </div>
        
        <br/>
    
        <div class="panel-body">
            <table id="TableArchivo" class="table table-striped data-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Servicio</th>
                        <th class="min-desktop">Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>


@include('intranet.catalogo.servicio.modal.create')


@endsection



@section('script')

<script>

    $(function(){

        //cargar valores al datatable
        // Para que carguen la data por ajax ==  agregar datatable en:
        // composer.json - actualizar composer update/comando/
        // agregar datable al controlador

        var table = $('#TableArchivo').DataTable({
            "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"},
            processing: true,
            serverSide: true,
            ajax: "{{ route('intranet.catalogo.servicio.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'nombre', name: 'nombre'},
                {data: 'action', name: 'action'},
            ]
        });

   
        

    });
   
</script>

 <!--DataTables [ OPTIONAL ]-->
 <script src="{{ asset('//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js')}}"></script>
 <script src="{{ asset('plugins\bootbox\bootbox.min.js')}}"></script>



@endsection