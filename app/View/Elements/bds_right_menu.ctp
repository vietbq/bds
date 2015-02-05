<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="col-sm-3 col-xs-3">
    <h4><b><a href="" title="Góc kiến trúc">Góc kiến trúc</a></b></h4>
    <div class="row">
        <?php if(isset($Category_Right['gocKT'][0])){ ?>
        <div class="col-sm-12" style="padding-left:  0px;">
            <a href="news/view/<?php echo $Category_Right['gocKT'][0]['News']['news_id'] ?>" title="<?php echo $Category_Right['gocKT'][0]['News']['title'] ?>"">
                <img src="<?php echo $Category_Right['gocKT'][0]['News']['thumbnails'] ?>"" style="height: 145px;width: 100%">
            </a>
        </div>
        <div class="col-sm-12" style="padding-left:  0px;">
            <b><a href="news/view/<?php echo $Category_Right['gocKT'][0]['News']['news_id'] ?>"  title="<?php echo $Category_Right['gocKT'][0]['News']['title'] ?>"><?php echo $Category_Right['gocKT'][0]['News']['title'] ?></a></b>
        </div>
        <div class="col-sm-12" style="padding-left:  0px;">
            <h6><?php echo substr($Category_Right['gocKT'][0]['News']['description'],0,200).'..' ?></h6>
        </div>
        <div class="nav-collapse sidebar-nav navbar-collapse bs-navbar-collapse">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <?php 
                    unset($Category_Right['gocKT'][0]);
                    foreach ($Category_Right['gocKT'] as $vl_KT) {
                ?>
                <li style="margin-bottom: 5px;margin-top: 5px;">
                    <div class="row">
                        <div class="col-sm-4 col-xs-4" style="padding-left:  0px;">
                            <a href="news/view/<?php echo $vl_KT['News']['news_id'] ?>" title="<?php echo $vl_KT['News']['title'] ?>">
                                <img src="<?php echo $vl_KT['News']['thumbnails'] ?>" style="height: 50px;width: 100%">
                            </a>
                        </div>
                        <div class="col-sm-8 col-xs-8" style="padding-left:  0px;padding-right: 0px">
                            <b> <a style="font-size: 13px;"  href="news/view/<?php echo $vl_KT['News']['news_id'] ?>" title="<?php echo $vl_KT['News']['title'] ?>"><?php echo substr($vl_KT['News']['title'], 0,60); ?></a> </b>
                        </div>
                    </div>
                </li>
                <hr style="margin-top: 0px;margin-bottom: 0px;">
                    <?php } ?>
            </ul>
        </div>
        <?php } ?>
    </div>
    <br>
    <h4><b><a href="" title="Nhà đẹp">Nhà đẹp</a></b></h4>
    <div class="row">
        <?php if(isset($Category_Right['nhaD'][0])){ ?>
        <div class="col-sm-12" style="padding-left:  0px;">
            <a href="news/view/<?php echo $Category_Right['nhaD'][0]['News']['news_id'] ?>" title="<?php echo $Category_Right['nhaD'][0]['News']['title'] ?>"">
                <img src="<?php echo $Category_Right['nhaD'][0]['News']['thumbnails'] ?>"" style="height: 145px;width: 100%">
            </a>
        </div>
        <div class="col-sm-12" style="padding-left:  0px;">
            <b><a href="news/view/<?php echo $Category_Right['nhaD'][0]['News']['news_id'] ?>"  title="<?php echo $Category_Right['nhaD'][0]['News']['title'] ?>"><?php echo $Category_Right['nhaD'][0]['News']['title'] ?></a></b>
        </div>
        <div class="col-sm-12" style="padding-left:  0px;">
            <h6><?php echo substr($Category_Right['nhaD'][0]['News']['description'],0,200).'..' ?></h6>
        </div>
        <div class="nav-collapse sidebar-nav navbar-collapse bs-navbar-collapse">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <?php 
                    unset($Category_Right['nhaD'][0]);
                    foreach ($Category_Right['nhaD'] as $vl_ND) {
                ?>
                <li style="margin-bottom: 5px;margin-top: 5px;">
                    <div class="row">
                        <div class="col-sm-4 col-xs-4" style="padding-left:  0px;">
                            <a href="news/view/<?php echo $vl_ND['News']['news_id'] ?>" title="<?php echo $vl_ND['News']['title'] ?>">
                                <img src="<?php echo $vl_ND['News']['thumbnails'] ?>" style="height: 50px;width: 100%">
                            </a>
                        </div>
                        <div class="col-sm-8 col-xs-8" style="padding-left:  0px;padding-right: 0px">
                            <b><a style="font-size: 13px;"  href="news/view/<?php echo $vl_ND['News']['news_id'] ?>" title="<?php echo $vl_ND['News']['title'] ?>"><?php echo substr($vl_ND['News']['title'], 0,60); ?></a></b>
                        </div>
                    </div>
                </li>
                <hr style="margin-top: 0px;margin-bottom: 0px;">
                    <?php } ?>
            </ul>
        </div>
        <?php } ?>
    </div>    
    <br>
    <h4><b><a href="" title="Nhà đẹp">Tư vấn</a></b></h4>
    <div class="row">
        <?php if(isset($Category_Right['tuVan'][0])){ ?>
        <div class="col-sm-12" style="padding-left:  0px;">
            <a href="news/view/<?php echo $Category_Right['tuVan'][0]['News']['news_id'] ?>" title="<?php echo $Category_Right['tuVan'][0]['News']['title'] ?>"">
                <img src="<?php echo $Category_Right['tuVan'][0]['News']['thumbnails'] ?>"" style="height: 145px;width: 100%">
            </a>
        </div>
        <div class="col-sm-12" style="padding-left:  0px;">
            <b> <a href="news/view/<?php echo $Category_Right['tuVan'][0]['News']['news_id'] ?>"  title="<?php echo $Category_Right['tuVan'][0]['News']['title'] ?>"><?php echo $Category_Right['tuVan'][0]['News']['title'] ?></a></b>
        </div>
        <div class="col-sm-12" style="padding-left:  0px;">
            <h6><?php echo substr($Category_Right['tuVan'][0]['News']['description'],0,200).'..' ?></h6>
        </div>
        <div class="nav-collapse sidebar-nav navbar-collapse bs-navbar-collapse">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <?php 
                    unset($Category_Right['tuVan'][0]);
                    foreach ($Category_Right['tuVan'] as $vl_ND) {
                ?>
                <li style="margin-bottom: 5px;margin-top: 5px;">
                    <div class="row">
                        <div class="col-sm-4 col-xs-4" style="padding-left:  0px;">
                            <a href="news/view/<?php echo $vl_ND['News']['news_id'] ?>" title="<?php echo $vl_ND['News']['title'] ?>">
                                <img src="<?php echo $vl_ND['News']['thumbnails'] ?>" style="height: 50px;width: 100%">
                            </a>
                        </div>
                        <div class="col-sm-8 col-xs-8" style="padding-left:  0px;padding-right: 0px">
                            <b> <a style="font-size: 13px;"  href="news/view/<?php echo $vl_ND['News']['news_id'] ?>" title="<?php echo $vl_ND['News']['title'] ?>"><?php echo substr($vl_ND['News']['title'], 0,60); ?></a></b>
                        </div>
                    </div>
                </li>
                <hr style="margin-top: 0px;margin-bottom: 0px;">
                    <?php } ?>
            </ul>
        </div>
        <?php } ?>
    </div>
</div>
