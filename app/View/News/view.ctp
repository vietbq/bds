<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="container-fluid" style="padding-top: 20px;">
    <div class="col-sm-9 col-xs-9" >
        <?php
            echo $this->element('breadcrumb');
        ?>
        <div class="box">
            <div class="box-content">
                <legend><?php echo $News['News']['title'] ?></legend>
                <div class="row col-sm-12 col-xs-12">
                    <div class="col-sm-12 col-xs-12">
                        <div class="col-sm-9 col-xs-9">
                            <i><h6 style="color: #00cc66"><?php echo date('d/m/Y', $News['News']['updated_datetime']) ?></h6></i>
                        </div>
                        <div class="col-sm-3 col-xs-3">
                            <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Flocalhost%2Fbds%2Fbdspost%2Findex&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
                        </div>
                    </div>
                    <b><?php echo $News['News']['description'] ?></b>
                    <?php echo $News['News']['content'] ?>
                    <div style="float: right">
                        <h6><i><?php echo $News['News']['reference'] ?></i></h6>
                    </div>
                </div>
                <legend>Các bài đăng liên quan</legend>
                <div class="row col-sm-12 col-xs-12">
                    <?php foreach ($Relate as $vRe){ ?>
                    <div class="col-sm-6 col-xs-6" style="border: 1px solid #e3dfda">
                        <div class="row" style="height: 130px">
                            <hr style="margin-top: 0px;margin-bottom:  10px;">
                            <div class="col-md-5 col-xs-5" style=" padding-right: 0px;padding-bottom: 10px;">
                                <a href="news/view/<?php echo $vRe['News']['news_id'] ?>" title="<?php echo $vRe['News']['title'] ?>"><img class="img-thumbnail" style="max-width: none;height: 80px;width: 100%;"src="<?php echo $vRe['News']['thumbnails'] ?>"></a>
                            </div>
                            <div class="col-md-7 col-xs-7">
                                <b><a href="news/view/<?php echo $vRe['News']['news_id'] ?>" title="<?php echo $vRe['News']['title'] ?>"><?php echo $vRe['News']['title'] ?></a></b>
                                <h6 style="color: #00cc66"><?php echo date('d/m/Y', $vRe['News']['updated_datetime']) ?></h6>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div>

        </div>
    </div>

    <?php 
        echo $this->element('bds_right_menu');
    ?>
</div>