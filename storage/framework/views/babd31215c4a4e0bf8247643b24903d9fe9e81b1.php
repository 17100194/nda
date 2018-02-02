<?php $__env->startSection('content'); ?>
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="title-section">
                        <h1 class="title">Visual Communication Design</h1>
                        <p class="sub-title">All visual and graphic design, branding and identity projects for print, digital or physical environments for e.g., logos, environmental graphics, signage, typefaces, infographics, motion graphics, print design, advertising, etc.</p>
                        <ul class="list-style style-caret">
                            <li class="active">
                                <a>Static</a>
                            </li>
                            <p class="sub-title">Given for originality and uniqueness in design style with a distinctive personal, depth, innovation, aesthetic quality, creativity, and presentation (how are designs presented and overall composition of portfolio).</p>
                            <li class="active">
                                <a>Animation</a>
                            </li>
                            <p class="sub-title">Given for its well-designed mix of concept, visual design, storytelling and engagement.</p>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 padding-top-40">
                    <img src="<?php echo e(asset('images/categories/VCD.png')); ?>" class="center-block">
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title color-white">Visual Communication Design Jury 2018</h1>
                    </div>
                    <img src="<?php echo e(asset('images/comingsoon.png')); ?>" class="center-block">
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>