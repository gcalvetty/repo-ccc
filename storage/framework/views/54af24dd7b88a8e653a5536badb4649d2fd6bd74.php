<header class="main-header">
    <a href="<?php echo e(url('/')); ?>" class="logo">
    	 <span class="logo-lg"><?php echo e(config('app.name', 'CCC-SIS')); ?></span>
         <span class="logo-mini"><?php echo e(config('app.name', 'CCC')); ?></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php echo $__env->yieldContent('usuico-peq'); ?>
              <span class="hidden-xs"><?php echo $__env->yieldContent('usuccc'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo e(asset('imagenes/avatar/user-ccc-peq.png')); ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $__env->yieldContent('usuccc'); ?>
                  <small><?php echo $__env->yieldContent('Titulo'); ?></small>
                </p>
              </li>              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">                  
                                   
                </div>
                <div class="pull-right">
                  <a href="<?php echo e(url('/logout')); ?>" class="btn btn-default btn-flat"  onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo e(app('translator')->getFromJson('auth.logout')); ?>
                            </a>
                  <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>          
                              
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
</header>
