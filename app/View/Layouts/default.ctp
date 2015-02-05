<!DOCTYPE html>
<html>
    <head>
	<?php echo $this->Html->charset('utf-8'); ?>
        <title>
		<?php echo $title_for_layout; ?>
        </title>
        <base href="<?php echo BASE_URL ?>" />
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" />
        <link href="css/common.css" rel="stylesheet" />
        <link href="css/datepicker.css" rel="stylesheet" />
        <script src="js/jquery-2.1.1.js"></script>
	<?php
		//echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
        <link rel="shortcut icon" href="img/folder_home.ico">
    </head>
    <body >
        <div id="container" >
            <div id="header">
                <?php echo $this->element('bds_top'); ?>
            </div>
                <?php
                if (strpos(strtolower($this->name), 'bdspost') !== false && in_array($this->action, array('create_post'))){
                ?>
            <div id="content" style="width: 1000px; margin: 0px auto">
                <?php
                    echo $this->fetch('content');
                }else{
                    if (strpos(strtolower($this->name), 'bdspost') !== false && in_array($this->action, array('index'))){
                ?>
                <div class="thumb-search-index" style="width: 100%;position: relative;float: left;border-top: 1px solid #dad6d1;border-bottom: 1px solid #dad6d1;background: #f0f0f0">
                    <div style="width: 1000px; margin: 0px auto;margin-bottom: 30px;margin-top: 30px;">
                    <?php echo $this->element('bds_search_index'); ?>
                    </div>
                </div>
                    <?php } ?>
                <div id="content" style="width: 1060px; margin: 0px auto;min-height: 600px">
                    <div class="row">
                        <?php echo $this->fetch('content'); ?>
                    </div>
                <?php } ?>
                </div>

            </div>
            <div id="footer">
                    <?php echo $this->element('bds_footer'); ?>
            </div>
        </div>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/ejs.js"></script>
        <script src="js/jquery.elastic.source.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="assets/js/ajaxfileupload.js"></script>
           <?php echo $this->Html->script(array('town-option','select-option','bootstrap-datepicker')); ?>
        <script src="js/custom.js"></script>
<!--        <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyAgW1qBdh8piDYP-MBGnQEZaLRw0tds63s&sensor=false"></script>-->
        <script src="http://maps.google.com/maps?file=api&amp;v=3&amp;key=AIzaSyAgW1qBdh8piDYP-MBGnQEZaLRw0tds63s" type="text/javascript"></script>
        <script src="js/map.js" type="text/javascript"></script>
        <script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
        <script src="js/jssor.js" type="text/javascript"></script>
        <script src="js/jssor.slider.js" type="text/javascript"></script>
        <script src="ckeditor/ckeditor.js"></script>
        <script src="ckeditor/sample.js"></script>
    </body>
</html>
