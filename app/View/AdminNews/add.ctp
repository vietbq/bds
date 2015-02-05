<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="container-fluid" style="margin-top: 30px">
    <legend><?php echo $title_for_layout ?></legend>
    <div class="col-sm-12">
        <?php echo $this->Session->flash()?>
    </div>
    <form class="form-horizontal create_post_form-by-user" role="form" method="post" >
        <div class="form-group row">
            <label class="col-sm-2">Danh mục lớn</label>
            <div class="col-sm-3">
                <select class="form-control" name="data[News][type_id]" id="type_news_id" required></select>
            </div>
            <label class="col-sm-2">Danh mục nhỏ</label>
            <div class="col-sm-3">
                <select class="form-control" name="data[News][type_item_id]" id="type_item_news_id" required></select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-12">Tiêu đề</label>
            <div class="col-sm-12">
                <input class="form-control" name="data[News][title]" placeholder="Nhập tiêu đề..." required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-12 " >Tiêu đề</label>
            <div class="col-sm-12">
                <textarea class="form-control" name="data[News][description]" placeholder="Nhập nội dung miêu tả ngắn gọn..." required></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-12">Nội dung</label>
            <div class="col-sm-12">
                <textarea class="form-control ckeditor" name="data[News][content]" ></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-12">Nguồn tin</label>
            <div class="col-sm-12">
                <input class="form-control" name="data[News][reference]" placeholder="Nhập nguồn tham khảo...">
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-9">
                <button type="submit" class="btn btn-primary" ><b class="glyphicon glyphicon-ok"></b> Đăng tin</button>
                <button  class="btn btn-danger" ><b class="glyphicon glyphicon-phone"></b> Xem thử</button>
                <button class="btn btn-default" ><b class="glyphicon glyphicon-remove"></b> Hủy</button>
            </div>
        </div>
    </form>
</div>

<script>
$(document).ready(function() {
     populateTypeNews('type_news_id', 'type_item_news_id');
});
</script>