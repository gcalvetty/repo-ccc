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
            <li class="<?php echo ((Route::current()->getName() == 'Rege.Reg'))? "active":"";?>">
                <a href="/regente/">
                    <i class="fa fa-th"></i> <span>Escritorio</span>            
                </a>
            </li>
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Comportamiento</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Primaria</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Secundaria</a></li>
                </ul>
            </li> 
            
            
            <li class="<?php echo ((Route::current()->getName() == 'Rege.Comp'))? "active":"";?>">            
                <a href="<?php echo e(route('Rege.Comp')); ?>">
                    <i class="fa fa-folder"></i> <span>Comportamiento</span>                    
                </a>                
            </li> 
              
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>   