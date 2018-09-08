@extends('layouts_sisccc.pagsis_estudiante_actividad')
@section('titulo','Estudiante')
@section('usuccc')
{{ $usuactivo }}
@endsection
@section('usuico')
<i class="fa fa-graduation-cap fa-2x"></i>
@endsection
@section('usuico-peq')
<i class="fa fa-graduation-cap fa-lg"></i>
@endsection

@section('sis_menu_lateral')
@include('layouts_estudiante.partials.menu')   
@endsection	

@section('sis_contenido')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">    	
    <!-- Content Header (Page header) -->
    <section class="content-header">      
        <h1>
            Escritorio            
        </h1>
        <ol class="breadcrumb">
            <li><a href="/estudiante/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Escritorio</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <section class="col-lg-8 col-md-8 col-sm-12 col-md-push-2 col-lg-push-2 connectedSortable ui-sortable">
                <div class="box box-success">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-binoculars"></i>
                        <h3 class="box-title">Actividades</h3>
                    </div>
                    <div class="box-body">    
                        <div id="calendario"></div>
                    </div>    
                </div> 
            </section>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    {!! Html::footer('siscccConfig.pie') !!}
</footer>
@endsection
@section('sis_actividad')
    @foreach($ListaC as $Comu)
        <?php
            $date = date_create($Comu->com_fec);
            $fecha = date_format($date, 'Y, m, d');
        ?>
        {
            title: '{{ $Comu->com_titulo }}',
            start: new Date({{ $fecha }}),            
            backgroundColor: "#333", //red
            borderColor: "#f56954" //red
        },                                    
    @endforeach
    
    @foreach($ListaA as $Act)
        <?php
            $date = date_create($Act->act_fec);
            $fecha = date_format($date, 'Y, m, d');
        ?>
        {
            title: '{{ $Act->act_titulo }}',
            start: new Date({{ $fecha }}),            
            backgroundColor: "#f56954", //red
            borderColor: "#f56954" //red
        },                                    
    @endforeach
@endsection
<!-- Control Sidebar -->