<?php $__env->startSection('content'); ?>
    <section class="flat-row v8">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="padding-contact">
                        <?php if(session()->has('message')): ?>
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button>
                                <i class="fa fa-check-circle"></i> <?php echo e(session()->pull('message')); ?>

                            </div>
                        <?php endif; ?>
                        <h1>Set New Password</h1>
                        <form method="POST" action="<?php echo e(route('password.request')); ?>">
                            <?php echo e(csrf_field()); ?>


                            <input type="hidden" name="token" value="<?php echo e($token); ?>">

                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <input id="email" type="email" placeholder="Email" name="email" value="<?php echo e(isset($email) ? $email : old('email')); ?>" required autofocus>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <input id="password" type="password" placeholder="New Password" name="password" required>
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" name="password_confirmation" required>
                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="flat-button btn-block">
                                    Reset Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>