<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="container-fluid" style="padding-top: 20px;">
    <div class="col-sm-9 col-xs-9" >
        <div class="container-fluid">
            <?php
            echo $this->element('breadcrumb');
            ?>
            <?php foreach ($News as $news){ ?>
            <div class="row">
                <hr style="margin-top: 0px;margin-bottom:  10px;">
                <div class="col-md-3 col-xs-3" style=" padding-right: 0px;margin-left: 0px;padding-top: 7px;padding-bottom: 10px;">
                    <a href="news/view/<?php echo $news['News']['news_id'] ?>" title="<?php echo $news['News']['title'] ?>"><img class="img-thumbnail" style="max-width: none;height: 120px;width: 100%;"src="<?php echo $news['News']['thumbnails'] ?>"></a>
                </div>
                <div class="col-md-9 col-xs-9">
                    <h4><b><a href="news/view/<?php echo $news['News']['news_id'] ?>" title="<?php echo $news['News']['title'] ?>"><?php echo $news['News']['title'] ?></a></b></h4>
                    <h6 style="color: #00cc66"><?php echo date('d/m/Y', $news['News']['updated_datetime']) ?></h6>
                    <h5><?php echo $news['News']['description'] ?></h5>
                </div>
            </div>
            <?php }?>
            <div class="col-md-offset-7">
           <?php 
                echo  $this->element('pagination');
            ?>
            </div>
        </div>
    </div>
    <?php 
    echo $this->element('bds_right_menu');
    ?>
</div>