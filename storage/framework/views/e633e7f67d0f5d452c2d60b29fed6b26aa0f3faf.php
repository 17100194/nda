<?php $__env->startSection('content'); ?>
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section line">
                        <h1 class="title">How To Enter?</h1>
                    </div>
                    <div class="divider"></div>
                    <div class="content-post">
                        <h2 class="title-post"><i class="icon-Arrow-Forward2"></i> Registeration</h2>
                        <p class="fontsize20">The participants are required to submit their entry online. The online portal allows you to register and upload your submission. If you don't have an account, it's easy to <a href="<?php echo e(url('register')); ?>" style="color: #FEBD21;">create one</a>. If you do, <a href="<?php echo e(url('login')); ?>" style="color: #FEBD21">sign in</a> and get started today. After creating and confirming your account, sign in and click on the Participate Now button. Here, you can create a new entry</p>
                    </div>
                    <div class="divider"></div>
                    <div class="content-post">
                        <h2 class="title-post"><i class="icon-Arrow-Forward2"></i> Submission Details</h2>
                        <p class="fontsize20">A minimum of 1 and a maximum of 10 ./jpg/.jpeg/.png images and/or any video (upto 3 minutes) with information about your project where you describe your project. </p>
                        <br>
                        <p class="fontsize20">The size of each image can not be more than 3 MB. The images need to be depictive of your project and it is preferable to avoid use of a lot of text</p>
                        <br>
                        <p class="fontsize20">The video needs to be uploaded on YouTube, Vimeo or any online drive which provides an external share link. This external link needs to provided in the submission form.</p>
                    </div>
                    <div class="divider"></div>
                    <div class="content-post">
                        <h2 class="title-post"><i class="icon-Arrow-Forward2"></i> Project Overview</h2>
                        <p class="fontsize20">A 500 word overview of your project where you provide us with the high level description of the working of your project</p>
                    </div>
                    <div class="divider"></div>
                    <div class="content-post">
                        <h2 class="title-post"><i class="icon-Arrow-Forward2"></i> Project Details</h2>
                        <p class="fontsize20">A 1500 in depth description of your project, describing every aspect of it in detail. </p>
                    </div>
                    <div class="divider"></div>
                    <div class="content-post">
                        <h2 class="title-post"><i class="icon-Arrow-Forward2"></i> Thumbnail</h2>
                        <p class="fontsize20">Size - 1920 x 1080 pixels. The maximum file size allowed for this is 5 MB. The acceptable formats are ./jpg/.jpeg/.png. This image will be used for thumb nailing, so make sure this image is one of your best ones.</p>
                        <br>
                        <p class="fontsize20">If your image size is larger than the file size limit, you may upload your image on an online image hosting website and submit the link for that image. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>