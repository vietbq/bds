<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $this->fetch('title_for_layout'); ?></title>
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- end: Mobile Specific -->
        <base href="<?php echo BASE_URL ?>" />

        <!-- start: CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/retina.min.css" rel="stylesheet" />
        <link href="assets/css/jquery-ui-1.10.3.custom.css" rel="stylesheet" />
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/css/halflings.css" rel="stylesheet" />
        <link href="assets/css/social.css" rel="stylesheet" />
        <link href="http://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" />
        <link href="http://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" />
        <link href="http://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" />
        <link href="assets/css/style.min.css" rel="stylesheet" />
        <link href="assets/css/customs.css" rel="stylesheet" />
        <link href="assets/css/dropzone.css" rel="stylesheet" />
        <!--<link href="ckeditor/sample.css" rel="stylesheet" />-->

        <!-- end: CSS -->

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <script src="assets/js/respond.min.js"></script>
                <script src="assets/css/ie6-8.css"></script>
        <![endif]-->

        <!-- start: Favicon and Touch Icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/ico/apple-touch-icon-57-precomposed.png" />
        <link rel="shortcut icon" href="assets/ico/favicon.png" />
        <!-- end: Favicon and Touch Icons -->	
        <script src="assets/js/jquery-1.11.1.min.js"></script>

	<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    </head>

    <body>
	<?php echo $this->element("admin_top"); ?>

        <div class="container">
            <div class="row">

                <!-- start: Main Menu -->
                <div id="sidebar-left" class="col-lg-2 col-sm-1">
				<?php echo $this->element("admin_left_menu"); ?>
                </div>
                <!-- end: Main Menu -->

                <!-- start: Content -->
                <div id="content" class="col-lg-10 col-sm-11">
                    <div class="row">
					<?php echo $this->fetch('content'); ?>
                    </div><!--/col-->
                </div>
            </div><!--/row-->		
        </div><!--/container-->


        <div class="clearfix"></div>

	<?php echo $this->element("admin_footer"); ?>

        <div class="page-loading">
            <img src="assets/img/loading.gif" alt="Loading..." /><br />Loading...
        </div>

        <script src = "https://maps.googleapis.com/maps/api/js?v=3.exp" ></script>
        <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/underscore.js"></script>
        <script src="assets/js/ejs.js"></script>
        <script src="assets/js/bootstrap-datepicker.js"></script>
        <script src="assets/js/bootstrap-timepicker.min.js"></script>
        <script src="assets/js/moment.min.js"></script>
        <script src="assets/js/daterangepicker.min.js"></script>
        <script src="assets/js/jquery.autosize.min.js"></script>
        <script src="assets/js/jquery.gritter.min.js"></script>
        <script src="assets/js/ajaxfileupload.js"></script>
        <script src="assets/js/jquery-impromptu.js"></script>
        <script src="assets/js/jquery.flot.min.js"></script>
        <script src="assets/js/jquery.flot.time.js"></script>
        <script src="assets/js/jquery.sparkline.min.js"></script>
        <script src="assets/js/jquery.knob.modified.min.js"></script>
        <script src="assets/js/apix.js"></script>
        <!-- theme scripts -->
        <script src="assets/js/dropzone.min.js"></script>
        <script src="assets/js/core.min.js"></script>
        <script src="assets/js/customs.js"></script>
        <script src="ckeditor/ckeditor.js"></script>
        <!--<script src="//cdn.ckeditor.com/4.4.6/standard/ckeditor.js"></script>-->
        <?php echo $this->Html->script(array( 'jquery.validate.min', 'jquery.elastic.source', 'select-option')); ?>
    </body>
</html>