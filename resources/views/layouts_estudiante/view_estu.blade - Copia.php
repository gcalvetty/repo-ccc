@extends('layouts_sisccc.pagsis')
@section('titulo','Estudiante')

@section('sis_cabecera')
    <ccc-cabecera titulo="@yield('titulo'):" nombre="{{ $usuactivo }}" ></ccc-cabecera>
@endsection	

@section('sis_contenido')
    <div class="panel-body">
        <h1>Contenido</h1>
    </div>
@endsection

