@extends('layout.layout')

@section('estilo')

 <!--DataTables [ OPTIONAL ]-->
 <link href="{{ asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css')}}" rel="stylesheet" />
 <link rel="stylesheet" href="{{ asset('//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css')}}">
 

@endsection

@section('content')
<div id="page-head">
                    
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Sedes</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->
</div>


<!--Page content-->
<!--===================================================-->
<div id="page-content">
    
        <!-- Contact Toolbar -->
        <!---------------------------------->
        <div class="row pad-btm">
            <div class="col-sm-6 toolbar-left">
                <button id="demo-btn-addrow" class="btn btn-purple">Agregar</button>
                <button class="btn btn-default"><i class="fa fa-plus"></i></button>
            </div>
            <div class="col-sm-6 toolbar-right text-right">
                Sort by :
                <div class="select">                    
                    <select name="id_sede" id="" class="form-control sedes">
                        <option value="" selected="selected" disabled="true">-- Seleccione una opción --</option>
                        @foreach ($sedes as $up)
                            <option value=" {{ $up->idsede }} "> {{ $up->denominacion }} </option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-default">Filter</button>
                <button class="btn btn-primary"><i class="demo-psi-gear icon-lg"></i></button>
            </div>
        </div>
        <!---------------------------------->
    
    
        <div class="row">
            @foreach($sedes as $sede)
                <div class="col-sm-3 col-md-4">
        
        
                    <!-- Contact Widget -->
                    <!---------------------------------->
                    <div class="panel pos-rel">
                        <div class="pad-all text-center">
                            <div class="widget-control">
                                <div class="btn-group dropdown">
                                    <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v icon-lg"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right" style="">
                                        <li><a href="#"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>
                                        <li><a href="#"><i class="icon-lg icon-fw demo-pli-recycling"></i> Remove</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-lg icon-fw demo-pli-mail"></i> Send a Message</a></li>
                                        <li><a href="#"><i class="icon-lg icon-fw demo-pli-calendar-4"></i> View Details</a></li>
                                        <li><a href="#"><i class="icon-lg icon-fw demo-pli-lock-user"></i> Lock</a></li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#">
                                <img alt="Profile Picture" class="img-lg img-circle mar-ver" src="img\profile-photos\2.png">
                                <p class="text-lg text-semibold mar-no text-main"> {{ $sede->denominacion }} </p>
                                <p class="text-sm">{{$sede->direccion}}</p>
                                <p class="text-sm"></p>
                            </a>
                            <div class="pad-top btn-groups">
                                <a href="#" class="btn btn-icon demo-pli-facebook icon-lg add-tooltip" data-original-title="Facebook" data-container="body"></a>
                                <a href="#" class="btn btn-icon demo-pli-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
                                <a href="#" class="btn btn-icon demo-pli-google-plus icon-lg add-tooltip" data-original-title="Google+" data-container="body"></a>
                                <a href="#" class="btn btn-icon demo-pli-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body"></a>
                            </div>
                        </div>
                    </div>
                    <!---------------------------------->
        
                    
                </div>
            @endforeach
        </div>
    
        
</div>
<!--===================================================-->
<!--End page content-->



@endsection


@section('script')
<script src="{{ asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js')}}"></script>

<script>
        
$(document).ready(function () {   
    //select 2
        var $disabledResults = $(".sedes");
        $disabledResults.select2();
})
        

var MayusculaGuiones = (valor) => {
	valor.value = valor.value.toUpperCase();
	//valor.value = valor.value.replace(/\s/g,"");
	console.log(valor);

	//javascript:this.value=this.value.toUpperCase();
}
        
</script>

@endsection
