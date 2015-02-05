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
        <div class="container-fluid">
            <legend>Tin rao dành cho bạn</legend>
            <div class="row col-md-12 col-xs-12">
                <h6>Tìm kiếm theo các tiêu chí: 
                <?php 
                    echo '<a>'.$Search['type_item'].'</a>';
                    if($Search['city']!=''){
                       echo  ',Tỉnh/TP:'.$Search['city'];
                    } 
                    if($Search['state']!=''){
                       echo  ',Quận/Huyện:'.$Search['state'];
                    }
                ?>
                </h6>
            </div>
            <div class="row">
                <div class="col-md-6 col-xs-6">
                    <p style="">Có 38,966 bất động sản</p>
                </div>
                <div class="col-md-6 col-xs-6">
                    <div style="float: right" class="form-group">
                        <p class="col-sm-6 col-xs-6">Sắp xếp theo:</p>
                        <div class="col-sm-6 col-xs-6 row">
                            <select style="width: 150px">
                                <?php
                                $sort_list = Configure::read('sort_list_by');
                                foreach ($sort_list as $ksl => $vsl){
                                ?>
                                <option value="<?php echo $ksl ?>"><?php echo $vsl ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <?php foreach ($Posts as $Post){ ?>
            <div class="row">
                <hr style="margin-top: 0px;margin-bottom:  10px;">
                <div class="col-md-4 col-xs-4" style=" padding-right: 0px;margin-left: 0px;padding-top: 10px;">
                    <a href="bdspost/detail/<?php echo $Post['Post']['id'] ?>"><img class="img-thumbnail" style="max-width: none;height: 170px;width: 240px;"src="<?php if($Post['Image']['url']==''){ echo 'img/home/logo2014vn.jpg"';  }else{ echo 'uploads/images/'.$Post['Image']['url']; } ?>"></a>
                </div>
                <div class="col-md-8 col-xs-8">
                    <h4><b><a href="bdspost/detail/<?php echo $Post['Post']['id'] ?>"><?php echo $Post['Post']['title'] ?></a></b></h4>
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
                    <h6><i class="glyphicon glyphicon-time"> <?php echo date('Y/M/d', $Post['Post']['created_datetime']) ?></i></h6>
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
    </div>
    <?php 
    echo $this->element('bds_right_search');
    ?>
</div>