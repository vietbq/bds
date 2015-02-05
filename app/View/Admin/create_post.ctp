
<?php

?>
<div class="box">
    <div class="container create_post_page">
        <legend style="text-align: center">Tạo bài viết mới</legend>
        <form role="form" name="createNewPost" id="frm-createNewPost" class="create_post_form" action="<?php echo Router::url(array('controller' => 'Admin', 'action' => 'createPost')); ?> " 
              method="post" enctype="multipart/form-data" >
            <div class="form-group">
                <label for="exampleInputEmail1">Tiêu đề <span class="require_notice"> (*) </span></label>
                <input type="text" class="form-control title" name="title" placeholder="Tiêu đề" />
            </div>
            <div class="form-group">
                <label>
                    <input type="radio" name="optionsRadios" id="radio_nha_dat_ban" value="0" checked>
                    Nhà đất bán
                </label>
                <label>
                    <input type="radio" name="optionsRadios" id="radio_nha_dat_cho_thue" value="1">
                    Nhà đất cho thuê
                </label>
            </div>
            <div class="form-group" id="nha_dat_ban" enctype="multipart/form-data">
                <label>Loại hình nhà đất bán</label>
                <select class="loai_nha_dat form-control" name="loai_nha_dat">
                    <option value="1">Bán căn hộ chung cư</option>
                    <option value="2">Bán nhà riêng</option>
                    <option value="3">Bán đất mặt bằng</option>
                    <option value="4">Loại hình khác</option>
                </select>
            </div>
            <div class="form-group" id="nha_dat_cho_thue">
                <label>Loại hình nhà đất cho thuê</label>
                <select class="loai_nha_dat form-control" name="loai_nha_dat">
                    <option value="1">Cho thuê căn hộ chung cư</option>
                    <option value="2">Cho thuê nhà riêng</option>
                    <option value="3">Cho thuê mặt bằng, văn phòng</option>
                    <option value="4">Loại hình khác</option>
                </select>
            </div>
            <div class="form-group">
                <label>Khu vực <span class="require_notice"> (*) </span></label>
                <input type="text" class="form-control address"  name="address" placeholder="Địa chỉ nhà đất" />
            </div>
            <div class="form-group" id="tinh_thanh">
                <label>Tỉnh thành<span class="require_notice"> (*) </span></label>
                <select class="loai_nha_dat form-control" id="city" name="city">
                </select>
            </div>
            <div class="form-group" id="quan_huyen">
                <label>Quận huyện<span class="require_notice"> (*) </span></label>
                <select class="loai_nha_dat form-control" id="state" name="state">
                </select>
            </div>
            <div class="form-group">
                <label>Diện tích (Đơn vị : m2)</label>
                <input type="text" class="form-control area"  name="area" placeholder="Diện tích" />
            </div>
            <div class="form-group">
                <label>Giá tiền</label><br/>
                <label>Đơn vị tiền tệ :
                    <input type="radio" name="donviTien" id="radio_dv_ti" value="0" checked>
                    Tỉ VND
                </label>
                <label>
                    <input type="radio" name="donviTien" id="radio_dv_trieu" value="1">
                    Triệu VND
                </label>
                <input type="text" class="form-control price"  name="price" placeholder="Giá tiền" />
            </div>
            <div class="form-group">
                <label>Mô tả chi tiết <span class="require_notice"> (*) </span></label>
                <textarea class="form-control" id="description_area" name="description_area" rows="10" placeholder="Mô tả chi tiết về nội dung bài viết"></textarea>
            </div>
            <!--            <div class="form-group">
                            <label>Tải ảnh lên</label>
                            <input type="file" id="image_upload" name="myfile[]" multiple class="form-control">
                        </div>-->

            <div class="row">
                <div style="margin-bottom:30px" class="col-sm-4 col-xs-6">
                    <label>Upload image</label>
                    <div class="media-body" >
                        <label for="image-profile-upload">
                            <a class="btn btn-primary"><b>Choice image</b></a><a class="btn btn-danger del-image-post"><i class="fa  fa-times"></i></a>
                            <input type="file"  class="form-control image-post-input-file" name="data[image][]" id="image-01" style="display: none"  />
                            <br><img class="media-object img-thumbnail stamp-image-display" style="height: 150px ; width: 250px" src="img/5/Koala.jpg" alt="">
                        </label>
                        <div class="text-danger error-image"></div>
                    </div>
                </div>
                <div style="margin-bottom:30px" class="col-sm-4 col-xs-6">
                    <label>Upload image</label>
                    <div class="media-body">
                        <label for="image-profile-upload">
                            <a class="btn btn-primary"><b>Choice image</b></a><a class="btn btn-danger del-image-post"><i class="fa  fa-times"></i></a>
                            <input type="file"  class="form-control image-post-input-file" name="data[image][]" id="image-02" style="display: none"  />
                            <br><img class="media-object img-thumbnail stamp-image-display" style="height: 150px ; width: 250px" src="img/5/Koala.jpg" alt="">
                        </label>
                        <div class="text-danger error-image"></div>
                    </div>
                </div>
                <div style="margin-bottom:30px" class="col-sm-4 col-xs-6">
                    <label>Upload image</label>
                    <div class="media-body">
                        <label for="image-profile-upload">
                            <a class="btn btn-primary"><b>Choice image</b></a><a class="btn btn-danger del-image-post"><i class="fa  fa-times"></i></a>
                            <input type="file"  class="form-control image-post-input-file" name="data[image][]" id="image-03" style="display: none"  />
                            <br><img class="media-object img-thumbnail stamp-image-display" style="height: 150px ; width: 250px" src="img/5/Koala.jpg" alt="">
                        </label>
                        <div class="text-danger error-image"></div>
                    </div>
                </div>
                <div style="margin-bottom:30px" class="col-sm-4 col-xs-6">
                    <label>Upload image</label>
                    <div class="media-body">
                        <label for="image-profile-upload" >
                            <a class="btn btn-primary"><b>Choice image</b></a><a class="btn btn-danger del-image-post"><i class="fa  fa-times"></i></a>
                            <input type="file"  class="form-control image-post-input-file" name="data[image][]" id="image-04" style="display: none"  />
                            <br><img class="media-object img-thumbnail stamp-image-display" style="height: 150px ; width: 250px" src="img/5/Koala.jpg" alt="">
                        </label>
                        <div class="text-danger error-image"></div>
                    </div>
                </div>
                <div style="margin-bottom:30px" class="col-sm-4 col-xs-6">
                    <label>Upload image</label>
                    <div class="media-body">
                        <label for="image-profile-upload" >
                            <a class="btn btn-primary"><b>Choice image</b></a><a class="btn btn-danger del-image-post"><i class="fa  fa-times"></i></a>
                            <input type="file"  class="form-control image-post-input-file" name="data[image][]" id="image-05" style="display: none"  />
                            <br><img class="media-object img-thumbnail stamp-image-display" style="height: 150px ; width: 250px" src="img/5/Koala.jpg" alt="">
                        </label>
                        <div class="text-danger error-image"></div>
                    </div>
                </div>
                <div style="margin-bottom:30px" class="col-sm-4 col-xs-6" >
                    <label>Upload image</label>
                    <div class="media-body">
                        <label for="image-profile-upload" >
                            <a class="btn btn-primary"><b>Choice image</b></a><a class="btn btn-danger del-image-post"><i class="fa  fa-times"></i></a>
                            <input type="file"  class="form-control image-post-input-file" name="data[image][]" id="image-05" style="display: none"  />
                            <br><img class="media-object img-thumbnail stamp-image-display" style="height: 150px ; width: 250px" src="img/5/Koala.jpg" alt="">
                        </label>
                        <div class="text-danger error-image"></div>
                    </div>
                </div>
            </div>
            <div class="require_notice">Chú thích : (*)  Trường này không được bỏ trống</div>
            <br>
            <div class="admin_button " style="text-align: center">
                <button type="submit" class="btn btn-info create_post_submit" name="register_submit" form="createNewPost">Tạo mới</button>
                <button type="reset" class="btn btn-info create_post_reset">Hủy</button>
            </div>
            <br>
        </form>
    </div>
</div>
