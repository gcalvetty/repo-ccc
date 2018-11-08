<?php $__env->startSection('titulo'); ?>
<?php echo e(app('translator')->getFromJson('auth.titLogin')); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sis_contenido'); ?>
<div class="container">
    <div class="login-box col-md-6 col-md-offset-3 ">
        <div class="login-logo">
            <a href="<?php echo e(url('/')); ?>" class="logo">
                <span class="logo-lg"><?php echo e(config('app.name', 'CCC-SIS')); ?></span>
                <span class="logo-mini"><?php echo e(config('app.name', 'CCC')); ?></span>
            </a>
        </div>
        <div class="login-box-body">
            <div class="row">
                <div class="col-md-12 col-md-push-0 col-sm-6 col-sm-push-3 col-xs-12">
                    <div class="panel panel-success">
                        <div class="panel-heading"><?php echo e(app('translator')->getFromJson('auth.titLogin')); ?></div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('acceder')); ?>">
                                <?php echo e(csrf_field()); ?>


                                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                    <label for="email" class="col-md-4 control-label"><?php echo e(app('translator')->getFromJson('auth.mail')); ?></label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus btn >

                                        <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                    <label for="password" class="col-md-4 control-label"><?php echo e(app('translator')->getFromJson('auth.clv')); ?></label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        <?php if($errors->has('password')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"><?php echo e(app('translator')->getFromJson('auth.botRec')); ?>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                                            <a href="<?php echo e(route('homeCCC')); ?>" target="_blank" >
                                                <button type="button" class="btn btn-success" >
                                                    <i class="fa fa-reply"></i> <?php echo e(app('translator')->getFromJson('auth.botVolIni')); ?>
                                                </button>
                                            </a>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-external-link"></i> <b><?php echo e(app('translator')->getFromJson('auth.botAcs')); ?></b>
                                            </button>
                                        </div>
                                        <a class="btn btn-link " href="<?php echo e(url('/password/reset')); ?>">
                                            <?php echo e(app('translator')->getFromJson('auth.botOlvCnt')); ?>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> 
</div>       
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts_sisccc.pagsis_login', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>