<?php $__env->startSection('content'); ?>
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="title-section">
                        <h1 class="title">Interior Design</h1>
                        <p class="sub-title">Given to an individual for exceptional work in domestic, corporate, or cultural interior design.</p>
                    </div>
                </div>
                <div class="col-md-5 padding-top-40">
                    <img src="<?php echo e(asset('images/categories/interior.png')); ?>" class="center-block">
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title color-white">Interior Design Jury 2018</h1>
                    </div>
                    <img src="<?php echo e(asset('images/comingsoon.png')); ?>" class="center-block">
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>