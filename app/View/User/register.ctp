<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="container" style="width: 800px;margin: 0px auto;margin-bottom: 20px">
    <legend  style="padding-top: 20px;font-size:  15px"><b>ĐĂNG KÝ THÀNH VIÊN</b></legend>
    <div class="container-fluid">
        <form class="form-horizontal register-user" role="form" method="post" name="registerUser" id="frm-registerUser" onsubmit="validateRigisterForm()">
            <h6>Mời Quý vị đăng ký thành viên để được hưởng nhiều lợi ích và hỗ trợ từ chúng tôi!</h6>
            <?php echo $this->Session->flash(); ?>
            <legend  style="padding-top: 20px;font-size: 14px">THÔNG TIN CÁ NHÂN CỦA BẠN</legend>
            <div class="form-group">
                <label class="col-lg-3 control-label" style="text-align: right">Họ tên</label>
                <div class="col-lg-9">
                    <input class="form-control" style="width: 100%" name="user[User][name]" required pattern=".{6,20}" required title="6 to 20 characters" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label" style="text-align: right">Email <label style="color: red"> (*)</label></label>
                <div class="col-lg-9">
                    <input class="form-control" type="email" style="width: 100%" name="user[User][email]" required >
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label" style="text-align: right">Điện thoại <label style="color: red"> (*)</label></label>
                <div class="col-lg-9">
                    <input class="form-control" type="tel" style="width: 100%" name="user[User][tel]" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label" style="text-align: right">Mật khẩu <label style="color: red"> (*)</label></label>
                <div class="col-lg-9">
                    <input class="form-control" type="password"  style="width: 100%" pattern=".{6,16}" required title="6 to 16 characters" name="user[User][password]" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label" style="text-align: right">Xác nhận lại mật khẩu <label style="color: red"> (*)</label></label>
                <div class="col-lg-9">
                    <input class="form-control" type="password" pattern=".{6,16}" required title="6 to 16 characters" style="width: 100%" name="confirm_password" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label" style="text-align: right">Địa chỉ</label>
                <div class="col-lg-9" >
                    <div class="row">
                        <div class="col-lg-6 col-xs-6">
                            <select class="col-sm-12 col-xs-12 form-control" id="city" name="user[User][city]">
                            </select>
                        </div>
                        <div class="col-lg-6 col-xs-6">
                            <select class="form-control col-xs-12 col-sm-12" name="user[User][state]" id="state" >
                                <option value="-1">Chọn quận / huyện</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <legend  style="padding-top: 20px;font-size: 14px">THÔNG TIN KHÁC</legend>
            <div class="form-group">
                <label class="col-lg-3 control-label" style="text-align: right">Facebook/ Twitter</label>
                <div class="col-lg-9">
                    <input class="form-control" type="url" style="width: 100%" name="user[User][facebook]" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label" style="text-align: right">Skype</label>
                <div class="col-lg-9">
                    <input class="form-control" style="width: 100%" name="user[User][skype]" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label" style="text-align: right">Nhập mã đăng ký thành viên <label style="color: red"> (*)</label></label>
                <div class="col-lg-9">
                    <div class="col-lg-5 col-xs-5" style="padding-left: 0px">
                        <input class="form-control" name="captcha_register" required>
                    </div>
                    <div class="col-lg-7 col-xs-7" style="padding-left: 0px">
                        <img class="img-thumbnail" id="img-capcha" style="height: 35px; width: 100px;margin-left: 10px" src="capcha/CapchaImage.php" />
                        <a class="btn btn-primary refresh-capcha" style="margin-left: 10px"><b class="glyphicon glyphicon-refresh"></b> </a>
                    </div>

                </div>
            </div>
            <hr>
            <div class="form-group" >
                <div class="col-lg-offset-3 col-lg-8">
                    <button type="submit" class="btn btn-primary" ><b class="glyphicon glyphicon-ok"></b> Đăng Ký</button>
                    <button class="btn btn-default" ><b class="glyphicon glyphicon-remove"></b> Hủy</button>
                </div>
            </div>
            <!--end form-->
        </form>
    </div>
</div>
<div class="modal fade modal-confirm" id="myModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" > 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" >Cảnh báo</h4>
            </div>
            <div class="modal-body">
                <p style="color: red" id="error-message"></p>
            </div>
            <div class="modal-footer" style="text-align: center">
                <button type="button" class="btn btn-success" data-dismiss="modal"> Ok </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>