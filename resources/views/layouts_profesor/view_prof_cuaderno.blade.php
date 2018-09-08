@extends('layouts_sisccc.pagsis_actividad')
@section('titulo','Profesor | Cuaderno de Actividades')
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
@include('layouts_profesor.partials.menu')   
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
    <section class="content" id="Prof_Seguimiento">

        <!-- Default box -->
        <div class="row">
            <div class="col-md-12" id="tarea">
                <div class="box box-info">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa  fa-pencil-square-o"></i>
                        <h3 class="box-title">Seguimiento</h3>                        
                    </div>
                    <div class="box-body">
                        <form action="#" v-on:submit.prevent="crearSeguimiento" method="post">                                                      

                            <div class="form-group col-md-12" hidden="true">
                                <input type="text" class="form-control" 
                                       name="tar_desc"     
                                       v-model ="tar_desc"
                                       placeholder="Seguimiento">
                            </div> 

                            <div id="editor">
                                <textarea name="CCC" id="CCC" rows="5" cols="80">
                                    Ingrese su actividad!!!
                                </textarea>
                            </div>

                            <div class="box-footer clearfix">                        
                                <input type="submit" class="btn btn-primary" value="Guardar">                             
                            </div>

                            <span v-for="error in errors" class="text-danger">
                                @{{ error }}
                            </span> 

                        </form>
                    </div>

                </div>
            </div>  


            <div class="col-md-12" id="verTareas"> 
                <div class="box box-success">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-thumb-tack"></i>
                        <h3 class="box-title">Cuaderno de Seguimiento</h3>                        
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="simple" class="table table-stripe table-hover">
                                <thead> 
                                    <tr>
                                        <th>#</th> 
                                        <th>Fecha</th>
                                        <th>Curso</th>
                                        <th>Materia</th> 
                                        <th>Descripción</th>                                 
                                        <th>Accion</th> 
                                    </tr> 
                                </thead>
                                <tbody v-for="tarea in listado">
                                    <tr scope="row">
                                        <td>@{{ tarea.pc_id}}</td>                                
                                        <td>@{{ tarea.pc_fec }}</td>
                                        <td>@{{ tarea.pc_curso}}</td>                                
                                        <td>@{{ tarea.pc_materia}}</td>
                                        <td v-html="tarea.pc_desc" v-bind:id="tarea.pc_id" contenteditable="true">                                                                                                                               
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger" v-on:click.prevent="eliminarSeguimiento(tarea)">
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
