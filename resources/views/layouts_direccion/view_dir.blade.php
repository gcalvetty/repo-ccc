@extends('layouts_sisccc.pagsis')
@section('titulo','Dirección')
@section('usuccc')
{{ $usuactivo }}
@endsection
@section('usuico')
<i class="fa fa-skyatlas fa-2x"></i>
@endsection
@section('usuico-peq')
<i class="fa fa-skyatlas fa-lg"></i>
@endsection

@section('sis_menu_lateral')
@include('layouts_direccion.partials.menu')
@endsection

@section('sis_alm_inscritos')
@if(isset($CantAlm))
@include('layouts_sisccc.partials.pagsis_alm_insc')
@endif
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

        @if(Session::has('MensajeElim'))
        <p class="alert alert-success" transition="fade">{{ Session::get('MensajeElim')}}</p>           
        @endif

    </section> 

    <section class="content">
        @if($Grd == null)
        @yield('sis_alm_inscritos')
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
                                    <th>Fecha</th> 
                                    <th>Titulo</th>
                                    <th>Descripción</th>                                                                                                              
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ListaC as $Comu)
                                <tr>                                    
                                    <td>{{ sis_ccc\libreriaCCC\fncCCC::getDateAttribute($Comu->com_fec) }}</td> 
                                    <td>{{ $Comu->com_titulo }}</td>
                                    <td>{{ $Comu->com_desc }}</td>
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
                                    <th>Fecha</th>  
                                    <th>Titulo</th>                                     
                                                                                                            
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ListaA as $Act)
                                <tr>
                                    <td>{{ sis_ccc\libreriaCCC\fncCCC::getDateAttribute($Act->act_fec) }}</td> 
                                    <td>{{ $Act->act_titulo }}</td>                                    
                                </tr>                                
                                @endforeach 

                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        @endif
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Lista de Alumnos</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Curso</th>
                                    <th>Paralelo</th>
                                    <th>Alumno</th>                                    
                                    <th>Estado</th>                  
                                    <th>Editar</th>
                                    <th>Imprimir</th>
                                    <th>Borrar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Lista as $Alumno)
                                <tr>
                                    <td>{{ $Alumno->id }}</td>  
                                    <td>{{ $Alumno->curso }}</td>
                                    <td>{{ $Alumno->aula }}</td>
                                    <td><b>{{ $Alumno->ape_paterno }} {{ $Alumno->ape_materno }} {{ $Alumno->nombre }}</b>
                                        <br><b>Sitio Web:</b> sis.ccc.edu.bo
                                        <br><b>Usuario:</b> {{ $Alumno->email }}
                                        <br><b>Contraseña:</b> cccedu</td>

                                    <td>
                                        @if ($Alumno->estado == "Inscrito")
                                        <span class="label label-success">{{ $Alumno->estado }}</span>
                                        @else
                                        <span class="label label-warning">{{ $Alumno->estado }}</span>
                                        @endif                                        
                                    </td>

                                    <td style="text-aling:center">
                                        <a href="{{ route('rude-d.edit', ['alumno' => $Alumno->id]) }}"><i class="fa fa-pencil-square-o   fa-lg" aria-hidden="true"></i></a>
                                    </td>    
                                    @if ($Alumno->estado == "No Inscrito")
                                    <td>
                                        <a href="#" target="_blank" class="btn btn-large disabled"><i class="fa fa-print" aria-hidden="true"></i></a>
                                    </td>
                                    @else
                                    <td>
                                        <a href="{{ route('rude-d.imprimir', ['alumno' => $Alumno->id]) }}" target="_blank"><i class="fa fa-print  fa-lg" aria-hidden="true"></i></a>
                                    </td>
                                    @endif

                                    <td>
                                        <a href="{{ route('rude-d.destroy', ['alumno' => $Alumno->id]) }}"></a>

                                        {!!Form::open([
                                        'method'=>'delete',
                                        'route' =>['rude-d.destroy',$Alumno->id]
                                        ])!!}

                                        <input class="btn btn-danger dropdown-toggle" type="submit" value="Eliminar" onclick="return confirm('Desea Eliminar este Registro')">
                                        {!!Form::close()!!}

                                    </td>

                                </tr>
                                @endforeach  

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
