@extends('layouts_sisccc.pagsis_contador')
@section('titulo','Contador')
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
@include('layouts_contador.partials.menu')
@endsection


@section('sis_contenido')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">    	
    <!-- Content Header (Page header) -->
    <section class="content-header">      
        <h1>
            Escritorio:
            <small>Bienvenido!!!</small>
        </h1>
        {!! Breadcrumbs::render() !!}
    </section>    

    <section class="content">

        <div id="contador_crud" class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Alumnos Inscritos</h3>                        
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>                                    
                                    <th>Curso</th>
                                    <th>Paralelo</th>
                                    <th>Alumno</th>                                                                        
                                    <th>Adeuda</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Lista as $Alumno)
                                <tr id="{{ $Alumno->id }}">

                                    <td>{{ $Alumno->curso }}</td>
                                    <td>{{ $Alumno->aula }}</td>
                                    <td>{{ $Alumno->ape_paterno }} {{ $Alumno->ape_materno }} {{ $Alumno->nombre }}</td>                                    
                                    <td>
                                        
                                        @if($Alumno->estado == 'Inscrito')
                                        <button type="button" class="actbot btn btn-danger btnbloq{{ $Alumno->id }}" v-on:click.prevent="bloqAlm({{ $Alumno->id }});">                                                                                        
                                            <i class="fa fa-unlock-alt" aria-hidden="true"> Bloquear</i>
                                        </button>
                                        @else
                                        <button type="button" class="desbot btn btn-danger btnbloq{{ $Alumno->id }}" v-on:click.prevent="bloqAlm({{ $Alumno->id }});">                                                                                        
                                            <i class="fa fa-unlock-alt" aria-hidden="true"> Bloquear</i>
                                        </button>
                                        @endif
                                        
                                        
                                        @if($Alumno->estado != 'Inscrito')
                                        <button type="button" class="actbot btn btn-success btndesbloq{{ $Alumno->id }}" v-on:click.prevent="desbloqAlm({{ $Alumno->id }})">
                                            <i class="fa fa-unlock" aria-hidden="true"> DesBloquear</i>
                                        </button>
                                        @else 
                                        <button type="button" class="desbot btn btn-success btndesbloq{{ $Alumno->id }}" v-on:click.prevent="desbloqAlm({{ $Alumno->id }})">
                                            <i class="fa fa-unlock" aria-hidden="true"> DesBloquear</i>
                                        </button>
                                        @endif
                                        
                                    </td>                                    
                                </tr>
                                @endforeach 
                            </tbody>
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
</div>    

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
