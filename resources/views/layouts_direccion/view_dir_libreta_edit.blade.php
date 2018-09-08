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
@include('layouts_direccion.partials.menu_edit')
@endsection	

@section('sis_contenido')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">    	
    <!-- Content Header (Page header) -->
    <section class="content-header">      
        <h1>
            Escritorio:
            <small>Editar</small>
        </h1>
        {!! Breadcrumbs::render() !!}
    </section>    

    <section class="content editarRegAlm">        
        <div class="row ">
            <div  class="container inscripcion inscrForm col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">Libreta [@yield('titulo')]</div> 
                    <div class="panel-body">
                        @include('layouts_sisccc/pagsis-msg-reg-alm')
                        @include('layouts_sisccc/pagsis-error')            
                        @include('layouts_sisccc/pagsis-vue-data')
                        <div id="app" class="container-fluid"> 
                            <form v-on:submit="validateBeforeSubmit" class="form-horizontal" role="form" method="PUT" action="{{ route('libreta-d.update', ['alumno' => $Alumno->user_id]) }}">
                                {{ csrf_field() }}
                                @include('layouts_sisccc.partials.pagsis_edit_libreta')                   
                            </form>
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
            <h3 class="control-sidebar-heading">Actividades Recientes2</h3>
        </div>
    </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
@endsection
