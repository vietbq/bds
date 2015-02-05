<html>
    <head>
        <title>Slide show</title>
        <?php
        echo $this->Html->css(array('show'));
        echo $this->Html->script(array('jquery.easing.1.3', 'jquery.timer', 'image-rotator'));
        ?>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.js"></script>    
    </head>
    <body>
        <div id="window">  
            <ul id="slideshow">  
                <li>
                    <?php echo $this->Html->image('/img/home/101.jpg', array('alt' => '画像1')); ?>
                </li>  
                <li><?php echo $this->Html->image('/img/home/102.jpg', array('alt' => '画像2')); ?></li>  
                <li><?php echo $this->Html->image('/img/home/103.jpg', array('alt' => '画像3')); ?></li>  
                <li><?php echo $this->Html->image('/img/home/104.jpg', array('alt' => '画像4')); ?></li>  
            </ul>  
        </div> 
    </body>
</html>