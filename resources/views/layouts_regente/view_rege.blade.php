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
                                        <a href="{ route('rep.alumnos') }" target="_blank">
                                            <button type="button" class="btn btn-success" >
                                                <i class="fa fa-file-excel-o"></i>
                                            </button>
                                        </a> 
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
            <form v-on:submit="validateBeforeSubmit" class="form-horizontal" role="form" action="{{route('Rege.insCom')}}">    
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Comportamiento del Alumn@: <span class="Alm"></span></h4>
                    </div>
                    <div class="modal-body" >
                        <div class="col-md-12">
                            <div class="form-group has-feedback {{ $errors->has('fec') ? ' has-error' : '' }}" v-bind:class="{'': true, 'has-error': errors.has('fec') }">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon10"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                    <vuejs-datepicker id="fec" name="fec" :value="state.date" :format="customFormatter" :language="es" v-model="fec"></vuejs-datepicker>
                                </div>
                                <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('fec') }"></span>
                                @if ($errors->has('fec'))<span class="help-block"><strong>{{ $errors->first('fec') }}</strong></span>@endif
                            </div>
                        </div>
                        @{{ $data.ttar }}
                        
                        <div class="col-md-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#trj1">Sin tarjeta</a></li>
                                <li><a data-toggle="tab" href="#trj2">Tarjeta Blanca</a></li>
                                <li><a data-toggle="tab" href="#trj3">Tarjeta Amarilla</a></li>
                                <li><a data-toggle="tab" href="#trj4">Tarjeta Rojas</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="trj1" class="tab-pane fade in active">
                                    <div class="col-lg-12 bg-success">
                                        <div class="radio">                                        
                                            <label><input type="radio" id="tar1" v-bind:value="1" v-model="ttar.tar" v-on:select="cambTar">
                                            Sin Tarjeta</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="trj2" class="tab-pane fade">
                                    <div class="col-lg-12 bg-info">                                         
                                        <div class="form-group has-feedback {{ $errors->has('TB') ? ' has-error' : '' }} " v-show="ttar.tar==2" v-bind:class="{'': true, 'has-error': errors.has('TB') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1">                                        
                                                    <i class="fa fa-balance-scale"></i></span>
                                                <select type="text" class="form-control" placeholder="Tipo de Comportamiento"
                                                        id="TB"  name="TB" v-on:change='cambMem' 
                                                        v-model="TB"
                                                        v-validate.initial="TB" 
                                                        data-vv-rules="" 
                                                        data-vv-delay="500" 
                                                        v-bind:class="{'': true, 'has-error': errors.has('TB') }">                                    
                                                    @foreach($ListaComp as $TipComp)
                                                    @if ($TipComp->regt_tt_id == 2)
                                                    <option value="{{ $TipComp->regt_id }}">{{ $TipComp->regt_descripcion }}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('TB') }"></span>
                                            @if ($errors->has('TB'))<span class="help-block"><strong>{{ $errors->first('TB') }}</strong></span>
                                            @endif
                                        </div>
                                    </div> 
                                </div>
                                <div id="trj3" class="tab-pane fade">
                                    <div class="col-lg-12 bg-warning">                                           
                                        <div class="form-group has-feedback {{ $errors->has('TA') ? ' has-error' : '' }} " v-show="ttar.tar==3" v-bind:class="{'': true, 'has-error': errors.has('TA') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1">                                        
                                                    <i class="fa fa-balance-scale"></i></span>
                                                <select type="text" class="form-control" placeholder="Tipo de Comportamiento"
                                                        id="TA"  name="TA" v-on:change='cambMem' 
                                                        v-model="TA"
                                                        v-validate.initial="TA" 
                                                        data-vv-rules="" 
                                                        data-vv-delay="500" 
                                                        v-bind:class="{'': true, 'has-error': errors.has('TA') }">                                    
                                                    @foreach($ListaComp as $TipComp)
                                                    @if ($TipComp->regt_tt_id == 2)
                                                    <option value="{{ $TipComp->regt_id }}">{{ $TipComp->regt_descripcion }}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('TA') }"></span>
                                            @if ($errors->has('TA'))<span class="help-block"><strong>{{ $errors->first('TA') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div id="trj4" class="tab-pane fade">                                    

                                    <div class="col-lg-12 bg-danger"> 
                                        
                                        <div class="form-group has-feedback {{ $errors->has('TR') ? ' has-error' : '' }} " v-show="ttar.tar==4" v-bind:class="{'': true, 'has-error': errors.has('TR') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1">                                        
                                                    <i class="fa fa-balance-scale"></i></span>
                                                <select type="text" class="form-control" placeholder="Tipo de Comportamiento"
                                                        id="TR"  name="TR" v-on:change='cambMem' 
                                                        v-model="TR"
                                                        v-validate.initial="TR" 
                                                        data-vv-rules="" 
                                                        data-vv-delay="500" 
                                                        v-bind:class="{'': true, 'has-error': errors.has('TR') }">                                    
                                                    @foreach($ListaComp as $TipComp)
                                                    @if ($TipComp->regt_tt_id == 2)
                                                    <option value="{{ $TipComp->regt_id }}">{{ $TipComp->regt_descripcion }}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('TR') }"></span>
                                            @if ($errors->has('TR'))<span class="help-block"><strong>{{ $errors->first('TR') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12"> 
                            <textarea id="editor" name="editor" rows="5" cols="80" 
                                      v-bind:class="{'': true, 'has-error': errors.has('observacion') }" 
                                      v-model="observacion"
                                      data-vv-rules="required" >
                            </textarea>
                            <input class="AlmId" id="AlmId" name="AlmId" value="" hidden="true" />
                        </div>                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>                        
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']); !!}
                    </div>
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
