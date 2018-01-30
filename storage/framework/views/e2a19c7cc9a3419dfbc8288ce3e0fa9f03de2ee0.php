<?php $__env->startSection('content'); ?>
    <section class="flat-row v8 bg-gray3">
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
                        <h2>Login to your account</h2>
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <label>Email</label>
                                <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <label>Password</label>
                                <input id="password" type="password" name="password" required>
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <input type="checkbox" name="remember" id="remember" class="float-left" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                <label for="remember" class="float-left">Remember Me</label>
                                <a class="float-right" href="<?php echo e(route('password.request')); ?>">
                                    Forgot Your Password?
                                </a>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="flat-button btn-block">Login</button>
                            </div>

                            <div class="form-group text-center">
                                <p>Don't have an account? <a href="<?php echo e(url('register')); ?>">Join Now</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>