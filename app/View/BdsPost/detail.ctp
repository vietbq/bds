<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if($Post['Post']['type_id']==1){
    $money_unit = Configure::read('money_unit_sell');
}else{
    $money_unit = Configure::read('money_unit_lease');
}
$direction = Configure::read('house_direction');
?>
<div class="container-fluid" style="padding-top: 20px;">
    <div class="col-sm-9 col-xs-9" >
        <div class="box">
            <div class="box-content">
                <legend><?php echo $Post['Post']['title'] ?></legend>
                <div class="row col-sm-12 col-xs-12">
                    <h4>
                        <span style="color: #0073ea">Giá:  
                        <?php 
                        echo $Post['Post']['money']." ".$money_unit[$Post['Post']['money_unit']]['title']; 
                        ?>
                        </span>
                        <span style="margin-left: 30px;color: #0073ea">Diện tích:  
                        <?php 
                        echo $Post['Post']['area']." m²"; 
                        ?>
                        </span>
                    </h4>
                </div>
                <span class="col-sm-12 col-xs-12 label-info label" style="margin-bottom: 30px; height: 40px">
                    <h4>Khu vực: 
                        <?php 
                            if($Post['Post']['city']!=''&&$Post['Post']['city']!=0){
                                $city_array_detail = Configure::read('address_info');
                                echo $city_array_detail[$Post['Post']['city']-1]['name']; 
                                    if($Post['Post']['state']!=''&&$Post['Post']['state']!=0){
                                        echo " , ".$city_array_detail[$Post['Post']['city']-1]['state'][$Post['Post']['state']-1]['name']; 
                                    }

                            } 
                        ?>
                    </h4> 
                </span>
                <h3>Mô Tả</h3>
                <div class="row col-sm-12 col-xs-12" style="margin-bottom: 30px">
                    <?php 
                        $Post['Post']['description'] = str_replace("\n",'<br>',$Post['Post']['description']);
                        echo $Post['Post']['description'];
                                
                    ?>
                </div>
                <?php 
                if($Post['Image']){
                  
                ?>
                <div id="slider1_container" style="position: relative; width: 720px;
                     height: 480px; overflow: hidden;">

                    <!-- Loading Screen -->
                    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                             background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                        </div>
                        <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                             top: 0px; left: 0px;width: 100%;height:100%;">
                        </div>
                    </div>

                    <!-- Slides Container -->
                    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 720px; height: 480px;
                         overflow: hidden;">
                        <?php   foreach ($Post['Image'] as $Image){ ?>
                        <div>
                            <img u="image" src="<?php echo 'uploads/images/'.$Image['url']; ?>" />
                            <img u="thumb" src="<?php echo 'uploads/images/'.$Image['url']; ?>" />
                        </div>
                        <?php } ?>
                    </div>
                    <!-- Thumbnail Navigator Skin Begin -->
                    <div u="thumbnavigator" class="jssort07" style="position: absolute; width: 720px; height: 100px; left:0px; bottom: 0px;">
                        <div style=" background-color: #000; filter:alpha(opacity=30); opacity:.3; width: 100%; height:100%;"></div>
                        <!-- Thumbnail Item Skin Begin -->
                        <div u="slides" style="cursor: move;">
                            <div u="prototype" class="p" style="POSITION: absolute; WIDTH: 99px; HEIGHT: 66px; TOP: 0; LEFT: 0;">
                                <div u="thumbnailtemplate" class="i" style="position:absolute;"></div>
                                <div class="o">
                                </div>
                            </div>
                        </div>
                        <!-- Thumbnail Item Skin End -->
                        <!-- Arrow Navigator Skin Begin -->
                        <!-- Arrow Left -->
                        <span u="arrowleft" class="jssora11l" style="width: 37px; height: 37px; top: 123px; left: 8px;">
                        </span>
                        <!-- Arrow Right -->
                        <span u="arrowright" class="jssora11r" style="width: 37px; height: 37px; top: 123px; right: 8px">
                        </span>
                        <!-- Arrow Navigator Skin End -->
                    </div>
                    <!-- ThumbnailNavigator Skin End -->
                    <a style="display: none" href="http://www.jssor.com">bootstrap slider</a>
                    <!-- Trigger -->
                </div>
                <?php }?>
                <div class="row">
                    <div class="col-sm-6 col-xs-6">
                        <h3>Thông tin khác</h3>
                        <table class="table table-striped">
                            <tr>
                                <td><b>Mã số</b></td>
                                <td><?php echo $Post['Post']['id'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Hướng nhà</b></td>
                                <td><?php echo $direction[$Post['Post']['direction']] ?></td>
                            </tr>
                            <tr>
                                <td><b>Số phòng</b></td>
                                <td><?php echo $Post['Post']['num_room'] ?></td>
                            </tr>
                            <tr>
                                <td><b>Đường vào</b></td>
                                <td><?php echo $Post['Post']['street_distance'] ?>m</td>
                            </tr>
                            <tr>
                                <td ><b>Mặt tiền</b></td>
                                <td><?php echo $Post['Post']['facade'] ?>m</td>
                            </tr>

                            <tr>
                                <td ><b>Số toilet</b></td>
                                <td><?php echo $Post['Post']['num_toilet'] ?></td>
                            </tr>

                            <tr>
                                <td>Ngày đăng tin</td>
                                <td><?php if($Post['UserPost']['datetime_to']!='' && $Post['UserPost']['datetime_to']!=0) echo date('Y/M/d', $Post['UserPost']['datetime_from']) ?></td>
                            </tr>
                            <tr>
                                <td>Ngày hết hạn</td>
                                <td><?php if($Post['UserPost']['datetime_to']!='' && $Post['UserPost']['datetime_to']!=0) echo date('Y/M/d', $Post['UserPost']['datetime_to']) ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <h3>Liên hệ</h3>
                        <table class="table table-striped">
                            <tbody><tr>
                                    <td><b>Tên liên lạc</b></td>
                                    <td><?php echo $Post['UserPost']['name_contact'] ?></td>
                                </tr>
                                <tr>
                                    <td><b>Địa chỉ</b></td>
                                    <td><?php echo $Post['UserPost']['address_contact'] ?></td>
                                </tr>
                                <tr>
                                    <td><b>Điện thoại</b></td>
                                    <td><?php echo $Post['UserPost']['tel_contact'] ?></td>
                                </tr>
                                <tr>
                                    <td><b>Di động</b></td>
                                    <td><?php echo $Post['UserPost']['mobile_contact'] ?></td>
                                </tr>
                                <tr>
                                    <td><b>Email</b></td>
                                    <td><?php echo $Post['UserPost']['email_contact'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <h3>Bản đồ</h3>
                        <div id="map" class="col-sm-12 col-xs-12" style="height: 300px" gps_lat="<?php echo $Post['Post']['lat'] ?>" gps_lng="<?php echo $Post['Post']['lng'] ?>"></div>
                        <input type="text" name="post[Post][lat]" id="lat" style="display: none" value="21.0054356"/>
                        <input type="text" name="post[Post][lng]" id="lng" style="display: none" value="105.8431971"/>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px;margin-bottom: 30px">
                    <div class="form-group" >
                        <div class="col-lg-12">
                            <button class="btn btn-primary" onclick="printPost()"><b class="glyphicon glyphicon-print"></b> In bài đăng</button>
                            <button class="btn btn-default" ><b class="glyphicon glyphicon-download-alt"></b> Lưu bài đăng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    echo $this->element('bds_right_search');
    ?>
</div>