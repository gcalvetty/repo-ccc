@extends('layouts_sisccc.pagsis')
@section('titulo','Secretaría')	
@section('usuccc')
{{ $usuactivo }}
@endsection
@section('usuico')
<i class="fa fa-cubes fa-2x"></i>
@endsection
@section('usuico-peq')
<i class="fa fa-cubes fa-lg"></i>
@endsection

@section('sis_menu_lateral')
@include('layouts_secretaria.partials.menu')
@endsection		

@section('sis_alm_inscritos')
@include('layouts_sisccc.partials.pagsis_alm_insc')
@endsection

@section('sis_contenido')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">    	
    <!-- Content Header (Page header) -->
    <section class="content-header">      
        <h1>
            Escritorio
            <small>Bienvenido!!!</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('Secr.Reg')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Escritorio</li>
        </ol>
        @if(Session::has('MensajeElim'))
        <p class="alert alert-success" transition="fade">{{ Session::get('MensajeElim')}}</p>           @endif
    </section>

    <!-- Main content -->
    <section class="content">
        @if(isset($CantAlm))
        @yield('sis_alm_inscritos')
        @endif
        <div class="row">
            <section class="col-lg-6 connectedSortable ui-sortable">
                <div class="box box-warning">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-comments-o"></i>
                        <h3 class="box-title">Comunicados</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>                                         
                                    <th>Titulo</th>
                                    <th>Descripción</th> 
                                    <th>Fecha</th>                                                                          
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ListaC as $Comu)
                                <tr>
                                    <td>{{ $Comu->com_id }}</td>  
                                    <td>{{ $Comu->com_titulo }}</td>
                                    <td>{{ $Comu->com_desc }}</td>                                    
                                    <td>{{ $Comu->com_fec }}</td> 
                                </tr>                                
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section class="col-lg-6 connectedSortable ui-sortable">

                <div class="box box-success">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-calendar"></i>
                        <h3 class="box-title">Actividades</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>                                         
                                    <th>Titulo</th>                                     
                                    <th>Fecha</th>                                                                          
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ListaA as $Act)
                                <tr>
                                    <td>{{ $Act->act_id }}</td>  
                                    <td>{{ $Act->act_titulo }}</td>                                    
                                    <td>{{ $Act->act_fec }}</td> 
                                </tr>                                
                                @endforeach 

                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Lista de Alumnos</h3>
                        <div class="box-tools">
                            <form method="GET" action="{{ route('Dir.Reg')}}">
                                <div class="input-group input-group-sm" style="width: 270px;">
                                    <input name="buscar" class="form-control pull-right" placeholder="Buscar Alumno por Nombre" type="text" value="{{ Request::get('buscar','')}}">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>        
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Curso</th>
                                    <th>Alumno</th>   
                                    <th>Editar</th>
                                    <th>Imprimir</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Lista as $Alumno)
                                <tr>
                                    <td>{{ $Alumno->id }}</td>  
                                    <td>{{ $Alumno->curso }} - {{ $Alumno->aula }}</td>
                                    <td>{{ $Alumno->ape_paterno }} {{ $Alumno->ape_materno }} {{ $Alumno->nombre }}</td>

                                    <td style="text-aling:center">
                                        <a href="{{ route('rude-s.edit', ['alumno' => $Alumno->id]) }}"><i class="fa fa-pencil-square-o   fa-lg" aria-hidden="true"></i></a>
                                    </td>    
                                    @if ($Alumno->estado == "No Inscrito")
                                    <td>
                                        <a href="#" target="_blank" class="btn btn-large disabled"><i class="fa fa-print" aria-hidden="true"></i></a>
                                    </td>
                                    @else
                                    <td>
                                        <a href="{{ route('rude-s.imprimir', ['alumno' => $Alumno->id]) }}" target="_blank"><i class="fa fa-print  fa-lg" aria-hidden="true"></i></a>
                                    </td>
                                    @endif

                                    @endforeach    
                                </tr>

                                </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->                    
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    {!! Html::footer('siscccConfig.pie') !!}
</footer>
@endsection

@section('menu-configuracion')
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home">1</i></a></li>      
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Actividades Recientes</h3>
        </div>
    </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
@endsection
