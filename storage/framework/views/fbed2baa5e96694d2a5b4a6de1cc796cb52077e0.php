<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container menu-home">
        <div class="navbar-header">
            <div class="pull-left image">
            <img src="/imagenes/logo-ccc.png">
            </div>
            <a class="navbar-brand home-tit" href="<?php echo e(url('/')); ?>">
            <b>Sistema Educativo</b> - "<?php echo e(config('app.name', 'CCC-SIS')); ?>" </a>
        </div>

        <div class="menuGECN collapse navbar-collapse" id="app-navbar-collapse">                    
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usu_adm')): ?>
                <li><a href="<?php echo e(route('acceder')); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> <?php echo e(app('translator')->getFromJson('auth.login')); ?></a></li>
                <li><a href="<?php echo e(url('/register')); ?>"><i class="fa fa-user-plus" aria-hidden="true"></i> <?php echo e(app('translator')->getFromJson('auth.register')); ?></a></li>
                <?php endif; ?>
                
            </ul>
            <ul class=" nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <?php if(Auth::guest()): ?>               
                <li><a href="<?php echo e(route('acceder')); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> <?php echo e(app('translator')->getFromJson('auth.login')); ?></a></li> 
                
                <?php else: ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <?php echo e(Auth::user()->ape_paterno .' '. Auth::user()->nombre); ?> <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li class="">
                            <a href="<?php echo e(session('Ruta-Acceso')); ?>"><i class="fa fa-desktop" aria-hidden="true"></i> <?php echo e(app('translator')->getFromJson('auth.dashbord')); ?>
                            </a>

                            <form id="logout-form" action="<?php echo e(route('cerrar-acceso')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </li>
                        <li class="">
                            <a href="<?php echo e(route('cerrar-acceso')); ?>"
                               onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo e(app('translator')->getFromJson('auth.logout')); ?>
                            </a>

                            <form id="logout-form" action="<?php echo e(route('cerrar-acceso')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </li>                        
                    </ul>
                </li>
                <?php endif; ?>
            </ul>
            
        </div>
    </div>
</nav>