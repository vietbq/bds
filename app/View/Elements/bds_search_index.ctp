<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<form class="form-horizontal bds-search-in-index" role="form" method="get" action="bdspost/list_post" name="search-advance-index" id="frm-bdsSearchIndexId">
    <div class="btn-group btn-group-lg" role="group" aria-label="" style="">
        <a class="btn bds-search-type-class active type-search" rel="1" style="padding-top: 5px;padding-bottom: 5px;" id="bds-search-sell-id">Nhà đất bán</a>
        <a class="btn bds-search-type-class type-search" rel="2" style="padding-top: 5px;padding-bottom: 5px;" id="bds-search-lease-id">Nhà đất cho thuê</a>
    </div>
    <div style="height: auto;padding: 0 15px;border: 1px solid #e3dfda;border-radius: 3px;line-height: 23px;background: #ffffff;border: #cccccc solid 2px">
        <div class="row">
            <div class="col-sm-10 col-xs-10">
                <div class="row" style="margin-top: 20px">
                    <div style="margin-bottom:10px" class="col-sm-4  col-xs-6">
                        <input class="col-sm-12 col-xs-12 form-control" value="1" id="bds-type-search-id" name="bds-type-name" style="display: none">
                        <input class="col-sm-12 col-xs-12 form-control" placeholder="Nhập địa điểm....." name="filter[address]">
                    </div>
                    <div style="margin-bottom:10px" class="col-sm-4 col-xs-6">
                        <select class="col-sm-12 col-xs-12 form-control" id="bds-search-type-item-id" name="filter[type_item_id]"></select>
                    </div>
                    <div style="margin-bottom:10px" class="col-sm-4 col-xs-6">
                        <select class="form-control col-xs-12 col-sm-12"  id="city" name="filter[city]"></select>
                    </div>
                    <div style="margin-bottom:10px" class="col-sm-4 col-xs-6">
                        <select class="form-control col-xs-12 col-sm-12" id="state" name="filter[state]">
                            <option value="-1">Quận/huyện</option>
                        </select>
                    </div>
                    <div style="margin-bottom:10px" class="col-sm-4 col-xs-6">
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
                    <div style="margin-bottom:10px" class="col-sm-4 col-xs-6">
                        <select class="form-control col-sm-12" id="bds-search-money-id" name="filter[money]">
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-xs-2">
                <div class="row" style="margin-top: 20px">
                    <div style="margin-bottom:10px" class="col-sm-12 col-xs-12">
                        <button type="submit" class="btn btn-primary col-sm-12 col-xs-12" value="searchAdvance" name="filter[search]">Tìm Kiếm <b class="glyphicon glyphicon-search"></b></button>
                    </div>
<!--                    <div style="margin-bottom:20px" class="col-sm-12 col-xs-12">
                        <select class="form-control col-sm-12 col-xs-12"></select>
                    </div>-->
                </div> 
            </div>
        </div>
    </div>
</form>
