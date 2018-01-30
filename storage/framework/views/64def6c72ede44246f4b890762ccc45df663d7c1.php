<?php $__env->startSection('content'); ?>
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="title-section">
                        <h1 class="title">Industrial Product Design</h1>
                        <p class="sub-title">Given in recognition of practical products that deliver more with less by improving economic efficiency of manufacturing through design engineering so it’s cheap, useful, safe, long-lasting, environment friendly and socially responsive, i.e. has high demand, perceived value, and post-usage impacts for example equipment and systems designed for public, commercial, industrial, medical and scientific use (operational, production, construction, etc).</p>
                    </div>
                </div>
                <div class="col-md-5 padding-top-40">
                    <img src="<?php echo e(asset('images/categories/industry-product.png')); ?>" class="center-block">
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title color-white">Industrial Product Design Jury 2018</h1>
                    </div>
                    <img src="<?php echo e(asset('images/comingsoon.png')); ?>" class="center-block">
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>