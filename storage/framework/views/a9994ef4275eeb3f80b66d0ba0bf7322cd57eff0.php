<?php $__env->startSection('titulo','Reporte'); ?>	

<?php $__env->startSection('sis_contenido'); ?>
<div class="container">
    <div class="alert alert-danger">
        Reporte de Comportamiento: <?php echo e($alumno); ?> 
    </div>   
    <div class="table-responsive">
        <table class="table table-bordered table-condensed">
            <thead> 
                <tr> 
                    <th>#</th> 
                    <th>Table heading</th> 
                    <th>Table heading</th> 
                    <th>Table heading</th> 
                    <th>Table heading</th> 
                    <th>Table heading</th> 
                    <th>Table heading</th> 
                </tr> 
            </thead> 
            <tbody> 
                <tr> 
                    <th scope="row">1</th> 
                    <td>Table cell</td> 
                    <td>Table cell</td> 
                    <td>Table cell</td> 
                    <td>Table cell</td> 
                    <td>Table cell</td> 
                    <td>Table cell</td> 
                </tr> 
            </tbody>         
        </table>
    </div>
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">

</footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts_sisccc.pagsis_pdf', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>