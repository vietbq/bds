<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset('utf-8'); ?>
        <title>
            <?php echo $title; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css(array('login', 'bootstrap'));
        echo $this->Html->script(array('jquery-2.1.1', 'jquery.validate.min', 'jquery.elastic.source', 'select-option'));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div id="container">
            <div id="header">
                agag
            </div>
            <div id="content">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
            <div id="footer">

            </div>
        </div>
        <?php echo $this->element('sql_dump'); ?>
    </body>
</html>
