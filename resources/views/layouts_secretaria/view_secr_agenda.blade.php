@extends('layouts_sisccc.pagsis_agenda')
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
            <li><a href="/dirección/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Escritorio</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content" id="Secr_agenda">


        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Evento</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>            
                </div>
            </div>
            <div class="box-body">
                <div class="col-md-4" id="Evento">
                    <div class="box box-info">
                        <div class="box-header ui-sortable-handle" style="cursor: move;">
                            <i class="fa  fa-pencil-square-o"></i>
                            <h3 class="box-title">Crear Evento</h3>                        
                        </div>
                        <div class="box-body">
                            <form action="#" v-on:submit.prevent="crearEvento" method="post">
                                <div class="form-group has-feedback" v-bind:class="{'': true, 'has-error': errors.has('fec_ini') }">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon10"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" id="fec_nac"  name="fec_ini" value="{{ old('fec_ini') }}"  placeholder="Fecha Inicio DD/MM/YYYY" aria-describedby="basic-addon10" v-model="fec_nac"  v-validate.initial="fec_nac" data-vv-rules="required|date_format:DD/MM/YYYY" data-vv-delay="200" v-bind:class="{'': true, 'has-error': errors.has('fec_nac') }">
                                    </div>
                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('fec_ini') }"></span>                                    
                                </div>

                                <div class="form-group has-feedback" v-bind:class="{'': true, 'has-error': errors.has('fec_fin') }">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon10"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" id="fec_nac"  name="fec_fin" value="{{ old('fec_fin') }}"  placeholder="Fecha Final DD/MM/YYYY" aria-describedby="basic-addon10" v-model="fec_nac"  v-validate.initial="fec_nac" data-vv-rules="required|date_format:DD/MM/YYYY" data-vv-delay="200" v-bind:class="{'': true, 'has-error': errors.has('fec_nac') }">
                                    </div>
                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('fec_fin') }"></span>                                    
                                </div>

                                <div class="form-group has-feedback" v-bind:class="{'': true, 'has-error': errors.has('evento') }">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon10"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" id="fec_nac"  name="evento" value="{{ old('evento') }}"  placeholder="Evento" aria-describedby="basic-addon10" v-model="evento"  v-validate.initial="evento" data-vv-rules="required" data-vv-delay="200" v-bind:class="{'': true, 'has-error': errors.has('evento') }">
                                    </div>
                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('fec_fin') }"></span>                                    
                                </div>

                                <span v-for="error in errors" class="text-danger">
                                    @{{ error }}
                                </span> 

                                <div class="box-footer clearfix">                        
                                    <input type="submit" class="btn btn-primary" value="Guardar">                             
                                </div>

                            </form>
                        </div>

                    </div>
                </div> 
                <div class="col-md-8" id="calGECN">
                    <div class="box box-primary">
                        <div class="box-body no-padding">
                            <!-- THE CALENDAR -->
                            <div id="calendario"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                </div>
            </div>
            <!-- /.box-body -->            

            <!-- /.box -->
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
