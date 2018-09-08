@extends('layouts_sisccc.pagsis')
@section('titulo','Administrador-CCC')	
@section('usuccc')
		{{ $usuactivo }}
@endsection
@section('usuico')
		fa-codepen
@endsection

@section('sis_contenido')
<div class="jumbotron">
    <div class="container">
        <h1>Vista del @yield('titulo')</h1>    
    </div>    
</div>
@endsection	