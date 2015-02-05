<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
Chúc mừng bạn <b><?php echo $name; ?></b> đã đăng kí thành công tài khoản trên bds.com! <br>
<b>Dưới đây là thông tin đăng nhập của bạn: </b><br>
<label>Email:</label> <?php echo $email ?> <br>
<label>Điện thoại:</label> <?php echo $tel ?> <br>

Vui lòng kích vào đường link dưới đây để kích hoạt tài khoản của bạn:<br>
<a href="<?php echo $link; ?>"><?php echo $link; ?></a><br>

Nếu đường link trên không hoạt động, vui lòng copy đường link đó, rồi paste lên thanh địa chỉ của trình duyệt để link tới trang kích hoạt trên hệ thống. <br>
Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi!<br>