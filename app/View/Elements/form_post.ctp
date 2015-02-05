<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<br>
<legend  style="padding-top: 20px;">ĐĂNG TIN RAO BÁN/CHO THUÊ</legend>
<div class="container-fluid">
    <form class="form-horizontal" role="form" method="post" name="createNewPostbyUser" id="frm-createNewPostbyUser" class="create_post_form-by-user">
        <h4>THÔNG TIN CƠ BẢN</h4>
        <div class="form-group">
            <label class="col-sm-2 control-label">Loại tin</label>
            <div class="col-sm-10">
                <div >
                    <input type="radio"  style="width: 20px;height: 15px" name="post[Post][type_id]"> BĐS bán
                    <input type="radio"   style="width: 20px;height: 15px;margin-left: 20px" name="post[Post][type_id]" > BĐS cho thuê
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Loại nhà đất <font style="color: red">(*)</font></label>
            <div class="col-sm-10 row">
                <div  class="col-sm-4 col-xs-6">
                    <select class="col-sm-12 form-control" name="post[Post][type_item_id]" >
                        <option>option1</option>
                        <option>option1</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Vị trí </label>
            <div class="col-sm-10 row">
                <div style="margin-bottom:20px" class="col-sm-4 col-xs-6">
                    <select class="col-sm-12 col-xs-12 form-control" ></select>
                </div>
                <div style="margin-bottom:20px" class="col-sm-4 col-xs-6">
                    <select class="form-control col-xs-12 col-sm-12" ></select>
                </div>
                <div style="margin-bottom:20px" class="col-sm-4 col-xs-6">
                    <select class="form-control col-xs-12 col-sm-12" ></select>
                </div>
                <div  class="col-sm-4 col-xs-6">
                    <select class="form-control col-xs-12 col-sm-12" ></select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4" style="padding-left: 0px;">
                <label class="col-sm-6 control-label">Giá </label>
                <input class="form-control col-sm-5" style="margin-left: 20px;">
            </div>
            <div class="col-sm-4" style="padding-left: 0px;">
                <label class="col-sm-4 control-label" style="margin-left: 10px;">Đơn vị </label>
                <select class="form-control col-sm-7" ></select>
            </div>
            <div class="col-sm-4" style="padding-left: 0px;">
                <label class="col-sm-4 control-label" style="margin-left: 10px;">Diện tích </label>
                <input class="form-control col-sm-5" >&nbsp;<label style="margin-top: 5px"> m2 </label>
            </div>

        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Địa chỉ <font style="color: red">(*)</font> </label>
            <div class="col-sm-10 row">
                <div class="col-sm-12">
                    <input type="text" class="form-control col-sm-12" >
                </div>
            </div>
        </div>
        <hr>
        <h4>THÔNG TIN KHÁC</h4>
        <div class="form-group">
            <div class="col-sm-4" style="padding-left: 0px;">
                <label class="col-sm-6 control-label">Mặt tiền </label>
                <input class="form-control col-sm-5" style="margin-left: 20px;"> 
            </div>
            <div class="col-sm-4" style="padding-left: 0px;">
                <label class="col-sm-4 control-label" style="margin-left: 10px;">Đường trước nhà </label>
                <input class="form-control col-sm-6" ><label style="margin-top: 5px">&nbsp;m</label>
            </div>
            <div class="col-sm-4" style="padding-left: 0px;">
                <label class="col-sm-4 control-label" style="margin-left: 10px;">Hướng BĐS </label>
                <select class="form-control col-sm-5" ></select>
            </div>

        </div>
        <div class="form-group">
            <div class="col-sm-4" style="padding-left: 0px;">
                <label class="col-sm-6 control-label">Số tầng</label>
                <input class="form-control col-sm-5" style="margin-left: 20px;">
            </div>
            <div class="col-sm-4" style="padding-left: 0px;">
                <label class="col-sm-4 control-label" style="margin-left: 10px;">Số phòng</label>
                <input class="form-control col-sm-6" >
            </div>
            <div class="col-sm-4" style="padding-left: 0px;">
                <label class="col-sm-4 control-label" style="margin-left: 10px;">Số toilet</label>
                <input class="form-control col-sm-5" >
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
                <input class="form-control col-sm-8" style="margin-left: 20px;">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12" style="padding-left: 0px;">
                <label class="col-sm-2 control-label">Nội dung miêu tả <font style="color: red">(*)</font> </label>
                <textarea class="form-control col-sm-8" style="margin-left: 20px;height: 200px"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12" style="padding-left: 0px;">
                <label class="col-sm-2 control-label">Thời gian đăng <font style="color: red">(*)</font> </label>
                <div class="form-group col-sm-8">
                    <label class="col-sm-1 control-label">Từ</label>
                    <input class="form-control col-sm-4" style="margin-left: 20px;">
                    <label class="col-sm-1 control-label"> Đến</label>
                    <input class="form-control col-sm-4" style="margin-left: 20px;">
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
                <input class="form-control col-sm-8" style="margin-left: 20px;">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12" style="padding-left: 0px;">
                <label class="col-sm-2 control-label">Địa chỉ</label>
                <input class="form-control col-sm-8" style="margin-left: 20px;">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12" style="padding-left: 0px;">
                <label class="col-sm-2 control-label">Điện thoại </label>
                <input class="form-control col-sm-8" style="margin-left: 20px;">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12" style="padding-left: 0px;">
                <label class="col-sm-2 control-label">Di động <font style="color: red">(*)</font> </label>
                <input class="form-control col-sm-8" style="margin-left: 20px;">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12" style="padding-left: 0px;">
                <label class="col-sm-2 control-label">Email</label>
                <input class="form-control col-sm-8" style="margin-left: 20px;">
            </div>
        </div>
        <hr>
        <h4>THÔNG TIN BẢN ĐỒ</h4>
        <div class="form-group">
            <div class="col-sm-12" style="padding-left: 0px;">
                <div id="map" class="col-sm-12" style="margin-left: 20px;height: 150px"></div>
                <input type="button" value="Retrieve Plotter" onClick="centerMarker()" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12" style="padding-left: 0px;">
                <label class="col-sm-2 control-label">Mã an toàn  <font style="color: red">(*)</font> </label>
                <input class="form-control col-sm-4" style="margin-left: 20px;">

                <img class="img-thumbnail" style="height: 35px; width: 100px;margin-left: 10px">

                <a class="btn btn-success" style="margin-left: 10px"><b class="glyphicon glyphicon-refresh"></b> </a>

            </div>
        </div>
        <hr>
        <div class="form-group" >
            <div class="col-lg-offset-2 col-lg-9">
                <button type="submit" class="btn btn-success" ><b class="glyphicon glyphicon-ok"></b> Đăng tin</button>
                <button type="submit" class="btn btn-default" ><b class="glyphicon glyphicon-remove"></b> Hủy</button>
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
                <p style="color: red">Bạn có thể nhập tối đa 6 ảnh và mỗi ảnh nặng không quá 4mb!</p>
            </div>
            <div class="modal-footer" style="text-align: center">
                <button type="button" class="btn btn-success" data-dismiss="modal"> Ok </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>