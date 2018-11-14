@extends('layouts_sisccc.pagsis_cal_actividad')
@section('titulo','Secretaria')
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
@include('layouts_secretaria.partials.menu')   
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
            <li><a href="/direccion/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Escritorio</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content" id="Secr_actividad">

        <!-- Default box -->
        <div class="row">
            <div class="col-md-3" id="tarea">
                <div class="box box-info">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa  fa-pencil-square-o"></i>
                        <h3 class="box-title">Asignar Actividad</h3>                        
                    </div>
                    <div class="box-body">

                        <form v-on:submit.prevent="validateBeforeSubmit" method="post">


                            <div class="form-group col-md-12 has-feedback {{ $errors->has('com_tit') ? ' has-error' : '' }} "
                                 v-bind:class="{'': true, 'has-error': errors.has('com_tit') }">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <i class="fa fa-tumblr"></i></span>
                                    <input type="text" class="form-control" 
                                           name="com_tit"     
                                           placeholder="Titulo del Comunicado"
                                           v-model ="com_tit"                                        
                                           v-validate.initial="com_tit" 
                                           data-vv-rules="required|min:3|max:100" 
                                           data-vv-delay="500" 
                                           v-bind:class="{'': true, 'has-error': errors.has('com_tit') }">
                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" 
                                          v-bind:class="{'': true, 'glyphicon-remove': errors.has('com_tit') }"></span>
                                    @if ($errors->has('com_tit'))<span class="help-block"><strong>{{ $errors->first('com_tit') }}</strong></span>
                                    @endif
                                </div>
                            </div> 

                            <div class="col-md-12">
                                <div class="form-group has-feedback {{ $errors->has('fec') ? ' has-error' : '' }}" v-bind:class="{'': true, 'has-error': errors.has('fec') }">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon10">
                                            <i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                        <vuejs-datepicker id="fec" name="fec" 
                                                          :value="state.date" 
                                                          :format="customFormatter" 
                                                          :language="es"
                                                          data-vv-rules="required"
                                                          placeholder=" Seleccionar Fecha" 
                                                          v-model="fec"></vuejs-datepicker>
                                    </div>
                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('fec') }"></span>
                                    @if ($errors->has('fec'))<span class="help-block"><strong>{{ $errors->first('fec') }}</strong></span>@endif
                                    <p v-if="errors.has('fec:required')">Fecha Requerida</p>
                                </div>
                            </div>  
                            <div class="box-footer clearfix">                                                       
                                <button type="submit" class="btn btn-primary" v-bind:disabled="fec==0">Guardar</button>                            
                            </div>
                        </form>
                    </div>

                </div>
            </div>  


            <div class="col-md-9" id="verTareas"> 
                <div class="box box-success">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-thumb-tack"></i>
                        <h3 class="box-title">Actividades</h3>                        
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="simple" class="table table-stripe table-hover">
                                <thead> 
                                    <tr>                                                                               
                                        <th>Fecha</th> 
                                        <th>Titulo</th>          
                                        <th>Acción</th> 
                                    </tr> 
                                </thead>
                                <tbody v-for="com in listado">
                                    <tr scope="row">                                        
                                        <td>@{{ com.act_fec}}</td>
                                        <td>@{{ com.act_titulo }}</td>                                                                                                                        
                                        <td>
                                            <button type="button" class="btn btn-danger" v-on:click.prevent="eliminarComunicado(com)">
                                                <i class="fa fa-trash-o"> </i>
                                            </button>
                                        </td>
                                    </tr>    
                                </tbody>
                            </table>
                           
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </section> 
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    {!! Html::footer('siscccConfig.pie') !!}
</footer>
@endsection

@section('menu-configuracion')

@endsection	
