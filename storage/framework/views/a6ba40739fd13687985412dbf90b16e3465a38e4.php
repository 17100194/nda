<?php $__env->startSection('content'); ?>
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title">Sponsored By</h1>
                    </div>
                    <img src="<?php echo e(asset('images/NIC-Logo.png')); ?>" class="center-block">
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>