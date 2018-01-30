<?php $__env->startSection('content'); ?>
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="title-section">
                        <h1 class="title">Service Design</h1>
                        <p class="sub-title">Given in recognition of a service using design as a strategic tool as part of its mission, and has consistently exhibited ingenuity and insight in the relationship between design and quality of life for e.g. distribution or delivery systems, ways of connecting people or enabling transactions, funding platforms, web-based communities, etc.</p>
                    </div>
                </div>
                <div class="col-md-5 padding-top-40">
                    <img src="<?php echo e(asset('images/categories/service-design.png')); ?>" class="center-block">
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title color-white">Service Design Jury 2018</h1>
                    </div>
                    <img src="<?php echo e(asset('images/comingsoon.png')); ?>" class="center-block">
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>