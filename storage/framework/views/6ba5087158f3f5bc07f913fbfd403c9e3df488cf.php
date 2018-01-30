<?php $__env->startSection('content'); ?>
    <section class="flat-row v8 bg-gray3">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="padding-contact">
                        <?php if(session()->has('status')): ?>
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button>
                                <i class="fa fa-check-circle"></i> <?php echo e(session()->pull('status')); ?>

                            </div>
                        <?php endif; ?>
                        <h2>Reset Password</h2>
                            <p>Please enter your email and we will send an email to reset your password.</p>
                            <br>
                        <form method="POST" action="<?php echo e(route('password.email')); ?>">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <label>Email</label>
                                <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="flat-button btn-block">
                                    Send Password Reset Link
                                </button>
                            </div>

                            <div class="form-group">
                                <p class="float-left">Don't have an account? <a href="<?php echo e(url('register')); ?>">Join Now</a></p>
                                <p class="float-right"><a href="<?php echo e(url('login')); ?>">Sign In</a></p>
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