<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Admin login</title>
        <?php
        echo $this->Html->css(array('login', 'bootstrap'));
        ?>
    </head>

    <body>
        <div class="container">
            <h1><?php echo 'Hello ' . $username; ?></h1>
        </div>
        <br/>
        <a href="<?php echo Router::url(array('controller' => 'Admin', 'action' => 'createPost')); ?>">Tạo bài viết mới</a>
</body>
</html>
