@extends('layouts_sisccc.pagsis_comunicado')
@section('titulo','Dirección | Comunicado')
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
@include('layouts_direccion.partials.menu')   
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
    <section id="contador_crud"></section>
    <section class="content" id="Dir_comunicado">

        <!-- Default box -->
        <div class="row">
            <div class="col-md-3" id="tarea">
                <div class="box box-info">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa  fa-pencil-square-o"></i>
                        <h3 class="box-title">Asignar Comunicado</h3>                        
                    </div>
                    <div class="box-body">

                        <form v-on:submit.prevent="validateBeforeSubmit" method="post">
                            <div class="col-lg-12">    
                                <div class="form-group has-feedback {{ $errors->has('com_para') ? ' has-error' : '' }} " 
                                     v-bind:class="{'': true, 'has-error': errors.has('com_para') }">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">                                        
                                            <i class="fa fa-users"></i></span>
                                        <select type="text" class="form-control" id="com_para"  name="com_para" value=""  placeholder="Comentario para:" 
                                                v-model="com_para" 
                                                v-validate.initial="com_para" 
                                                data-vv-rules="required" 
                                                data-vv-delay="500" 
                                                v-bind:class="{'': true, 'has-error': errors.has('com_para') }">                                    
                                            @foreach($ListaComTip as $TipCom)
                                            <option value="{{ $TipCom->comt_id }}">{{ $TipCom->comt_tipo }}</option>
                                            @endforeach 

                                        </select>
                                        <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('tip_comp') }"></span>
                                        @if ($errors->has('tip_comp'))<span class="help-block"><strong>{{ $errors->first('tip_comp') }}</strong></span>
                                        @endif
                                    </div>
                                </div>
                            </div> 


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


                            <div class="form-group col-md-12  has-feedback {{ $errors->has('com_desc') ? ' has-error' : '' }} "
                                 v-bind:class="{'': true, 'has-error': errors.has('com_desc') }">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <i class="fa fa-clipboard"></i></span>
                                    <input type="text" class="form-control" 
                                           name="com_desc"     
                                           placeholder="Descripción del Comunicado"
                                           v-model ="com_desc"                                        
                                           v-validate.initial="com_desc" 
                                           data-vv-rules="required|min:3|max:200" 
                                           data-vv-delay="500" 
                                           v-bind:class="{'': true, 'has-error': errors.has('com_desc') }">
                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" 
                                          v-bind:class="{'': true, 'glyphicon-remove': errors.has('com_tit') }"></span>
                                    @if ($errors->has('com_tit'))<span class="help-block"><strong>{{ $errors->first('com_tit') }}</strong></span>
                                    @endif
                                </div>
                            </div> 

                            <div class="form-group col-md-12 has-feedback {{ $errors->has('com_fec') ? ' has-error' : '' }} "
                                 v-bind:class="{'': true, 'has-error': errors.has('com_fec') }">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" 
                                           name="com_fec"     
                                           v-model ="com_fec"
                                           placeholder="Fecha DD/MM/YYYY"                                           
                                           v-validate.initial="com_fec" 
                                           data-vv-rules="required|date_format:DD/MM/YYYY" 
                                           data-vv-delay="200" 
                                           v-bind:class="{'': true, 'has-error': errors.has('com_fec') }"                                           
                                           >
                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" 
                                          v-bind:class="{'': true, 'glyphicon-remove': errors.has('com_fec') }"></span>
                                    @if ($errors->has('com_tit'))<span class="help-block"><strong>{{ $errors->first('com_fec') }}</strong></span>
                                    @endif
                                </div>
                            </div>                           

                            <div class="box-footer clearfix">                        
                                <input type="submit" class="btn btn-primary" value="Guardar">                             
                            </div>
                        </form>
                    </div>

                </div>
            </div>  


            <div class="col-md-9" id="verTareas"> 
                <div class="box box-success">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-thumb-tack"></i>
                        <h3 class="box-title">Comunicados</h3>                        
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="simple" class="table table-stripe table-hover">
                                <thead> 
                                    <tr>
                                        <th>#</th> 
                                        <th>Tipo</th>
                                        <th>Titulo</th>
                                        <th>Descripción</th> 
                                        <th>Fecha</th>                                 
                                        <th>Accion</th> 
                                    </tr> 
                                </thead>
                                <tbody v-for="com in listado">
                                    <tr scope="row">
                                        <td>@{{ com.com_id}}</td>
                                        <td>@{{ com.comt_tipo}}</td>
                                        <td>@{{ com.com_titulo }}</td>
                                        <td>@{{ com.com_desc}}</td>                                
                                        <td>@{{ com.com_fec}}</td>                                        
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
        <!-- /.col -->
</div>
<!-- /.box -->

</section>
<!-- /.content -->

</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    {!! Html::footer('siscccConfig.pie') !!}
</footer>
@endsection


