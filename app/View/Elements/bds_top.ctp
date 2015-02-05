<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<nav class="navbar navbar-default" style="width: 1000px;margin: 0px auto;background: #ffffff;border: none">
    <div class="container-fluid" style="height: 100px">
        <div class="navbar-header">
            <a class="navbar-brand" href="bdspost/index">
                <img alt="Brand" src="img/home/logo2014vn.jpg" style="height: 82px;width: 237px">
            </a>
        </div>
        <div style="height: 33px;margin-top: 30px;padding: 0 15px;float: right;border: 1px solid #e3dfda;border-radius: 3px;line-height: 23px; ">
            <a class="btn" href="bdspost/create_post"><i class="glyphicon glyphicon-file"> </i> Đăng Tin</a>
            <?php if($this->Session->read(SESSION_USER_EMAIL_LOGIN)!=''){ ?>
            <a class="btn" href="user/profile"><i class="glyphicon glyphicon-user">  </i> Xin chào:<font style="color: #003399"> <?php echo $this->Session->read(SESSION_USER_NAME_LOGIN); ?></font></a>
            <a class="btn" href="user/logout"><i class="glyphicon glyphicon-off"> </i> Đăng Xuất</a>
            <?php }else{ ?>
            <a class="btn" href="user/register"><i class="glyphicon glyphicon-edit">  </i> Đăng Ký</a>
            <a class="btn" href="user/login"><i class="glyphicon glyphicon-user"> </i> Đăng Nhập</a>
            <?php } ?>
        </div>
    </div>
</nav>
<!--<div class="menu" >
    <div class="menu-content">
        <ul>
            <li><a class="navbar-top active" href="bdspost/index"><i class="glyphicon glyphicon-home"></i> Home</a></li>
            <li><a class="navbar-top" href="bdspost/list_post">News</a></li>
            <li><a class="navbar-top" href="bdspost/list_post">Contact</a></li>
            <li><a class="navbar-top" href="bdspost/list_post">About</a></li>
        </ul>
    </div>
</div>-->
<nav class="navbar navbar-default" style="background: #003399; ">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
            <ul class="nav navbar-nav" style="margin-left: 10%">
                <?php 
                $navbar_menu = Configure::read('navbar_menu_bds');
                $i=0;
                foreach ($navbar_menu as $v_navbar ){
                    if(!$v_navbar['childrens']){ ?>
                <li style="margin-top: 8px;" class="<?php if($i==0){ echo 'active'; } ?>"><a href="<?php echo $v_navbar['url']; ?>"  title="<?php echo $v_navbar['title']; ?>"><i class="<?php echo $v_navbar['icon']; ?>"></i><?php echo $v_navbar['title']; ?></a></li>
                <?php        
                    }else{
                ?>
                <li class="dropdown" style="margin-top: 8px;">
                    <a href="<?php echo $v_navbar['url']; ?>" title="<?php echo $v_navbar['title']; ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="<?php echo $v_navbar['icon']; ?>"></i><?php echo $v_navbar['title']; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <?php foreach ($v_navbar['childrens'] as $submenu) { ?>
                        <li><a class="submenu" href="<?php echo $submenu['url']; ?>" title="<?php echo $submenu['title']; ?>"> <span class="hidden-sm"> <?php echo $submenu['title']; ?></span></a></li>
			<?php } ?>
                    </ul>
                </li>
                <?php }
                $i++;
                }?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>