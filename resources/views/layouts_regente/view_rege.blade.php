@extends('layouts_sisccc.pagsis_regente')
@section('titulo','Regente')	
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
@include('layouts_regente.partials.menu')
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
        <ol class="breadcrumb">
            <li><a href="/direccion/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Escritorio</li>
        </ol>
    </section>    

    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-push-2">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Lista de Alumnos</h3>                        
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body ">
                        <table id="example1" class="table table-bordered table-striped ">
                            <thead>
                                <tr>                                    
                                    <th>Curso</th>
                                    <th>Nombre</th> 
                                    <th>Apellido</th> 
                                    <th>Conducta</th> 
                                    <th>Reporte</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Lista as $Alumno)
                                <tr>                                    
                                    <td>{{ $Alumno->curso }} - {{ $Alumno->aula }}</td>
                                    <td>{{ $Alumno->nombre }} </td>
                                    <td>    
                                        {{ $Alumno->ape_paterno }} {{ $Alumno->ape_materno }} </td>
                                    <td>
                                        <button type="button" class="btn btn-danger" 
                                                data-toggle="modal" 
                                                data-target=".bs-example-modal-lg"
                                                data-idalm="{{ $Alumno->id }}"
                                                data-nomalm=" {{ $Alumno->nombre }} {{ $Alumno->ape_paterno }} {{ $Alumno->ape_materno }}">
                                            <i class="fa fa-edit"></i></button>
                                    </td>
                                    <td>
                                        <?php $val = sis_ccc\Http\Controllers\Regente\RegeController::haveComportamiento($Alumno->id) ?>
                                        @if ($val>0)
                                        <a href="{{ route('Rege.PDFCom',$Alumno->id) }}" target="_blank">
                                            <button type="button" class="btn btn-success" >
                                                <span class="badge"><i class="fa fa-file-pdf-o"></i> {{ $val }}</span>                                                 
                                            </button>
                                        </a> 
                                        @else
                                        <i class="fa fa-file-pdf-o"></i>
                                        @endif
                                    </td>
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

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="EstudianteModal">
        <div class="modal-dialog" role="document" id="Comportamiento">            
            <form id="regente_frm" v-on:submit="validateBeforeSubmit" class="form-horizontal" role="form" action="{{route('Rege.insCom')}}">    
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Comportamiento del Alumn@: <span class="Alm"></span></h4>
                    </div>
                    <div class="modal-body" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group has-feedback {{ $errors->has('fec') ? ' has-error' : '' }}" v-bind:class="{'': true, 'has-error': errors.has('fec') }">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon10"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                        <vuejs-datepicker id="fec" name="fec" 
                                                          :value="state.date" 
                                                          :format="customFormatter" 
                                                          :language="es"                                                      
                                                          v-model="fec"></vuejs-datepicker>
                                    </div>
                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('fec') }"></span>
                                    @if ($errors->has('fec'))<span class="help-block"><strong>{{ $errors->first('fec') }}</strong></span>@endif
                                </div>
                            </div>
                            <div class="col-md-12 btn-tarjeta">                                
                                <div class="btn-group">
                                    <button v-on:click="cambTar(1);" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sin Tarjeta</button>
                                    <button v-on:click="cambTar(1);" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li v-for="option in tT.ts"><a href="#" v-bind:value="option.id" v-on:click="cambMem2(option.id,option.txt)">@{{ option.txt }}</a></li>                                    
                                    </ul>
                                </div>

                                <div class="btn-group">
                                    <button v-on:click="cambTar(2);" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tarjeta Blanca</button>
                                    <button v-on:click="cambTar(2);" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li v-for="option in tT.tb"><a href="#" v-bind:value="option.id" v-on:click="cambMem2(option.id,option.txt)">@{{ option.txt }}</a></li>                                    
                                    </ul>
                                </div>

                                <div class="btn-group">
                                    <button v-on:click="cambTar(3);" type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tarjeta Amarilla</button>
                                    <button v-on:click="cambTar(3);" type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li v-for="option in tT.ta"><a href="#" v-bind:value="option.id" v-on:click="cambMem2(option.id,option.txt)">@{{ option.txt }}</a></li>                                    
                                    </ul>
                                </div>

                                <div class="btn-group">
                                    <button v-on:click="cambTar(4);" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tarjeta Roja</button>
                                    <button v-on:click="cambTar(4);" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li v-for="option in tT.tr"><a href="#" v-bind:value="option.id" v-on:click="cambMem2(option.id,option.txt)">@{{ option.txt }}</a></li>                                    
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="panel " v-bind:class="[ttarClass]" v-show="ttar.tarAct>0">
                                    <div class="panel-heading">
                                        @{{ $data.moSel }}
                                    </div>
                                    <div class="panel-body">@{{ $data.moSelDes }}</div>
                                </div>
                            </div>
                            <div class="col-md-12"> 
                                <textarea id="editor" name="editor" rows="5" cols="80" 
                                          v-bind:class="{'': true, 'has-error': errors.has('editor') }" 
                                          v-model="editor"
                                          data-vv-rules="required">
                                </textarea>
                                <input class="AlmId" id="AlmId" name="AlmId" value="" hidden="true" />
                                <input class="tarSel" id="tarSel" name="tarSel" v-model="ttar.tarAct" hidden="true" data-vv-rules="required"/>
                                <input class="tarSelMem" id="tarSelMem" name="tarSelMem" v-model="ttar.mem" hidden="true" data-vv-rules="required"/>

                            </div>  
                        </div>    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" v-on:click="iniVal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" v-bind:disabled="ttar.tarAct==0">Guardar</button>
                    </div>
            </form>
        </div>
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
