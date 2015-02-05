<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="col-sm-3 col-xs-3" >
    <h4><a href="" title="Góc kiến trúc"><b>TÌM KIẾM</b></a></h4>
    <div class="row">
        <form class="form-horizontal frm-bds-right-search-class" role="form" action="bdspost/list_post" method="get" name="frmBdsRightSearch" id="frm-BdsRightSearch">
            <div class="form-group" style="padding-left:  0px;">
                <div class="col-sm-5 col-xs-5">
                    <input type="radio" onclick="changeType(this);" value="1" name="bds-type-name" checked >
                    <label class="control-label">BĐS bán</label>
                </div>
                <div class="col-sm-7 col-xs-7">
                    <input type="radio" onclick="changeType(this);" value="2" name="bds-type-name" >
                    <label class="control-label">BĐS cho thuê</label>
                </div>
            </div>
            <div class="form-group" style="margin-left: 0px;margin-right: 10px">
                <input class="form-control col-sm-12 col-xs-12" placeholder="Nhập địa điểm....." name="filter[address]">
            </div>
            <div class="form-group" style="margin-left: 0px;margin-right: 10px">
                <select class="form-control col-sm-12 col-xs-12" id="loai-hinh-nha-dat-id" name="filter[type_item_id]"></select>
            </div>
            <div class="form-group" style="margin-left: 0px;margin-right: 10px">
                <select class="form-control col-sm-12 col-xs-12" id="city" name="filter[city]"></select>
            </div>
            <div class="form-group" style="margin-left: 0px;margin-right: 10px">
                <select class="form-control col-sm-12 col-xs-12" id="state" name="filter[name]">
                    <option value="-1" >Chọn quận / huyện</option>
                </select>
            </div>
            <div class="form-group" style="margin-left: 0px;margin-right: 10px">
                <select class="form-control col-sm-12" id="bds-search-area-id" name="filter[area]">
                    <option value="-1">Diện tích</option>
                            <?php
                            $house_area = Configure::read('house_area');
                            foreach ($house_area as $karea => $varea ){
                            ?>
                    <option value="<?php echo $karea ?>"><?php echo $varea['title'] ?></option>
                            <?php } ?>
                </select>
            </div>
            <div class="form-group" style="margin-left: 0px;margin-right: 10px">
                <select class="form-control col-sm-12 col-xs-12" id="bds-search-right-money-id" name="filter[money]">
                    <option value="-1" >Mức giá</option>
                </select>
            </div>
            <div class="form-group" style="margin-left: 0px;margin-right: 10px">
                <button type="submit" class="form-control btn-primary" style="margin: 0px auto" name="filter[search]" value="searchAdvance">Tìm kiếm <i class="glyphicon glyphicon-search"></i> </button>
            </div>
        </form>
    </div>
    <hr>
    <h4><a href="" title="Góc kiến trúc"><b>Nhà đất theo tỉnh thành</b></a></h4>
    <div class="row">
        <div class="nav-collapse sidebar-nav collapse navbar-collapse bs-navbar-collapse">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <?php 
                    $cityState = Configure::read('address_info'); 
                    foreach ($cityState as $val){
                        if($val['display']==1){
                ?>
                <li style="margin-bottom: 5px;margin-top: 5px;">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12" style="padding-left:  0px;padding-right: 0px">
                            <a  href="bdspost/list_post?location=<?php echo $val['city_id'] ?>"style="font-size: 13px;" title="<?php echo $val['name'] ?>"> <i class="glyphicon glyphicon-chevron-right"></i> <?php echo $val['name'] ?> </a>
                        </div>
                    </div>
                </li>
                        <?php }} ?>
            </ul>
        </div>
    </div>
    <h4><a href="" title="Góc kiến trúc"><b>Liên kết nổi bật</b></a></h4>
    <div class="row">
        <div class="nav-collapse sidebar-nav collapse navbar-collapse bs-navbar-collapse">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <?php
                if(isset($NewsHot)){
                    foreach ($NewsHot as $vlNh){
                ?>
                <li style="margin-bottom: 5px;margin-top: 5px;">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12" style="padding-left:  0px;padding-right: 0px">
                            <a  href="news/view/<?php echo $vlNh['News']['news_id'] ?>"style="font-size: 13px;" title="<?php echo $vlNh['News']['title'] ?>"> <i style="color: #0073ea" class="glyphicon glyphicon-chevron-right"></i> <?php echo $vlNh['News']['title'] ?> </a>
                        </div>
                    </div>
                </li>
                <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</div>