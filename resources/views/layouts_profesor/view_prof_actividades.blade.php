@extends('layouts_sisccc.pagsis_actividad')
@section('titulo','Profesor')
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
    <section class="content" id="Prof_actividades">

        <!-- Default box -->
        <div class="row">
            <div class="col-md-3" id="tarea">
                <div class="box box-info">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa  fa-pencil-square-o"></i>
                        <h3 class="box-title">Asignar Tarea</h3>                        
                    </div>
                    <div class="box-body">
                        <form action="#" v-on:submit.prevent="crearTarea" method="post">
                            <div class="form-group col-md-12">                                                       
                                <select name="tar_m" id="tar_m" v-model="tar_materia" placeholder="Materia:">                                                                        
                                    <?php echo $Lista ?>                                                
                                </select>                                
                            </div>                           

                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" 
                                       name="tar_desc"     
                                       v-model ="tar_desc"
                                       placeholder="Actividad a realizar">
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


            <div class="col-md-9" id="verTareas"> 
                <div class="box box-success">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-thumb-tack"></i>
                        <h3 class="box-title">Tareas a Realizar</h3>                        
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
                                        <td>@{{ tarea.tar_id}}</td>                                
                                        <td>@{{ tarea.tar_fec_ini }}</td>
                                        <td>@{{ tarea.tar_curso}}</td>                                
                                        <td>@{{ tarea.tar_materia}}</td>
                                        <td>@{{ tarea.tar_desc}}</td>                                
                                        <td>
                                            <button type="button" class="btn btn-danger" v-on:click.prevent="eliminarTarea(tarea)">
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

	
