<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="menu"  >
    <div class="menu-content">
        <ul class="nav navbar-nav">
            <?php 
                $menu_footer = Configure::read('navbar_menu_bds');
                foreach ($menu_footer as $vl){
            ?>
            <li><a class="navbar-top" href="<?php echo $vl['url'] ?>"><?php echo $vl['title'] ?></a></li>
            <?php }?>
        </ul>
    </div>
</div>
<div style="background: #003399;height: 100px;">
    
</div>