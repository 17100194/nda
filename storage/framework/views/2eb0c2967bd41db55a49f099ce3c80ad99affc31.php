<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'National Design Awards')); ?></title>

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('stylesheets/bootstrap.css')); ?>" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('stylesheets/style.css')); ?>">

    <!-- DropZone Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('stylesheets/dropzone.css')); ?>">

    <!-- iziModal Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('stylesheets/iziModal.css')); ?>">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('stylesheets/responsive.css')); ?>">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('stylesheets/colors/color5.css')); ?>" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('stylesheets/animate.css')); ?>">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('revolution/css/layers.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('revolution/css/settings.css')); ?>">

    <link href="<?php echo e(asset('icon/favicon.png')); ?>" rel="shortcut icon">
</head>
<body>

<!-- Boxed -->
<div class="boxed">
    <!-- Header -->
    <div class="site-header">
        <header id="header" class="<?php if (request()->is('/')):?>header logo-style2 header-absolute header-style2 header-navleft2 clearfix<?php else:?>header logo-style2 shawdow-header header-style2 background-white header-navleft2 clearfix<?php endif;?>">
            <div class="container-fluid">
                <div class="header-wrap <?php if (request()->is('/')):?>style-white<?php endif;?> clearfix">
                    <div class="logo-wrap">
                        <div id="logo" class="logo">
                            <a href="<?php echo e(url('/')); ?>" rel="home" title="NDA">
                                <img src="<?php if (request()->is('/')):?><?php echo e(asset('images/logo2.png')); ?><?php else:?><?php echo e(asset('images/logo.png')); ?><?php endif;?>" alt="NDA" style="width: 150px;">
                            </a>
                        </div><!-- /.logo -->
                    </div>
                    <div class="btn-menu <?php if (request()->is('/')):?>color-white<?php endif;?>">
                        <i class="ti-align-right"></i>
                    </div><!-- //mobile menu button -->
                    <div class="wrap-menu-extra <?php if (request()->is('/')):?>color-white<?php endif;?>">
                        <div class="menu-extra text-right <?php if (request()->is('/')):?>color-white<?php endif;?>">
                            <ul>
                                <li>
                                    <?php if(Auth::guest()): ?>
                                        <?php if (request()->is('/')):?><img src="<?php echo e(asset('images/NIC-Logo.png')); ?>" class="logo padding-top-20"><?php else:?><a href="<?php echo e(url('login')); ?>">Enter Now</a><?php endif;?>
                                    <?php else: ?>
                                        <?php if (request()->is('/')):?>
                                            <img src="<?php echo e(asset('images/NIC-Logo.png')); ?>" class="logo padding-top-20">
                                            <?php else:?>
                                            <a href="<?php echo e(url('submissions')); ?>">Participate Now</a>
                                            <?php endif;?>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nav-flat-wrap">
                        <div class="nav-wrap">
                            <nav id="mainnav" class="mainnav <?php if (request()->is('/')):?>color-white<?php endif;?>">
                                <ul class="menu">
                                    <li class="<?php echo e(request()->is('why-enter') || request()->is('how-to-enter') || request()->is('pricing-timeline') || request()->is('eligibility-criteria') ? 'home' : ''); ?>">
                                        <a>Get Started</a>
                                        <ul class="submenu list-style">
                                            <li class="<?php echo e(request()->is('why-enter') ? 'active' : ''); ?>"><a href="<?php echo e(url('why-enter')); ?>">Why Enter</a></li>
                                            <li class="<?php echo e(request()->is('how-to-enter') ? 'active' : ''); ?>"><a href="<?php echo e(url('how-to-enter')); ?>">How To Enter</a></li>
                                            <li class="<?php echo e(request()->is('pricing-timeline') ? 'active' : ''); ?>"><a href="<?php echo e(url('pricing-timeline')); ?>">Pricing & Timeline</a></li>
                                            <li class="<?php echo e(request()->is('eligibility-criteria') ? 'active' : ''); ?>"><a href="<?php echo e(url('eligibility-criteria')); ?>">Eligibility & Criteria</a></li>
                                        </ul>
                                    </li>
                                    <li class="<?php echo e(strpos(request()->url(),'category') ? 'home' : ''); ?>">
                                        <a>Categories</a>
                                        <ul class="submenu list-style">
                                            <li class="<?php echo e(request()->is('category/architecture') ? 'active' : ''); ?>"><a href="<?php echo e(url('category/architecture')); ?>">Architecture</a></li>
                                            <li class="<?php echo e(request()->is('category/concept-design') ? 'active' : ''); ?>"><a href="<?php echo e(url('category/concept-design')); ?>">Concept Design</a></li>
                                            <li class="<?php echo e(request()->is('category/consumer-product-design') ? 'active' : ''); ?>"><a href="<?php echo e(url('category/consumer-product-design')); ?>">Consumer Product Design</a></li>
                                            <li class="<?php echo e(request()->is('category/design-social-impact') ? 'active' : ''); ?>"><a href="<?php echo e(url('category/design-social-impact')); ?>">Design For Social Impact</a></li>
                                            <li class="<?php echo e(request()->is('category/education-initiative') ? 'active' : ''); ?>"><a href="<?php echo e(url('category/education-initiative')); ?>">Education Initiative</a></li>
                                            <li class="<?php echo e(request()->is('category/fashion-and-textile') ? 'active' : ''); ?>"><a href="<?php echo e(url('category/fashion-and-textile')); ?>">Fashion & Textile</a></li>
                                            <li class="<?php echo e(request()->is('category/furniture-and-lighting') ? 'active' : ''); ?>"><a href="<?php echo e(url('category/furniture-and-lighting')); ?>">Furniture & Lighting</a></li>
                                            <li class="<?php echo e(request()->is('category/industrial-product-design') ? 'active' : ''); ?>"><a href="<?php echo e(url('category/industrial-product-design')); ?>">Industrial Product Design</a></li>
                                            <li class="<?php echo e(request()->is('category/interactive-design') ? 'active' : ''); ?>"><a href="<?php echo e(url('category/interactive-design')); ?>">Interactive Design</a></li>
                                            <li class="<?php echo e(request()->is('category/packaging') ? 'active' : ''); ?>"><a href="<?php echo e(url('category/packaging')); ?>">Packaging</a></li>
                                            <li class="<?php echo e(request()->is('category/print-and-published-media') ? 'active' : ''); ?>"><a href="<?php echo e(url('category/print-and-published-media')); ?>">Print & Published Media</a></li>
                                            <li class="<?php echo e(request()->is('category/service-design') ? 'active' : ''); ?>"><a href="<?php echo e(url('category/service-design')); ?>">Service Design</a></li>
                                            <li class="<?php echo e(request()->is('category/visual-communication-design') ? 'active' : ''); ?>"><a href="<?php echo e(url('category/visual-communication-design')); ?>">Visual Communication Design</a></li>
                                        </ul>
                                    </li>
                                    <li class="<?php echo e(request()->is('jury') ? 'home' : ''); ?>"><a href="<?php echo e(url('jury')); ?>">Jury</a></li>
                                    <li class="<?php echo e(request()->is('sponsors') ? 'home' : ''); ?>"><a href="<?php echo e(url('sponsors')); ?>">Sponsors</a></li>
                                    <li class="<?php echo e(request()->is('about') ? 'home' : ''); ?>"><a href="<?php echo e(url('about')); ?>">About NDA</a></li>
                                </ul><!-- /.menu -->
                            </nav><!-- /.mainnav -->
                        </div><!-- /.nav-wrap -->
                    </div>
                </div><!-- /.header-inner -->
            </div>
        </header><!-- /.header -->
    </div>
<?php echo $__env->yieldContent('content'); ?>
<!-- Footer -->
    <footer class="blancejqurey footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 footer-reponsive">
                        <div class="title-section">
                            <img src="<?php echo e(asset('images/logo2.png')); ?>" width="200">
                            <p>The awards program aims to increase awareness of the impact of design by drawing attention to ways in which design enriches everyday life. We will have various categories for jury selected awards covering multiple disciplines of design.</p>
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-6 col-sm-6 footer-reponsive">
                        <div class="title-section line">
                            <h1 class="title" style="color: white">Get In Touch</h1>
                            <br>
                            <p class="sub-title"><i class="icon-Map-Marker2" style="color: #FEBD21;"></i> Lahore University of Management Sciences (LUMS), Lahore, Pakistan</p>
                            <br>
                            <p class="sub-title"><i class="icon-Mail" style="color: #FEBD21"></i> <a href="mailto:ndapakistan@gmail.com">ndapakistan@gmail.com</a></p>
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-widgets -->
        <div class="header-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-footer margin-top-51 padding-top-62">
                            <div class="float-left">
                                <p><i class="fa fa-copyright"></i> Copyright@2018 <span style="color: #FEBD21;">National Design Awards.</span> All Rights Reserved.</p>
                            </div>
                            <div class="flat-socials float-right text-right">
                                <a href="https://www.facebook.com/National-Design-Awards-872719382896472/" target="_blank"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Go Top -->
    <a class="go-top">
        <i class="ti-angle-up"></i>
    </a>
</div>

<!-- Javascript -->
<script type="text/javascript" src="<?php echo e(asset('javascript/jquery.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/dropzone.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/iziModal.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/loadingoverlay.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/jquery.easing.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/jquery-validate.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/jquery.fancybox.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/jquery-waypoints.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/imagesloaded.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/owl.carousel.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('javascript/jquery.cookie.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/jquery.isotope.min.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('javascript/parallax.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/jquery.magnific-popup.min.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('javascript/main.js')); ?>"></script>

<!-- Revolution Slider -->
<script type="text/javascript" src="<?php echo e(asset('revolution/js/jquery.themepunch.tools.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('revolution/js/jquery.themepunch.revolution.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('revolution/js/slider.js')); ?>"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="<?php echo e(asset('revolution/js/extensions/revolution.extension.actions.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('revolution/js/extensions/revolution.extension.carousel.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('revolution/js/extensions/revolution.extension.kenburn.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('revolution/js/extensions/revolution.extension.layeranimation.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('revolution/js/extensions/revolution.extension.migration.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('revolution/js/extensions/revolution.extension.navigation.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('revolution/js/extensions/revolution.extension.parallax.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('revolution/js/extensions/revolution.extension.slideanims.min.js')); ?>"></script>
<?php if(request()->is('submissions')): ?>
    <script>
        Dropzone.autoDiscover = false;
        var paymentFilename;
        var paymentDropzone;
        var submissionid;
        $('a[data-izimodal-open="#modal"]').on('click',function () {
            submissionid = $(this).data('id');
        });
        $("#modal").iziModal({
            title: 'Upload Payment Proof',
            restoreDefaultContent: true,
            headerColor: 'linear-gradient(135deg, #0B4869 30%, #FEBD21 70%)',
            onOpening: function () {
                $("#payment").dropzone({
                    paramName: 'payment_file',
                    addRemoveLinks: true,
                    maxFilesize: 3,
                    autoProcessQueue: false,
                    dictDefaultMessage: 'Drop your payment receipt here',
                    uploadMultiple: false,
                    maxFiles: 1,
                    acceptedFiles: 'image/*',
                    init: function () {
                        paymentDropzone = this;
                        paymentDropzone.on("success",function (file,response) {
                            paymentFilename = response;
                            window.location.reload();
                        });
                        paymentDropzone.on("sending", function(file, xhr, formData){
                            formData.append("submissionid", submissionid);
                        });
                        paymentDropzone.on("removedfile",function (file) {
                            file.previewElement.remove();
                            if (paymentFilename){
                                $.ajax({
                                    type: "GET",
                                    url: '<?php echo e(url('remove-payment')); ?>',
                                    data: {filename: paymentFilename},
                                    dataType: 'json',
                                    success: function (data) {
                                        paymentFilename = '';
                                    },
                                    error: function (data) {

                                    }
                                });
                            }
                        });
                    }
                });
            }
        });

        $('.save').on('click',function () {
            paymentDropzone.processQueue();
        });

        function deleteEntry(submissionid) {
            if (confirm('Are you sure you want to delete your entry? All the data associated with it will be removed')){
                $.ajaxSetup({
                    header:$('meta[name="_token"]').attr('content')
                });
                $.ajax({
                    type: "GET",
                    url: '<?php echo e(url('delete-entry')); ?>',
                    data: {submissionid: submissionid},
                    dataType: 'json',
                    success: function (data) {
                        if (data === 'success'){
                            window.location.reload();
                        }
                    },
                    error: function (data) {

                    }
                });
            }
        }
    </script>
<?php endif; ?>
<?php if(request()->is('submissions/professional') || request()->is('submissions/student')): ?>
    <script>
        $(document).ready(function() {

            window.onbeforeunload = function(){
                var msg = 'All your uploaded files will be lost';
                var isDirty = false;

                if (imagesDropzone.getAcceptedFiles().length > 0 || pdfDropzone.getAcceptedFiles().length > 0 || thumbDropzone.getAcceptedFiles().length > 0){
                    isDirty = true;
                }

                if(isDirty == true){
                    imagesDropzone.removeAllFiles();
                    pdfDropzone.removeAllFiles();
                    imagesDropzone.removeAllFiles();
                    return msg;
                }
            };

            $("#overview").on('keyup', function() {
                var words;
                if(this.value.match(/\S+/g) !== null) {
                    words = this.value.match(/\S+/g).length;
                } else {
                    words = 0;
                }
                if (words > 500) {
                    var trimmed = $(this).val().split(/\s+/, 500).join(" ");
                    $(this).val(trimmed + " ");
                }
                else {
                    $('#display_count_overview').text(500-words);
                }
            });

            var imageFilenames = [];
            var pdfFilename;
            var thumbnailFilename;

            Dropzone.autoDiscover = false;
            var imagesDropzone;
            $("#images").dropzone({
                paramName: 'image_files',
                addRemoveLinks: true,
                maxFilesize: 3,
                dictDefaultMessage: '<strong>Project Images</strong><br>You must include at least one image, maximum of 10',
                maxFiles: 10,
                acceptedFiles: 'image/*',
                init: function () {
                    imagesDropzone = this;
                    imagesDropzone.on("maxfilesexceeded", function(file) {
                        imagesDropzone.removeFile(file);
                    });
                    imagesDropzone.on("addedfile", function(file) {
                        if (this.files.length) {
                            var _i, _len, _ref = this.files.slice();
                            for (_i = 0, _len = this.files.length; _i < _len - 1; _i++) // -1 to exclude current file
                            {
                                if (_ref[_i].name === file.name && _ref[_i].size === file.size)
                                {
                                    this.removeFile(_ref[_i]);
                                }
                            }
                        }
                    });
                    imagesDropzone.on("success", function (file, response) {
                        imageFilenames.push({'clientName':file.name,'serverName':response});
                    });
                    imagesDropzone.on("removedfile", function (file) {
                        var filename = $.grep(imageFilenames, function(e){ return e.clientName == file.name; });
                        if (filename.length > 0){
                            $.ajax({
                                type: "GET",
                                url: '<?php echo e(url('remove-file')); ?>',
                                data: {filename: filename[0].serverName},
                                dataType: 'json',
                                success: function (data) {
                                    file.previewElement.remove();
                                    imageFilenames = $.grep(imageFilenames, function(e){
                                        return e.clientName != file.name;
                                    });
                                },
                                error: function (data) {

                                }
                            });
                        }
                    });
                }
            });
            var pdfDropzone;
            $("#pdf").dropzone({
                paramName: 'pdf_file',
                addRemoveLinks: true,
                dictDefaultMessage: '<strong>Project PDF (Optional)</strong>',
                uploadMultiple: false,
                maxFiles: 1,
                maxFilesize: 5,
                acceptedFiles: 'application/pdf',
                init: function () {
                    pdfDropzone = this;
                    pdfDropzone.on("success",function (file,response) {
                        pdfFilename = response;
                    });
                    pdfDropzone.on("removedfile",function (file) {
                        file.previewElement.remove();
                        if (pdfFilename){
                            $.ajax({
                                type: "GET",
                                url: '<?php echo e(url('remove-file')); ?>',
                                data: {filename: pdfFilename},
                                dataType: 'json',
                                success: function (data) {
                                    pdfFilename = '';
                                },
                                error: function (data) {

                                }
                            });
                        }
                    });
                }
            });
            var thumbDropzone;
            $("#thumbnail").dropzone({
                paramName: 'thumbnail_file',
                addRemoveLinks: true,
                maxFilesize: 3,
                dictDefaultMessage: '<strong>Thumbnail</strong>',
                uploadMultiple: false,
                maxFiles: 1,
                acceptedFiles: 'image/*',
                init: function () {
                    thumbDropzone = this;
                    thumbDropzone.on("success",function (file,response) {
                        thumbnailFilename = response;
                    });
                    thumbDropzone.on("removedfile",function (file) {
                        file.previewElement.remove();
                        if (thumbnailFilename){
                            $.ajax({
                                type: "GET",
                                url: '<?php echo e(url('remove-file')); ?>',
                                data: {filename: thumbnailFilename},
                                dataType: 'json',
                                success: function (data) {
                                    thumbnailFilename = '';
                                },
                                error: function (data) {

                                }
                            });
                        }
                    });
                }
            });

            $('#entry_form').on('submit',function (e) {
                e.preventDefault();
                var data = $('#entry_form').serializeArray();
                if(imagesDropzone.getAcceptedFiles().length === 0){
                    data.push({name: 'image_files', value:null});
                } else {
                    data.push({name: 'image_files', value:$.map(imageFilenames,function (value) {
                        return value.serverName;
                    })});
                }
                if(pdfFilename){
                    data.push({name: 'pdf_file', value:pdfFilename});
                }
                if(thumbDropzone.getAcceptedFiles().length === 0){
                    data.push({name: 'thumbnail_file', value:null});
                } else {
                    data.push({name: 'thumbnail_file', value:thumbnailFilename});
                }
                $.ajaxSetup({
                    header:$('meta[name="_token"]').attr('content')
                });
                $.ajax({
                    type:"POST",
                    url:'<?php echo e(url('submit-entry')); ?>',
                    data: data,
                    beforeSend: function() {
                        $('.form-group').removeClass('has-error');
                        $('div.has-error').remove();
                        $('.help-block').remove();
                        $.LoadingOverlay('show');
                    },
                    success: function(data){
                        $.LoadingOverlay('hide');
                        if(data.errors)
                        {
                            var arr = data.errors;
                            $.each(arr, function(index, value)
                            {
                                if (value.length != 0)
                                {
                                    if($('input[name='+index+']')) {
                                        $('input[name=' + index + ']').parent().addClass('has-error');
                                        $('input[name=' + index + ']').after('<span class="help-block"><strong>' + value + '</strong></span>');
                                    }
                                    if ($('textarea[name='+index+']')){
                                        $('textarea[name=' + index + ']').parent().addClass('has-error');
                                        if(index == 'overview' || index == 'details'){
                                            $('textarea[name=' + index + ']').next().after('<span class="help-block"><strong>' + value + '</strong></span>');
                                        } else {
                                            $('textarea[name=' + index + ']').after('<span class="help-block"><strong>' + value + '</strong></span>');
                                        }
                                    }
                                    if (index == 'categories'){
                                        $('input[name="categories[]"]').closest('.row').after('<div class="has-error padding-top-25"><span class="help-block"><strong>'+value+'</strong></span></div>');
                                    }
                                    if (index == 'image_files'){
                                        $('#images').after('<div class="has-error padding-top-25"><span class="help-block"><strong>'+value+'</strong></span></div>');
                                    }
                                    if (index == 'pdf_file'){
                                        $('#pdf').after('<div class="has-error padding-top-25"><span class="help-block"><strong>'+value+'</strong></span></div>');
                                    }
                                    if (index == 'thumbnail_file'){
                                        $('#thumbnail').after('<div class="has-error padding-top-25"><span class="help-block"><strong>'+value+'</strong></span></div>');
                                    }
                                }
                            });
                        } else {
                            window.onbeforeunload = null;
                            window.location.href = "<?php echo e(url('submissions')); ?>";
                        }
                    },
                    error: function(data){

                    }
                });
            });

            $('#submit_entry').on('click',function () {
                $('#entry_form').submit();
            });

            $("#details").on('keyup', function() {
                var words;
                if(this.value.match(/\S+/g) !== null) {
                    words = this.value.match(/\S+/g).length;
                } else {
                    words = 0;
                }
                if (words > 1500) {
                    var trimmed = $(this).val().split(/\s+/, 1500).join(" ");
                    $(this).val(trimmed + " ");
                }
                else {
                    $('#display_count_details').text(1500-words);
                }
            });
        });
    </script>
<?php endif; ?>
</body>
</html>