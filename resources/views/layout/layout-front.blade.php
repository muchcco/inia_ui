<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  @yield('estilo')
	<link rel="stylesheet" href="{{ asset('css/front.css')}}">
	<link rel="stylesheet" href="{{ asset('css/body.css')}}">
	<link rel="stylesheet" href="{{ asset('css/animation.css')}}">

	<style>
		.logo-w-m{
			width: 10%;
			/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#aebcbf+0,6e7774+50,0a0e0a+51,0a0809+100;Black+Gloss */
			background: #fff; /* Old browsers */
			background: -moz-linear-gradient(-45deg,  #fff 0%, #fff 50%, #333 51%, #333 100%); /* FF3.6-15 */
			background: -webkit-linear-gradient(-45deg,  #fff 0%,#fff 50%,#333 51%,#333 100%); /* Chrome10-25,Safari5.1-6 */
			background: linear-gradient(135deg,  #fff 0%,#fff 50%,#333 51%,#333 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#333',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

			margin:0;
			padding: 0;
		}
		
		.active{
			background-color:rgb(0, 130, 59);
			text-decoration: none;
			color: #fff;
		}
		</style>

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!--fontasowome Stylesheet [ REQUIRED ]-->
<link href="{{ asset('vendor/fontawesome/css/all.min.css')}}" rel="stylesheet">
<script src="{{ asset('vendor/fontawesome/js/all.min.js')}}"></script>

	
</head>
<body>
	<div class="header">
		<div class="content-first">
			<div class="body-head">
				<ul class="h-ul">
					<li class="h-li" >fone</li>
					<li class="h-li" >direccion</li>
					<li class="h-li" ><a href="{{ url('login') }}">Iniciar Sesión</a></li>
				</ul>
			</div>
		</div>
		<div class="content-logo">
			<div class="logo-w">
				<div class="img-dev">
					<div class="img-h">
						<img src="{{ asset('img/logo_minagri.png')}}" alt="" width="300">
						<img src="{{ asset('img/logo_inia.png')}}" alt="" width="150">
					</div>
				</div>
			</div>
			<div class="logo-w-m">
			</div>
			<div class="logo-w black">
				<div class="title-dev">
					<h4>"Año de la Universalización de la Salud"</h4>
				</div>
			</div>
		</div>
		<div class="content-menu">
			<div class="body">
				<div class="menu-b">
					<ul class="menu-list">
						<li class="li-menu"><a class="active" href="">Inicio</a></li>
						<li class="li-menu"><a href="">Contactanos</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="b-sec">
			<div class="section">
			</div>

			<div class="section">
				<div class="title">
					<h2>Servicios de los Laboratorios de Aguas y Suelos del INIA</h2>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Cupiditate ipsa, soluta a ullam nobis ut vero molestias dolore itaque deleniti architecto asperiores velit libero maxime reprehenderit accusamus, voluptas? Tempora, inventore!</p>

					@yield('back')
				</div>

				<div class="cuadros-2">
					
					@yield('content')
					

				</div>	
			</div>
			
		</div>
	</div>
    <script src="{{ asset('vendor/js/jquery.min.js')}}"></script>
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    
<!--Begin::style-->
@yield('script')
<!--End::style-->
    <script>
      /* Demo purposes only */
      $(".hover").mouseleave(
        function () {
          $(this).removeClass("hover");
        }
      );
    </script>
</body>
</html>