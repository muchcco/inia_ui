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
					<div class="fixed-md-200 pull-sm-left fixed-right-border">
						@foreach( $usuario as $user )
						<!-- Simple profile -->
						<div class="text-center">
							<div class="pad-ver">
								<img src="{{ asset('img\profile-photos\1.png')}}" class="img-lg img-circle" alt="Profile Picture">
							</div>
							
							<h4 class="text-lg text-overflow mar-no">  																
									{{  $user->nombres }}								
							</h4>
							<p class="text-sm text-muted">{{  $user->denominacion }}	</p>
							
							<button class="btn btn-block btn-success btn-lg">CONTRASEÑA</button>
						</div>
						<hr>
	
						<!-- Profile Details -->
						<p class="pad-ver text-main text-sm text-uppercase text-bold">Sobre Mi</p>
						<p><i class="demo-pli-map-marker-2 icon-lg icon-fw"></i> {{ $user->nombres }}</p>
						<p><a href="#" class="btn-link"><i class="demo-pli-internet icon-lg icon-fw"></i>  {{ $user->email }} </a></p>
						<p><i class="demo-pli-old-telephone icon-lg icon-fw"></i> {{ $user->direccion }} </p>
						<p class="text-sm text-center"> {{  $user->rol_name }} </p>
	
	
						<hr>
						@if( auth()->user()->hasRoles(['admin']))
							<p class="pad-ver text-main text-sm text-uppercase text-bold">Skills</p>
							<ul class="list-inline">
								<li class="tag tag-sm">PHP Programming</li>
								<li class="tag tag-sm">Marketing</li>
								<li class="tag tag-sm">Graphic Design</li>
								<li class="tag tag-sm">Sketch</li>
								<li class="tag tag-sm">Photography</li>
							</ul>
						@endif
						@if( auth()->user()->hasRoles(['user']))
							<p class="pad-ver text-main text-sm text-uppercase text-bold">Skills</p>
							<ul class="list-inline">
								<li class="tag tag-sm">PHP Programming</li>
								<li class="tag tag-sm">Marketing</li>
								<li class="tag tag-sm">Graphic Design</li>
								<li class="tag tag-sm">Sketch</li>
								<li class="tag tag-sm">Photography</li>
							</ul>
						@endif
						<hr>
					</div>
					@endforeach
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
									<form class="form-horizontal" action="{{route('intranet.user.store')}}"  method="post">

             						    {{ csrf_field() }}
										<div class="panel-body">
											<div class="form-group">
												<label class="col-sm-3 control-label" for="demo-is-inputsmall">Nombre</label>
												<div class="col-sm-6">
													<input name="name" type="text" placeholder=".input-sm" class="form-control input-sm" id="demo-is-inputsmall" value=" {{ $update->name }} " onkeyup="MayusculaGuiones(this)">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label" for="demo-is-inputsmall">Apellidos</label>
												<div class="col-sm-6">
													<input name="last_name" type="text" placeholder=".input-sm" class="form-control input-sm" id="demo-is-inputsmall" value=" {{ $update->last_name }} " onkeyup="MayusculaGuiones(this)">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label" for="demo-is-inputsmall">Correo</label>
												<div class="col-sm-6">
													<input name="email" type="text" placeholder=".input-sm" class="form-control input-sm" id="demo-is-inputsmall" value=" {{ $update->email }} " onkeyup="MayusculaGuiones(this)">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label" for="demo-is-inputsmall">Rol</label>
												<div class="col-sm-6">
													<select name="role_id" id="" class="form-control sedes">
														<option value="" selected="selected" disabled="true">-- Seleccione una opción --</option>
														@foreach ($roles as $rol)
															<option value=" {{ $rol->id }} "> {{ $rol->descripcion }} </option>
														@endforeach
													</select>													
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label" for="demo-is-inputsmall">Sede</label>
												<div class="col-sm-6">
													<select name="id_sede" id="" class="form-control sedes">
														<option value="" selected="selected" disabled="true">-- Seleccione una opción --</option>
														@foreach ($sedes as $up)
															<option value=" {{ $up->idsede }} "> {{ $up->denominacion }} </option>
														@endforeach
													</select>													
												</div>
											</div>
										</div>
										<div class="panel-footer">
											<div class="row">
												<div class="col-sm-9 col-sm-offset-3">
													<button class="btn btn-mint" type="submit">Actualizar</button>
													<button class="btn btn-warning" type="reset">Resetear</button>
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
