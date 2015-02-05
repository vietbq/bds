
<?php

?>
<div class="box">
    <div class="container create_post_page">
        <?php echo $this->Session->flash(); ?>
        <legend style="text-align: center">Tạo bài viết mới</legend>
        <form role="form" name="createNewPost" id="frm-createNewPost" class="create_post_form" method="post" enctype="multipart/form-data" >
            <div class="form-group">
                <label for="exampleInputEmail1">Tiêu đề <span class="require_notice"> (*) </span></label>
                <input type="text" class="form-control title" name="post[Post][title]" placeholder="Tiêu đề" />
            </div>
            <div class="form-group">
                <label>
                    Loại bất động sản
                </label>
                <select class="loai_nha_dat form-control" id='type_bat_dong_san' name="post[Post][type_id]"  >
                    <?php foreach ($TypePost as $type){ ?>
                    <option value="<?php echo $type['Type']['type_id'] ?>"><?php echo $type['Type']['type_name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group" id="nha_dat_ban" enctype="multipart/form-data">
                <label>Loại hình nhà đất bán</label>
                <select class="loai_nha_dat form-control" id="loai-hinh-nha-dat-id" name="post[Post][type_item_id]">
                </select>
            </div>
            <div class="form-group">
                <label>Khu vực <span class="require_notice"> (*) </span></label>
                <input type="text" class="form-control address"  name="post[Post][address]" placeholder="Địa chỉ nhà đất" />
            </div>
            <div class="form-group" id="tinh_thanh">
                <label>Tỉnh thành<span class="require_notice"> (*) </span></label>
                <select class="loai_nha_dat form-control" id="city" name="post[Post][city]">
                </select>
            </div>
            <div class="form-group" id="quan_huyen">
                <label>Quận huyện<span class="require_notice"> (*) </span></label>
                <select class="loai_nha_dat form-control" id="state" name="post[Post][state]">
                </select>
            </div>
            <div class="form-group">
                <label>Diện tích (Đơn vị : m2)</label>
                <input type="text" class="form-control area"  name="post[Post][area]" placeholder="Diện tích" />
            </div>
            <div class="form-group">
                <label>Giá tiền</label><br/>
                <label>Đơn vị tiền tệ :
                    <input type="radio" name="post[Post][money_unit]" id="radio_dv_ti" value="0" checked>
                    Tỉ VND
                </label>
                <label>
                    <input type="radio" name="post[Post][money_unit]" id="radio_dv_trieu" value="1">
                    Triệu VND
                </label>
                <input type="text" class="form-control price"  name="post[Post][money]" placeholder="Giá tiền" />
            </div>
            <div class="form-group">
                <label>Mô tả chi tiết <span class="require_notice"> (*) </span></label>
                <textarea class="form-control" id="description_area" name="post[Post][description]" rows="10" placeholder="Mô tả chi tiết về nội dung bài viết"></textarea>
            </div>
            <hr>
            <div class="form-group">
                <label class="col-sm-12"><h1>Thông tin khác</h1></label><br>
                <div style="" class="col-sm-4 col-xs-6">
                    <label>Mặt tiền</label><br>
                    <input class="form-control" name="post[Post][facade]" style="width: 50%;display: inline"> m
                </div>
                <div style="margin-bottom:30px" class="col-sm-4 col-xs-6">
                    <label>Đường trước nhà </label><br><input name="post[Post][street_distance]"  class="form-control" style="width: 50%;display: inline"> m
                </div>
                <div style="margin-bottom:30px" class="col-sm-4 col-xs-6">
                    <label>Hướng BĐS</label><br><input  class="form-control" name="post[Post][direction]"   style="width: 50%">
                </div>
                <div style="margin-bottom:30px" class="col-sm-4 col-xs-6">
                    <label>Số tầng</label><br><input class="form-control" name="post[Post][num_floor]"   style="width: 50%">
                </div>
                <div style="margin-bottom:30px" class="col-sm-4 col-xs-6">
                    <label>Số phòng</label><br>
                    <input class="form-control" name="post[Post][num_room]"   style="width: 50%">
                </div>
                <div style="margin-bottom:30px" class="col-sm-4 col-xs-6">
                    <label>Số toilet</label><br><input class="form-control" name="post[Post][num_toilet]"   style="width: 50%">
                </div>
            </div>
            <hr>
            <div class="row">
                <div style="margin-bottom:30px" class="col-sm-4 col-xs-6">
                    <label>Upload image</label>
                    <div class="media-body" >
                        <label for="image-01">
                            <a class="btn btn-primary"><b>Choice image</b></a><a class="btn btn-danger del-image-post"><i class="fa  fa-times"></i></a>
                            <input type="file"  class="form-control image-post-input-file" name="data[image]" id="image-01" style="display: none"  />
                            <input type="hidden" name="image_post[]" class="stamp-image" value="" />
                            <br><img class="media-object img-thumbnail stamp-image-display" style="height: 150px ; width: 250px" src="" alt="">
                        </label>
                        <div class="text-danger error-image"></div>
                    </div>
                </div>
                <div style="margin-bottom:30px" class="col-sm-4 col-xs-6">
                    <label>Upload image</label>
                    <div class="media-body">
                        <label for="image-02">
                            <a class="btn btn-primary"><b>Choice image</b></a><a class="btn btn-danger del-image-post"><i class="fa  fa-times"></i></a>
                            <input type="file"  class="form-control image-post-input-file" name="data[image]" id="image-02" style="display: none"  />
                            <input type="hidden" name="image_post[]" class="stamp-image" value="" />
                            <br><img class="media-object img-thumbnail stamp-image-display" style="height: 150px ; width: 250px" src="" alt="">
                        </label>
                        <div class="text-danger error-image"></div>
                    </div>
                </div>
                <div style="margin-bottom:30px" class="col-sm-4 col-xs-6">
                    <label>Upload image</label>
                    <div class="media-body">
                        <label for="image-03">
                            <a class="btn btn-primary"><b>Choice image</b></a><a class="btn btn-danger del-image-post"><i class="fa  fa-times"></i></a>
                            <input type="file"  class="form-control image-post-input-file" name="data[image]" id="image-03" style="display: none"  />
                            <input type="hidden" name="image_post[]" class="stamp-image" value="" />
                            <br><img class="media-object img-thumbnail stamp-image-display" style="height: 150px ; width: 250px" src="" alt="">
                        </label>
                        <div class="text-danger error-image"></div>
                    </div>
                </div>
                <div style="margin-bottom:30px" class="col-sm-4 col-xs-6">
                    <label>Upload image</label>
                    <div class="media-body">
                        <label for="image-04" >
                            <a class="btn btn-primary"><b>Choice image</b></a><a class="btn btn-danger del-image-post"><i class="fa  fa-times"></i></a>
                            <input type="file"  class="form-control image-post-input-file" name="data[image]" id="image-04" style="display: none"  />
                            <input type="hidden" name="image_post[]" class="stamp-image" value="" />
                            <br><img class="media-object img-thumbnail stamp-image-display" style="height: 150px ; width: 250px" src="" alt="">
                        </label>
                        <div class="text-danger error-image"></div>
                    </div>
                </div>
                <div style="margin-bottom:30px" class="col-sm-4 col-xs-6">
                    <label>Upload image</label>
                    <div class="media-body">
                        <label for="image-05" >
                            <a class="btn btn-primary"><b>Choice image</b></a><a class="btn btn-danger del-image-post"><i class="fa  fa-times"></i></a>
                            <input type="file"  class="form-control image-post-input-file" name="data[image]" id="image-05" style="display: none"  />
                            <input type="hidden" name="image_post[]" class="stamp-image" value="" />
                            <br><img class="media-object img-thumbnail stamp-image-display" style="height: 150px ; width: 250px" src="" alt="">
                        </label>
                        <div class="text-danger error-image"></div>
                    </div>
                </div>
                <div style="margin-bottom:30px" class="col-sm-4 col-xs-6" >
                    <label>Upload image</label>
                    <div class="media-body">
                        <label for="image-06" >
                            <a class="btn btn-primary"><b>Choice image</b></a><a class="btn btn-danger del-image-post"><i class="fa  fa-times"></i></a>
                            <input type="file"  class="form-control image-post-input-file" name="data[image]" id="image-06" style="display: none"  />
                            <input type="hidden" name="image_post[]" class="stamp-image" value="" />
                            <br><img class="media-object img-thumbnail stamp-image-display" style="height: 150px ; width: 250px" src="" alt="">
                        </label>
                        <div class="text-danger error-image"></div>
                    </div>
                </div>
            </div>
            <div class="require_notice">Chú thích : (*)  Trường này không được bỏ trống</div>
            <br>
            <div class="admin_button " style="text-align: center">
                <input type="submit" class="btn btn-info" name="register_submit"  value="Tạo mới">
                <button type="reset" class="btn btn-info create_post_reset">Hủy</button>
            </div>
            <br>
        </form>
    </div>
</div>
