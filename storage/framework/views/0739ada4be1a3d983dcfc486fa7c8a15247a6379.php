<?php $__env->startSection('content'); ?>
    <section class="flat-row v8 bg-gray3">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="padding-contact">
                        <?php if(session()->has('message')): ?>
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <i class="fa fa-check-circle"></i> <?php echo session()->pull('message') ?>
                            </div>
                        <?php endif; ?>
                        <h2>Create your account</h2>
                        <form method="POST" action="<?php echo e(route('register')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                <label>Full Name</label>
                                <input id="name" type="text" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <label>Email</label>
                                <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <label>Password</label>
                                <input id="password" type="password" name="password" required>
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input id="password-confirm" type="password" name="password_confirmation" required>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="flat-button btn-block">
                                    Register
                                </button>
                            </div>

                            <div class="form-group text-center">
                                <p>Already have an account? <a href="<?php echo e(url('login')); ?>">Sign In</a></p>
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