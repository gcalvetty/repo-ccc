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
            <li class="header">Menú del Regente</li>
            <li class="<?php echo ((Route::current()->getName() == 'Rege.Reg')) ? "active" : ""; ?>">
                <a href="/regente/">
                    <i class="fa fa-th"></i> <span>Escritorio</span>            
                </a>
            </li>
            <li class="treeview <?php echo ((Route::current()->getName() == 'Rege.Comp')or(Route::current()->getName() == 'Rege.Comp.Nivel')) ? "active" : ""; ?>">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Comportamiento</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php $__currentLoopData = $Niveles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="<?php echo ($Nivel->grd_nivel_id == $NivSel) ? "active" : ""; ?>">
                        <a href="<?php echo e(route('Rege.Comp.Nivel',$Nivel->grd_nivel_id)); ?>"><i class="fa fa-circle-o"></i> <?php echo e($Nivel->grd_nivel_nombre); ?></a>
                    </li>                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <li class="<?php echo (Route::current()->getName() == 'Rege.Comp') ? "active" : ""; ?>">            
                        <a href="<?php echo e(route('Rege.Comp')); ?>">
                            <i class="fa fa-circle-o"></i> <span>Todos los grados</span>                    
                        </a>                
                    </li> 
                </ul>
            </li> 




        </ul>
    </section>
    <!-- /.sidebar -->
</aside>   