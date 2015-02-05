<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$user_profile_menu = Configure::read('user_profile_menu');
?>
<div class="col-md-2" style="padding-right: 0px">
    <h4><a title="Trang cá nhân"><b>Trang cá nhân</b></a></h4>
    <div class="row">
        <div class="nav-collapse sidebar-nav collapse navbar-collapse bs-navbar-collapse">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <?php
                    foreach ($user_profile_menu as $vl){
                ?>
                <li>
                    <div class="row">
                        <hr>
                        <div class="col-sm-12 col-xs-12" style="padding-left:  0px;padding-right: 0px">
                            <a  href="<?php echo $vl['url'] ?>"style="font-size: 13px;" title="<?php echo $vl['title'] ?>"> <i style="color: #0073ea" class="glyphicon glyphicon-chevron-right"></i> <?php echo $vl['title'] ?> </a>
                        </div>
                    </div>
                </li>
                <?php
                    }
                ?>
                <br>
            </ul>
        </div>
    </div>
</div>