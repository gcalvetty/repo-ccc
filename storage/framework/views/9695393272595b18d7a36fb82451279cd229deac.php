<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?php echo $__env->yieldContent('usuico'); ?>
            </div>
            <div class="pull-left info">
                <p><?php echo $__env->yieldContent('usuccc'); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Conectado</a>
            </div>
        </div>
        
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Menú de Secretaria</li>
            <li class="<?php echo ((Route::current()->getName() == 'Secr.Reg'))? "active":"";?>">
                <a href="<?php echo e(route('Secr.Reg')); ?>">
                    <i class="fa fa-dashboard"></i> <span>Escritorio</span>            
                </a>
            </li>
             
            
            <li class="<?php echo ((Route::current()->getName() == 'Secr.Reg1'))? "active":"";?> hidden">
                <a href="<?php echo e(route('Secr.agenda')); ?>">
                    <i class="fa fa-calendar"></i><span>Agenda</span>
                    
                </a>
            </li>
            
            <li class="<?php echo ((Route::current()->getName() == 'Secr.actividades'))? "active":"";?>">
                <a href="<?php echo e(route('Secr.actividades')); ?>">
                    <i class="fa  fa-calendar-check-o"></i> <span>Calendario de Actividades</span>                    
                </a>
            </li> 
            
            <li class="<?php echo ((Route::current()->getName() == 'Secr.reportes'))? "active":"";?>">
                <a href="<?php echo e(route('Secr.reportes')); ?>">
                    <i class="fa fa-file-excel-o"></i> <span>Reportes</span>                    
                </a>
            </li>            
        </ul>
    </section>
    <!-- /.sidebar -->

</aside>    

