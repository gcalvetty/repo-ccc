<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                @yield('usuico')
            </div>
            <div class="pull-left info">
                <p>@yield('usuccc')</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Conectado</a>
            </div>
        </div>
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Menú del Estudiante</li>
            <li class="<?php echo ((Route::current()->getName() == 'Escritorio'))? "active":"";?>">
                <a href="{{ route('Escritorio') }}">
                    <i class="fa fa-th"></i> <span>Escritorio</span>            
                </a>
            </li>
            @if ($VerCont=="Inscrito")
            <li class="treeview hidden">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>RUDE</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Datos del Estudiante</a></li>
                </ul>
            </li>
            
            <li class="<?php echo ((Route::current()->getName() == 'est.Tareas'))? "active":"";?>">
                <a href="{{ route('est.Tareas') }}">
                    <i class="fa fa-tasks"></i><span>Tareas a Realizar</span>                    
                </a>
            </li>
            
            <li class="<?php echo ((Route::current()->getName() == 'est.Compor'))? "active":"";?>">
                <a href="{{ route('est.Compor') }}">
                    <i class="fa fa-binoculars"></i><span>Comportamiento</span>                    
                </a>
            </li>
            
            <li class="<?php echo ((Route::current()->getName() == 'est.actividades'))? "active":"";?>">
                <a href="{{ route('est.actividades') }}">
                    <i class="fa  fa-calendar-check-o"></i> <span>Calendario de Actividades</span>                   
                </a>
            </li>
            @endif
            
            
                                 
        </ul>
    </section>
    <!-- /.sidebar -->
</aside> 