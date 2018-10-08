<div class="container ns panel-body">
    <div class="row">
        <?php if(true): ?>
        <div class="logeado col-lg-10 col-xs-push-1">
            <h1>Usuario, Logeado!!!</h1>            
            <p><a class="btn btn-primary btn-lg" href="<?php echo e(session('Ruta-Acceso')); ?>" role="button"><i class="fa fa-desktop" aria-hidden="true"></i> <?php echo e(app('translator')->getFromJson('auth.dashbord')); ?></a></p>
        </div>
        <?php else: ?>
        <div class="logeado col-lg-10 col-xs-push-1">
            <h1>Usuario, Logeado222!!!</h1>                        
        </div>        
        <?php endif; ?>
    </div><!-- /row -->
</div><!-- Container --> 