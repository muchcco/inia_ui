@extends('layout.layout-front')

@section('content')
@foreach( $sedes as $sede )
<figure class="snip1477"><img src="{{ asset('/sedes/'.$sede->imagen)}}" alt="sample35" />
  <div class="title">
    <div>
      <h5>{{  $sede->denominacion }}</h5>
    </div>
  </div>
  <figcaption>
    <p>Registros: {{ $sede->cantidad_registros }}</p>
    <p>{{ $sede->direccion }} </p>
  </figcaption>
  <a href="{{ route('estacion.tabla', ['idsede' => $sede->idsede]) }}"></a>
</figure>
@endforeach





@endsection