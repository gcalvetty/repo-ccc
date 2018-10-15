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
                        
                        <div class="col-lg-12">   
                            <div class="form-group has-feedback {{ $errors->has('fec') ? ' has-error' : '' }}" v-bind:class="{'': true, 'has-error': errors.has('fec') }">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon10"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" id="fec"  name="fec" value="{{ old('fec') }}"  placeholder="Fecha DD/MM/YYYY" aria-describedby="basic-addon10" v-model="fec"  v-validate.initial="fec" data-vv-rules="required|date_format:DD/MM/YYYY" data-vv-delay="200" v-bind:class="{'': true, 'has-error': errors.has('fec') }">
                                </div>
                                <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('fec') }"></span>
                                @if ($errors->has('fec'))<span class="help-block"><strong>{{ $errors->first('fec') }}</strong></span>@endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#trj0">Sin tarjeta</a></li>
                                <li><a data-toggle="tab" href="#trj1">Tarjeta Blanca</a></li>
                                <li><a data-toggle="tab" href="#trj2">Tarjeta Amarilla</a></li>
                                <li><a data-toggle="tab" href="#trj3">Tarjeta Rojas</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="trj0" class="tab-pane fade in active">
                                    <div class="col-lg-12 bg-success">
                                        <div class="radio">                                        
                                            <label>
                                                <input type="radio" name="tipTarj" id="optionsRadios1" value="1" checked>
                                                Sin Tarjeta
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div id="trj1" class="tab-pane fade">
                                    <div class="col-lg-12 bg-info">  
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="tipTarj" id="optionsRadios2" value="2" >
                                                Tarjeta Blanca
                                            </label>
                                        </div>
                                        <div class="form-group has-feedback {{ $errors->has('tip_compB') ? ' has-error' : '' }} " v-bind:class="{'': true, 'has-error': errors.has('tip_compB') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1">                                        
                                                    <i class="fa fa-balance-scale"></i></span>
                                                <select type="text" class="form-control" id="tip_compB"  name="tip_compB" value=""  placeholder="Tipo de Comportamiento" 
                                                        v-model="tip_compB" 
                                                        v-validate.initial="tip_compB" 
                                                        data-vv-rules="required" 
                                                        data-vv-delay="500" 
                                                        v-bind:class="{'': true, 'has-error': errors.has('tip_compB') }">                                    
                                                    @foreach($ListaComp as $TipComp)
                                                    @if ($TipComp->regt_tt_id == 2)
                                                    <option value="{{ $TipComp->regt_id }}">{{ $TipComp->regt_descripcion }}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('tip_compB') }"></span>
                                            @if ($errors->has('tip_compB'))<span class="help-block"><strong>{{ $errors->first('tip_compB') }}</strong></span>
                                            @endif
                                        </div>
                                    </div> 
                                </div>
                                <div id="trj2" class="tab-pane fade">
                                    <div class="col-lg-12 bg-warning">   
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="tipTarj" id="optionsRadios3" value="3">
                                                Tarjeta Amarrilla
                                            </label>
                                        </div>
                                        <div class="form-group has-feedback {{ $errors->has('tip_compA') ? ' has-error' : '' }} " v-bind:class="{'': true, 'has-error': errors.has('tip_compA') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1">                                        
                                                    <i class="fa fa-balance-scale"></i></span>
                                                <select type="text" class="form-control" id="tip_compA"  name="tip_compA" value=""  placeholder="Tipo de Comportamiento" 
                                                        v-model="tip_compA" 
                                                        v-validate.initial="tip_compA" 
                                                        data-vv-rules="required" 
                                                        data-vv-delay="500" 
                                                        v-bind:class="{'': true, 'has-error': errors.has('tip_compA') }">                                    
                                                    @foreach($ListaComp as $TipComp)
                                                    @if ($TipComp->regt_tt_id == 3)
                                                    <option value="{{ $TipComp->regt_id }}">{{ $TipComp->regt_descripcion }}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('tip_compA') }"></span>
                                            @if ($errors->has('tip_compA'))<span class="help-block"><strong>{{ $errors->first('tip_compA') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div id="trj3" class="tab-pane fade">                                    

                                    <div class="col-lg-12 bg-danger"> 
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="tipTarj" id="optionsRadios4" value="4" >
                                                Tarjeta Roja
                                            </label>
                                        </div> 
                                        <div class="form-group has-feedback {{ $errors->has('tip_compA') ? ' has-error' : '' }} " v-bind:class="{'': true, 'has-error': errors.has('tip_compA') }">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1">                                        
                                                    <i class="fa fa-balance-scale"></i></span>
                                                <select type="text" class="form-control" id="tip_compA"  name="tip_compA" value=""  placeholder="Tipo de Comportamiento" 
                                                        v-model="tip_compA" 
                                                        v-validate.initial="tip_compA" 
                                                        data-vv-rules="required" 
                                                        data-vv-delay="500" 
                                                        v-bind:class="{'': true, 'has-error': errors.has('tip_compA') }">                                    
                                                    @foreach($ListaComp as $TipComp)
                                                    @if ($TipComp->regt_tt_id == 4)
                                                    <option value="{{ $TipComp->regt_id }}">{{ $TipComp->regt_descripcion }}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('tip_compA') }"></span>
                                            @if ($errors->has('tip_compA'))<span class="help-block"><strong>{{ $errors->first('tip_compA') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        

                        <div class="col-lg-12">    


                            <textarea id="editor" name="editor" rows="5" cols="80" 
                                      v-bind:class="{'': true, 'has-error': errors.has('observacion') }" 
                                      data-vv-rules="required" >
                            </textarea>

                        </div>
                        <input class="AlmId" id="AlmId" name="AlmId" value="" hidden="true">
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
