<?php $__env->startSection('titulo','Secretaria'); ?>
<?php $__env->startSection('usuccc'); ?>
<?php echo e($usuactivo); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('usuico'); ?>
<i class="fa fa-graduation-cap fa-2x"></i>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('usuico-peq'); ?>
<i class="fa fa-graduation-cap fa-lg"></i>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sis_menu_lateral'); ?>
<?php echo $__env->make('layouts_secretaria.partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sis_contenido'); ?>
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
                            

                            <div class="form-group col-md-12 has-feedback <?php echo e($errors->has('com_tit') ? ' has-error' : ''); ?> "
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
                                    <?php if($errors->has('com_tit')): ?><span class="help-block"><strong><?php echo e($errors->first('com_tit')); ?></strong></span>
                                    <?php endif; ?>
                                </div>
                            </div> 

                            <div class="col-md-12">
                                <div class="form-group has-feedback <?php echo e($errors->has('fec') ? ' has-error' : ''); ?>" v-bind:class="{'': true, 'has-error': errors.has('fec') }">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon10">
                                          <i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                          <vuejs-datepicker id="fec" name="fec" 
                                                          :value="state.date" 
                                                          :format="customFormatter" 
                                                          :language="es"
                                                          data-vv-rules="required"
                                                          placeholder=" Fecha Inicial" 
                                                          v-model="fec"></vuejs-datepicker>
                                    </div>
                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('fec') }"></span>
                                    <?php if($errors->has('fec')): ?><span class="help-block"><strong><?php echo e($errors->first('fec')); ?></strong></span><?php endif; ?>
                                    <p v-if="errors.has('fec:required')">Fecha Requerida</p>
                                </div>
                            </div>  
                            
                            <div class="col-md-12">
                                <div class="form-group has-feedback <?php echo e($errors->has('fec2') ? ' has-error' : ''); ?>" v-bind:class="{'': true, 'has-error': errors.has('fec2') }">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon10">
                                          <i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                          <vuejs-datepicker id="fec2" name="fec2" 
                                                          :value="state.date" 
                                                          :format="customFormatter" 
                                                          :language="es"
                                                          data-vv-rules="required"
                                                          placeholder=" Fecha Final" 
                                                          v-model="fec2"></vuejs-datepicker>
                                    </div>
                                    <span class="glyphicon  form-control-feedback" aria-hidden="true" v-bind:class="{'': true, 'glyphicon-remove': errors.has('fec2') }"></span>
                                    <?php if($errors->has('fec2')): ?><span class="help-block"><strong><?php echo e($errors->first('fec2')); ?></strong></span><?php endif; ?>
                                    <p v-if="errors.has('fec2:required')">Fecha Requerida</p>
                                </div>
                            </div>  
                            
                            <div class="box-footer clearfix">                                                       
                                <button type="submit" class="btn btn-primary" v-bind:disabled="fec==0 || fec2==0">Guardar</button>                            
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
                                        <td v-if="com.act_fec!=com.act_fecfin">{{ com.act_fecini2}}. <b>al</b> {{ com.act_fecfin2}}.</td>
                                        <td v-else>{{ com.act_fecini2}}.</td>
                                        <td>{{ com.act_titulo }}</td>
                                        
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
    <?php echo Html::footer('siscccConfig.pie'); ?>

</footer>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu-configuracion'); ?>

<?php $__env->stopSection(); ?>	

<?php echo $__env->make('layouts_sisccc.pagsis_cal_actividad', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>