<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="container">
    <hr>
    <div class="container-fluid">
        <?php echo $this->element('user_profile_menu');?>
        <div class="col-md-8 col-xs-8" style="padding-left: 0px">
            <div class="container-fluid">
                <legend  style="font-size: 16px">Thay đổi thông tin cá nhân</legend>
                <form class="form-horizontal register-user" role="form" method="post" name="registerUser" id="frm-registerUser" onsubmit="validateRigisterForm()">
                    <?php echo $this->Session->flash(); ?>
                    <div class="form-group">
                        <label class="col-lg-3 control-label" style="text-align: right">Họ tên <label style="color: red"> (*)</label></label>
                        <div class="col-lg-9">
                            <input class="form-control" style="width: 100%" name="user[User][name]" required pattern=".{6,50}" required title="6 to 50 characters" value="<?php echo $User['User']['name'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label" style="text-align: right">Email </label>
                        <div class="col-lg-9">
                            <input class="form-control" type="email" style="width: 100%" name="user[User][email]" value="<?php echo $User['User']['email'] ?>" disabled >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label" style="text-align: right">Điện thoại <label style="color: red"> (*)</label></label>
                        <div class="col-lg-9">
                            <input class="form-control" type="tel" style="width: 100%" name="user[User][tel]" value="<?php echo $User['User']['tel'] ?>" required>
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
                    <div class="form-group">
                        <label class="col-lg-3 control-label" style="text-align: right">Facebook/ Twitter</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="url" style="width: 100%" name="user[User][facebook]" value="<?php echo $User['User']['facebook'] ?>" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label" style="text-align: right">Skype</label>
                        <div class="col-lg-9">
                            <input class="form-control" style="width: 100%" name="user[User][skype]" value="<?php echo $User['User']['skype'] ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group" >
                        <div class="col-lg-offset-3 col-lg-8">
                            <button type="submit" class="btn btn-primary" ><b class="glyphicon glyphicon-ok"></b> Lưu chỉnh sửa</button>
                            <button class="btn btn-default" ><b class="glyphicon glyphicon-remove"></b> Hủy</button>
                        </div>
                    </div>
                    <!--end form-->
                </form>
            </div>
        </div>
    </div>
</div>