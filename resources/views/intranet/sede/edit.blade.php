@extends('layout.layout')

@section('estilo')

 <!--DataTables [ OPTIONAL ]-->
 <link href="{{ asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css')}}" rel="stylesheet" />
 <link rel="stylesheet" href="{{ asset('//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css')}}">
 

@endsection

@section('content')


<div id="page-content">
		<div class="panel">
			<div class="panel-body">
				<div class="fixed-fluid">
					<div class="fixed-md-300 pull-sm-left fixed-right-border">
						
                            <!-- Simple profile -->
                            <div class="text-center">
                                <div class="pad-ver">
                                    <img src="{{ asset('img\profile-photos\1.png')}}" class="img-lg img-circle" alt="Profile Picture">
                                </div>
                                
                                <h4 class="text-lg text-overflow mar-no">  																
                                       {{ $sedes->denominacion }}  								
                                </h4>
                                
                                <button class="btn btn-block btn-success btn-lg" data-toggle="modal" data-target="#passwor_resed">CONTRASEÑA</button>
                            </div>
                            <hr>
        
                            <!-- Profile Details -->
                            <p class="pad-ver text-main text-sm text-uppercase text-bold">Sobre Mi</p>
                            <p><i class="fa fa-user"></i> {{ $sedes->denominacion }}  </p>
                            <p><i class="fa fa-map"></i> {{ $sedes->direccion }} </p>
        
        
                            <hr>
                                <p class="pad-ver text-main text-sm text-uppercase text-bold">Skills</p>
                                <ul class="list-inline">
                                    <li class="tag tag-sm">jj</li>
                                    <li class="tag tag-sm">jj</li>
                                </ul>
                            
                            <hr>
                        
					</div>
					<div class="fluid">
						<div class="row">
							<div class="col-lg-6">
								<div class="panel">
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
									<div class="panel-heading">
										<h3 class="panel-title">Editar Cuenta</h3>
									</div>
						
						
									<!--Input Size-->
									<!--===================================================-->
									<form class="form-horizontal" action=""  method="post">

             						    {{ csrf_field() }}
										<div class="panel-body">
											<div class="form-group">
												<label class="col-sm-3 control-label" for="demo-is-inputsmall">Nombre</label>
												<div class="col-sm-6">
													<input name="name" type="text" placeholder=".input-sm" class="form-control input-sm" id="demo-is-inputsmall" value="" onkeyup="MayusculaGuiones(this)">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label" for="demo-is-inputsmall">Apellidos</label>
												<div class="col-sm-6">
													<input name="last_name" type="text" placeholder=".input-sm" class="form-control input-sm" id="demo-is-inputsmall" value="" onkeyup="MayusculaGuiones(this)">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label" for="demo-is-inputsmall">Correo</label>
												<div class="col-sm-6">
													<input name="email" type="text" placeholder=".input-sm" class="form-control input-sm" id="demo-is-inputsmall" value="" onkeyup="MayusculaGuiones(this)">
												</div>
											</div>
										</div>
										<div class="panel-footer">
											<div class="row">
												<div class="col-sm-9 col-sm-offset-3">
													<button class="btn btn-mint" type="submit">Actualizar</button>
													<a href="{{ url('intranet/sede') }}" class="btn btn-warning" >Cancelar</a>
												</div>
											</div>
										</div>
									</form>
									<!--===================================================-->
									<!--End Input Size-->
						
						
								</div>
							</div>
							<div class="col-lg-6">
								<div class="panel">
									<div class="panel-heading">
										<h3 class="panel-title">Editar Imagen</h3>
									</div>
						
									<!--No Label Form-->
									<!--===================================================-->
									<form class="form-horizontal">
										<div class="panel-body">
											
										</div>
										<div class="panel-footer text-right">
											<button class="btn btn-default">Send message</button>
										</div>
									</form>
									<!--===================================================-->
									<!--End No Label Form-->
						
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
</div>


<!-- Modal -->
<div class="modal fade" id="passwor_resed" tabindex="-1" aria-labelledby="password_resed_one" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="password_resed_one">Cambiar la Contraseña</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form" action=" {{ route('intranet.user.password') }} " method="post">
                {{ csrf_field() }}
            <div class="modal-body">                
                <div class="form-group">
					<label for="recipient-name" class="col-form-label">Contraseña:</label>
					<input type="password" class="form-control"  name="nombre" >
				</div> 
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Confirmar contraseña:</label>
					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
				</div>                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
      </div>
    </div>
  </div>


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
