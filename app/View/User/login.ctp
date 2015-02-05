<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="content" style="width: 600px;border: 1px solid #e3dfda;border-radius: 3px;margin: 0px auto;margin-top: 50px" >
    <p  style="padding-top: 20px;font-size:  15px;text-align: center;color: #0044cc"><b><i class="glyphicon glyphicon-user"> </i> Đăng Nhập</b></p>
    <div class="container-fluid">
        <form class="form-horizontal create_post_form-by-user" role="form" method="post" name="createNewPostbyUser" id="frm-createNewPostbyUser">
            <?php echo $this->Session->flash(); ?>
            <div class="form-group">
                <label class="col-lg-3 control-label" style="text-align: right">Email</label>
                <div class="col-lg-7">
                    <input class="form-control" type="email" style="width: 100%" name="data[email]" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label" style="text-align: right">Password</label>
                <div class="col-lg-7">
                    <input class="form-control" type="password" style="width: 100%" name="data[password]" >
                </div>

            </div>
            <div class="form-group">
                <div class="col-lg-offset-3 col-lg-9">
                    <input class="" type="checkbox" name="data[remember_password]" > Ghi nhớ mật khẩu | <a>Quên mật khẩu</a>
                </div>

            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <p>Nếu bạn chưa có tài khoản tại <b>BDS</b> vui lòng đăng ký <a href="user/register">tại đây</a></p>
                </div>
            </div>
            <div class="form-group" >
                <div class="col-lg-12" style="text-align: center">
                    <button type="submit" class="btn btn-primary" >Đăng nhập</button>
                </div>
            </div>
        </form>
    </div>
</div>