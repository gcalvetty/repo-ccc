@extends('layouts_sisccc.pagsis_estudiante')
@section('titulo','Estudiante | Comportamiento')
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
            <li><a href="{{route("Escritorio")}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Comportamiento</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <section class="col-lg-12 connectedSortable ui-sortable">
                <div class="box box-success">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-binoculars"></i>
                        <h3 class="box-title">Comportamiento</h3>
                    </div>
                    <div class="box-body">    
                        <div class="tarea">
                            <table id="example1" class="table table-condensed table-hover table-striped">
                                <thead>
                                    <tr>                                
                                        <th>#</th>
                                        <th class="col-lg-2">Fecha</th>
                                        <th class="col-lg-2">Comportamiento</th>                                        
                                        <th class="col-lg-7">Observación</th>                                
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $cont = 1 ?>
                                    @foreach($comp as $Alumno)
                                    <?php
                                    $tipTar = "";
                                    $tipMen = "";
                                    switch ($Alumno->tiptarj) {
                                        case "Sin Tarjeta":
                                            $tipMem = "Sin Tarjeta";
                                            $tipTar = "success";
                                            break;
                                        case "Tarjeta Blanca":
                                            $tipMem = "Tarjeta Blanca";
                                            $tipTar = "info";
                                            break;
                                        case "Tarjeta Amarilla":
                                            $tipMem = "Tarjeta Amarilla";
                                            $tipTar = "warning";
                                            break;
                                        case "Tarjeta Roja":
                                            $tipMem = "Tarjeta Roja";
                                            $tipTar = "danger";
                                            break;
                                    }
                                    ?>
                                    <tr class="{{ $tipTar }}" data-toggle="tooltip" data-placement="top" title="{{ $tipMem }}">
                                        <td class="col-md-1">
                                            <span class="label label-{{ $tipTar }}">
                                                <span class="glyphicon glyphicon-tag {{ $tipTar }}" aria-hidden="true"></span> 
                                            </span>
                                        </td>
                                        <td class="col-md-2">{{ sis_ccc\libreriaCCC\fncCCC::getDateAttribute($Alumno->fec) }}</td>                                          
                                        <td class="col-md-4" style="text-align:left;">
                                            {{ $Alumno->tipcomp }}</td>                                        
                                        <td class="col-md-5 text-md-justify"><p class="text-justify">{{ strip_tags($Alumno->obser) }}</p></td>
                                    </tr>                                    
                                    @endforeach    
                                </tbody>                 
                            </table>
                        </div>
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




