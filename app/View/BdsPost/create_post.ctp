<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<legend  style="padding-top: 20px;">ĐĂNG TIN RAO BÁN/CHO THUÊ</legend>
<div class="container-fluid">
    <form class="form-horizontal create_post_form-by-user" role="form" method="post" name="createNewPostbyUser" id="frm-createNewPostbyUser" onsubmit="validatePostForm()">
        <h4>THÔNG TIN CƠ BẢN</h4>
        <div class="form-group">
            <label class="col-sm-2 control-label">Loại tin</label>
            <div class="col-sm-10">
                <div >
                    <input type="radio" onclick="changeType(this);" value="1"  style="width: 20px;height: 15px" name="bds-type-name" checked> BĐS bán
                    <input type="radio" onclick="changeType(this);" value="2" style="width: 20px;height: 15px;margin-left: 20px" name="bds-type-name" > BĐS cho thuê
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Loại nhà đất <font style="color: red">(*)</font></label>
            <div class="col-sm-10 row">
                <div  class="col-sm-4 col-xs-6">
                    <select class="col-sm-12 form-control" id="loai-hinh-nha-dat-id" name="post[Post][type_item_id]" >
                        
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Vị trí </label>
            <div class="col-sm-10 row">
                <div style="margin-bottom:20px" class="col-sm-4 col-xs-6">
                    <select class="col-sm-12 col-xs-12 form-control" id="city" name="post[Post][city]">

                    </select>
                </div>
                <div style="margin-bottom:20px" class="col-sm-4 col-xs-6">
                    <select class="form-control col-xs-12 col-sm-12" id="state" name="post[Post][state]" >
                        <option value="-1">-- Chọn Quận/Huyện --</option>
                    </select>
                </div>
                <div style="margin-bottom:20px" class="col-sm-4 col-xs-6">
                    <select class="form-control col-xs-12 col-sm-12" name="post[Post][town]" id="town" >
                        <option value="-1">-- Chọn Phường/Xã --</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4" style="padding-left: 0px;">
                <label class="col-sm-6 control-label">Giá </label>
                <input class="form-control col-sm-5" style="margin-left: 20px;" name="post[Post][money]">
            </div>
            <div class="col-sm-4" style="padding-left: 0px;">
                <label class="col-sm-4 control-label"   style="margin-left: 10px;">Đơn vị </label>
                <select class="form-control col-sm-7" name="post[Post][money_unit]" id="money_unit-id" ></select>
            </div>
            <div class="col-sm-4" style="padding-left: 0px;">
                <label class="col-sm-4 control-label" style="margin-left: 10px;">Diện tích </label>
                <input class="form-control col-sm-5" name="post[Post][area]">&nbsp;<label style="margin-top: 5px" > m2 </label>
            </div>

        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Địa chỉ <font style="color: red">(*)</font> </label>
            <div class="col-sm-10 row">
                <div class="col-sm-12">
                    <input type="text" class="form-control col-sm-12" id="address"  name="post[Post][address]" >
                </div>
            </div>
        </div>
        <hr>
        <h4>THÔNG TIN KHÁC</h4>
        <div class="form-group">
            <div class="col-sm-4" style="padding-left: 0px;">
                <label class="col-sm-6 control-label">Mặt tiền </label>
                <input class="form-control col-sm-5" style="margin-left: 20px;"  name="post[Post][facade]" > 
            </div>
            <div class="col-sm-4" style="padding-left: 0px;">
                <label class="col-sm-4 control-label" style="margin-left: 10px;">Đường trước nhà </label>
                <input class="form-control col-sm-6" ><label style="margin-top: 5px" name="post[Post][street_distance]">&nbsp;m</label>
            </div>
            <div class="col-sm-4" style="padding-left: 0px;">
                <label class="col-sm-4 control-label" style="margin-left: 10px;">Hướng BĐS </label>
                <select class="form-control col-sm-5"  name="post[Post][direction]">
                    <?php
                    $direction = Configure::read('house_direction');
                    foreach ($direction as $kdr => $vdr){
                    ?>
                    <option value="<?php echo $kdr; ?>" ><?php echo $vdr; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

        </div>
        <div class="form-group">
            <div class="col-sm-4" style="padding-left: 0px;">
                <label class="col-sm-6 control-label">Số tầng</label>
                <input class="form-control col-sm-5" style="margin-left: 20px;" name="post[Post][num_floor]">
            </div>
            <div class="col-sm-4" style="padding-left: 0px;">
                <label class="col-sm-4 control-label" style="margin-left: 10px;">Số phòng</label>
                <input class="form-control col-sm-6"  name="post[Post][num_room]">
            </div>
            <div class="col-sm-4" style="padding-left: 0px;">
                <label class="col-sm-4 control-label" style="margin-left: 10px;">Số toilet</label>
                <input class="form-control col-sm-5"  name="post[Post][num_toilet]">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12" style="padding-left: 0px;">
                <label class="col-sm-12 control-label" style="margin-bottom: 5px">Nội thất</label>
                <textarea class="form-control col-sm-12" style="margin-left: 20px;height: 100px;width: 95%"></textarea>
            </div>
        </div>
        <hr>
        <h4>MÔ TẢ CHI TIẾT</h4>
        <div class="form-group">
            <div class="col-sm-12" style="padding-left: 0px;">
                <label class="col-sm-2 control-label">Tiêu đề <font style="color: red">(*)</font> </label>
                <input class="form-control col-sm-8" style="margin-left: 20px;" name="post[Post][title]">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12" style="padding-left: 0px;">
                <label class="col-sm-2 control-label">Nội dung miêu tả <font style="color: red">(*)</font> </label>
                <textarea class="form-control col-sm-8" style="margin-left: 20px;height: 200px" name="post[Post][description]"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12" style="padding-left: 0px;">
                <label class="col-sm-2 control-label">Thời gian đăng <font style="color: red">(*)</font> </label>
                <div class="form-group col-sm-8">
                    <label class="col-sm-1 control-label">Từ</label>
                    <input class="form-control col-sm-4 datepicker" data-date-format="mm/dd/yyyy" style="margin-left: 20px;"  name="userPost[UserPost][datetime_from]">
                    <label class="col-sm-1 control-label"> Đến</label>
                    <input class="form-control col-sm-4 datepicker" data-date-format="mm/dd/yyyy" style="margin-left: 20px;"   name="userPost[UserPost][datetime_to]">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Cập nhật hình ảnh</label>
            <a class="btn add-image-post-by-user" rel="0"><b class="glyphicon glyphicon-plus"></b> Thêm ảnh</a>
            <div class="row" id="wrap-image-post-input-file">
            </div>
        </div>
        <hr>
        <h4>THÔNG TIN LIÊN HỆ</h4>
        <div class="form-group">
            <div class="col-sm-12" style="padding-left: 0px;">
                <label class="col-sm-2 control-label">Họ tên  <font style="color: red">(*)</font> </label>
                <input class="form-control col-sm-8" style="margin-left: 20px;" name="userPost[UserPost][name_contact]">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12" style="padding-left: 0px;">
                <label class="col-sm-2 control-label">Địa chỉ</label>
                <input class="form-control col-sm-8" style="margin-left: 20px;" name="userPost[UserPost][address_contact]">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12" style="padding-left: 0px;">
                <label class="col-sm-2 control-label">Điện thoại </label>
                <input class="form-control col-sm-8" style="margin-left: 20px;" name="userPost[UserPost][tel_contact]">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12" style="padding-left: 0px;">
                <label class="col-sm-2 control-label">Di động <font style="color: red">(*)</font> </label>
                <input class="form-control col-sm-8" style="margin-left: 20px;" name="userPost[UserPost][mobile_contact]">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12" style="padding-left: 0px;">
                <label class="col-sm-2 control-label">Email</label>
                <input class="form-control col-sm-8" style="margin-left: 20px;" name="userPost[UserPost][mail_contact]">
            </div>
        </div>
        <hr>
        <h4>THÔNG TIN BẢN ĐỒ</h4>
        <div class="form-group">
            <div class="col-sm-12" style="padding-left: 0px;text-align: center">
                <div id="map" class="col-sm-12" style="margin-left: 20px;height: 300px"></div>
                <a class="btn" onClick="centerMarker()">Lấy vị trí</a>
                <input type="text" name="post[Post][lat]" id="lat" style="display: none" value="21.0054356"/>
                <input type="text" name="post[Post][lng]" id="lng" style="display: none" value="105.8431971"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12" style="padding-left: 0px;">
                <label class="col-sm-2 control-label">Mã an toàn  <font style="color: red">(*)</font> </label>
                <div  class="col-sm-9">
                    <div class="col-lg-5 col-xs-5" style="padding-left: 0px">
                        <input class="form-control" class="" name="captcha_post" required>
                    </div>
                    <div class="col-lg-7 col-xs-7" style="padding-left: 0px">
                        <img class="img-thumbnail" id="img-capcha" style="height: 35px; width: 100px;margin-left: 10px" src="capcha/CapchaImage.php" />
                        <a class="btn btn-primary refresh-capcha" style="margin-left: 10px"><b class="glyphicon glyphicon-refresh"></b> </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group" >
            <div class="col-lg-offset-2 col-lg-9">
                <button type="submit" class="btn btn-primary" ><b class="glyphicon glyphicon-ok"></b> Đăng tin</button>
                <button class="btn btn-default" ><b class="glyphicon glyphicon-remove"></b> Hủy</button>
            </div>
        </div>

        <br><br><br><br>
    </form>
</div>
<div class="modal fade modal-confirm" id="myModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" > 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" >Cảnh báo</h4>
            </div>
            <div class="modal-body">
                <p style="color: red" id="error-message-post"></p>
            </div>
            <div class="modal-footer" style="text-align: center">
                <button type="button" class="btn btn-primary" data-dismiss="modal"> Ok </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>