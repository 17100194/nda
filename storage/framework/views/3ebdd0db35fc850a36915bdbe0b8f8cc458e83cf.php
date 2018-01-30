<?php $__env->startSection('content'); ?>
    <section class="flat-row page-contact-creative1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title fontweight600">Get In Touch</h1>
                        <div class="sub-title fontsize16">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur malesuada bibendum ante vel convallis. Integer<br>pellentesque nibh metus, et iaculis turpis porttitor ut. Cras consequat tortor tortor, sed semper turpis semper ac.<br>Suspendisse vel massa egestas, egestas metus ut, suscipit leo.
                        </div>
                    </div>
                </div>
                <div class="divider h53"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-maps">
                        <div id="maps2" class="maps" style="width: 100%; height: 520px;"></div>
                    </div>
                </div>
                <div class="divider h69"></div>
            </div>
            <div class="row">
                <div class="col-md-4 section-reponsive-mb30">
                    <div class="flat-address text-center">
                        <h2>Australia</h2>
                        <ul class="flat-information">
                            <li><a href="#">40 Baria Sreet 133/2 NewYork City, US</a></li>
                            <li>Email:<a href="#"> info.contact@gmail.com</a></li>
                            <li>Phone:<a href="#"> 123-456-7890</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 section-reponsive-mb30">
                    <div class="flat-address text-center">
                        <h2>United States</h2>
                        <ul class="flat-information">
                            <li><a href="#">40 Baria Sreet 133/2 NewYork City, US</a></li>
                            <li>Email:<a href="#"> info.contact@gmail.com</a></li>
                            <li>Phone:<a href="#"> 123-456-7890</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 section-reponsive-mb30">
                    <div class="flat-address text-center">
                        <h2>Viet Nam</h2>
                        <ul class="flat-information">
                            <li><a href="#">40 Baria Sreet 133/2 NewYork City, US</a></li>
                            <li>Email:<a href="#"> info.contact@gmail.com</a></li>
                            <li>Phone:<a href="#"> 123-456-7890</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flat-row bg-lightgreen page-contact-creative2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title fontweight600">Request A Free Consultation</h1>
                        <div class="sub-title fontsize24">
                            Fill out the form below to recieve a free and confidential intial consultation.
                        </div>
                    </div>
                </div>
                <div class="divider h34"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form-center">
                        <form id="contactform" class="contactform2 style3 focus-bottom" method="post" action="./contact/contact-process.php" >
                            <div class="wrap-type-input clearfix">
                                <p class="contact-input contact-name">
                                    <input type="text" size="30" placeholder="Name" name="name" id="name" required="">
                                </p>
                                <p class="contact-input contact-form-email">
                                    <input type="email"  size="30" placeholder="Email" name="email" id="email" required="">
                                </p>
                                <p class="contact-input contact-form-select">
                                    <select class="select-flaw">
                                        <option value="">Family Law</option>
                                        <option value="2d">Family Law</option>
                                        <option value="3d">Family Law</option>
                                    </select>
                                </p>
                            </div>
                            <div class="wrap-textarea">
                                <p class="contact-form-comment">
                                    <textarea id="message-contact" class="comment-messages" tabindex="4" name="Message" placeholder="Messages" required=""></textarea>
                                </p>
                            </div>
                            <div class="btn-contact text-center">
                                <p class="form-contact style2">
                                    <button class="flat-button">Send messages</button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>