@extends('layout.layout')

@section('estilo')

 <!--DataTables [ OPTIONAL ]-->
 <link href="{{ asset('//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css')}}" rel="stylesheet">
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
						<p><i class="demo-pli-map-marker-2 icon-lg icon-fw"></i> {{ $user->name }}</p>
						<p><a href="#" class="btn-link"><i class="demo-pli-internet icon-lg icon-fw"></i>  {{ $user->email }} </a></p>
						<p><i class="demo-pli-old-telephone icon-lg icon-fw"></i> {{ $user->direccion }} </p>
						<p class="text-sm text-center"> {{  $user->rol_name }} </p>
	
	
						<hr>
						<p class="pad-ver text-main text-sm text-uppercase text-bold">Skills</p>
						<ul class="list-inline">
							<li class="tag tag-sm">PHP Programming</li>
							<li class="tag tag-sm">Marketing</li>
							<li class="tag tag-sm">Graphic Design</li>
							<li class="tag tag-sm">Sketch</li>
							<li class="tag tag-sm">Photography</li>
						</ul>
	
						<hr>
					</div>
					@endforeach
					<div class="fluid">

					</div>
				</div>
			</div>
		</div>
		
</div>


@endsection