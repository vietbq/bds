<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$money_unit_sell = Configure::read('money_unit_sell');
$money_unit_lease = Configure::read('money_unit_lease');
?>
<div class="container-fluid" style="padding-top: 20px;">
    <div class="col-sm-9 col-xs-9" >

        <div class="row" style="padding-left: 20px"> 
            <div class="col-md-9" style="padding-left: 0px">
                <div class="col-md-12" style="padding-left: 0px;padding-right: 0px">
                    <a href="news/view/<?php echo $News[0]['News']['news_id'] ?>" title="<?php echo $News[0]['News']['title']; ?>"><img src="<?php echo $News[0]['News']['thumbnails'] ?>" class="col-md-12" style="width: 100%;height: 100%"></a>
                </div>
                <div class="col-md-12" >
                    <a href="news/view/<?php echo $News[0]['News']['news_id'] ?>" title="<?php echo $News[0]['News']['title']; ?>"><h4><?php echo substr($News[0]['News']['title'],0,100); ?></h4></a>
                    <i><h6 style="color: #0a0"><?php echo 'Cập nhật ngày: '.date('d/m/Y', $News[0]['News']['created_datetime']) ?></h6></i>
                    <p><?php echo substr($News[0]['News']['description'],0,300); ?></p>
                </div>
            </div>
            <div class="col-md-3" style="padding-left: 0px">
                <div class="col-md-12" style="padding-left: 0px">
                    <h4 style="color: #0073ea" style="padding-left: 0px">Tin xem nhiều</h4>
                </div>
                <div class="row">
                    <?php 
                    unset($News[0]);
                    foreach ($News as $vn){
                    ?>
                    <div class="col-md-12 col-xs-2" style="padding-left: 0px;padding-right:  0px;">
                        <hr style="margin-top: 0px;margin-bottom:  10px;">
                        <div class="col-md-5" style="padding-left: 0px;">
                            <a href="news/view/<?php echo $vn['News']['news_id'] ?>" title="<?php echo $vn['News']['title']; ?>"><img  src="<?php echo $vn['News']['thumbnails'] ?>"  style="height:50px;width: 100%;max-width: 79px"></a>
                        </div>
                        <div class="col-md-7" style="padding-left: 0px;">
                            <p style="font-size: 12px"><a href="news/view/<?php echo $vn['News']['news_id'] ?>" title="<?php echo $vn['News']['title']; ?>"><?php echo $vn['News']['title']; ?></a></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid">
            <legend>Tin rao dành cho bạn</legend>
            <?php foreach ($Posts as $Post){ ?>
            <div class="row">
                <hr style="margin-top: 0px;margin-bottom:  10px;">
                <div class="col-md-4 col-xs-4" style=" padding-right: 0px;margin-left: 0px;padding-top: 10px;">
                    <a href="bdspost/detail/<?php echo $Post['Post']['id'] ?>" title="<?php echo $Post['Post']['title'] ?>"><img class="img-thumbnail" style="max-width: none;height: 170px;width: 240px;"src="<?php if($Post['Image']['url']==''){ echo 'img/home/logo2014vn.jpg"';  }else{ echo 'uploads/images/'.$Post['Image']['url']; } ?>"></a>
                </div>
                <div class="col-md-8 col-xs-8">
                    <h4><b><a href="bdspost/detail/<?php echo $Post['Post']['id'] ?>" title="<?php echo $Post['Post']['title'] ?>"><?php echo $Post['Post']['title'] ?></a></b></h4>
                    <p style="font-size: 14px;color: #0a0">
                        <?php 
                        echo $Post['Post']['money'].' ';
                        if($Post['Post']['type_id']==1){
                            echo $money_unit_sell[$Post['Post']['money_unit']]['title'];
                        }else{
                            echo $money_unit_lease[$Post['Post']['money_unit']]['title'];
                        }
                        ?>
                    </p>
                    <h6><i class="glyphicon glyphicon-time"> <?php echo date('d/m/Y', $Post['Post']['created_datetime']) ?></i></h6>
                    <h5><?php echo substr($Post['Post']['description'], 0,150).'...' ?></h5>
                    <h6><p>Diện tích: 
                            <?php 
                            if($Post['Post']['area']!=''){
                                echo '<font color = "blue" > '.$Post['Post']['area'].' m²' .'</font> ';
                            }else{
                                echo '<font color = "blue" > Không xác định</font> ';
                            }
                            ?>
                            &nbsp; Loai: 
                            <?php 
                            echo '<font color = "blue" > '.$Post['Type']['type_name'].'</font>';
                            ?>
                        </p>
                        <p>Quận/Huyện: 
                            <?php
                            echo '<font color = "blue" > '.$Post['Post']['address'].' - '.$Post['Post']['state'].' - '.$Post['Post']['city'].'</font>';
                            ?>

                        </p>
                    </h6>
                </div>
            </div>
            <?php } ?>
        </div>
        <hr>
        <div style="float: right">
        <?php
        echo $this->element('pagination');
        ?>
        </div>
    </div>


<?php echo $this->element('bds_right_menu'); ?>
</div>

<br>
<br>