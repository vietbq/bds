<?php include_once 'header.ctp'; ?>
<div class="mainContent" id="mainContent">
    <div class="topMainContent">
        <div class="leftSearchBox">

            <div class="searchFilter">
                <div class="searchHeader">
                    <div class="searchLogo"></div>
                    <div class="searchLabel">Công cụ tìm kiếm</div>
                </div>
                <form class="searchBoxForm" action="<?php
                echo Router::url(array
                    ('controller' => 'Home', 'action' => 'advanceSearch'));
                ?>" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nhập từ khóa tìm kiếm </label>
                        <input type="text" class="form-control title" name="title" placeholder="Nhập từ khóa . Ví dụ Ecopark" />
                    </div>
                    <div class="form-group radio_class">
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
                        <select class="loai_nha_dat custom-dropdown" name="loai_nha_dat">
                            <option value="-1">Chọn loại hình bán nhà đất</option>
                            <option value="1">Bán căn hộ chung cư</option>
                            <option value="2">Bán nhà riêng</option>
                            <option value="3">Bán đất mặt bằng</option>
                            <option value="4">Loại hình khác</option>
                        </select>
                    </div>
                    <div class="form-group" id="nha_dat_cho_thue">
                        <select class="loai_nha_dat custom-dropdown" name="loai_nha_dat">
                            <option value="-1">Chọn loại hình cho thuê nhà đất</option>
                            <option value="1">Cho thuê căn hộ chung cư</option>
                            <option value="2">Cho thuê nhà riêng</option>
                            <option value="3">Cho thuê mặt bằng, văn phòng</option>
                            <option value="4">Loại hình khác</option>
                        </select>
                    </div>
                    <div class="form-group" id="tinh_thanh">
                        <label>Tỉnh thành</label>
                        <select class="custom-dropdown" id="city" name="city">
                        </select>
                    </div>
                    <div class="form-group" id="quan_huyen">
                        <label>Quận huyện</label>
                        <select class="custom-dropdown" id="state" name="state">
                            <option value="-1">Chọn quận / huyện</option>
                        </select>
                    </div>
                    <div class="form-group" id="gia_tien_ban">
                        <label>Giá tiền</label>
                        <select name="loai_nha_dat" class="gia_tien custom-dropdown">
                            <option value="1">----- Chọn giá tiền -----</option>
                            <option value="1">Dưới 500 triệu</option>
                            <option value="2">500 triệu ~ 1 tỉ</option>
                            <option value="3">1 ~ 3 tỉ</option>
                            <option value="4">Trên 3 tỉ</option>
                            <option value="5">Thỏa thuận</option>
                        </select>
                    </div>
                    <div class="form-group" id="gia_tien_thue">
                        <label>Giá tiền</label>
                        <select  name="loai_nha_dat" class="gia_tien custom-dropdown">
                            <option value="-1">----- Chọn giá tiền -----</option>
                            <option value="1">Dưới 1 triệu</option>
                            <option value="2">1 ~ 3 triệu</option>
                            <option value="3">3 ~ 10 triệu</option>
                            <option value="4">Trên 10 triệu</option>
                            <option value="5">Thỏa thuận</option>
                        </select>
                    </div>
                    <div class="form-group" id="dien_tich">
                        <label>Diện tích</label>
                        <select name="loai_nha_dat" class="dien_tich custom-dropdown">
                            <option value="-1">    ---- Chọn diện tích ----</option>
                            <option value="1">Dưới 30 m2</option>
                            <option value="1">30 ~ 50 m2</option>
                            <option value="2">50 ~ 100 m2</option>
                            <option value="3">100 ~ 500 m2</option>
                            <option value="4">Trên 500m2</option>
                            <option value="5">Không xác định</option>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-default" name="searchSubmit" id="searchSubmit" value="Tìm kiếm"/>
                </form>
            </div>
        </div><!-- End div.leftSearchBox -->
        <div class="recommendPost">
            <div class="recommendPostTitle">
                Tin bán , cho thuê nhà đất đang được quan tâm nhiều
            </div>
            <div class="recommendPostContent">
                <div class="p-main">
                    <div class="t-title">
                        <a href ="#">Bán đất nền MB 530 khu đô thị Nam Thành Phố, P.Đông Vệ, Thanh Hóa</a>
                    </div>
                    <div class="p-content">
                        <div class="p-line">
                            <div class="left">Giá</div>: &nbsp;&nbsp;Thỏa thuận
                        </div>
                        <div class="p-line">
                            <div class="left">Diện tích</div>: &nbsp;&nbsp;Không xác định
                            <div class="right"> Ngày đăng</div>
                        </div>
                        <div class="p-line">
                            <div class="left">Quận huyện</div>: &nbsp;&nbsp;Nam Từ Liêm , Hà Nội
                            <div class="right"> 2014-07-15</div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="p-main">
                    <div class="t-title">
                        <a href ="#">Bán đất nền MB 530 khu đô thị Nam Thành Phố, P.Đông Vệ, Thanh Hóa</a>
                    </div>
                    <div class="p-content">
                        <div class="p-line">
                            <div class="left">Giá</div>: &nbsp;&nbsp;Thỏa thuận
                        </div>
                        <div class="p-line">
                            <div class="left">Diện tích</div>: &nbsp;&nbsp;Không xác định
                            <div class="right"> Ngày đăng</div>
                        </div>
                        <div class="p-line">
                            <div class="left">Quận huyện</div>: &nbsp;&nbsp;Nam Từ Liêm , Hà Nội
                            <div class="right"> 2014-07-15</div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="p-main">
                    <div class="t-title">
                        <a href ="#">Bán đất nền MB 530 khu đô thị Nam Thành Phố, P.Đông Vệ, Thanh Hóa</a>
                    </div>
                    <div class="p-content">
                        <div class="p-line">
                            <div class="left">Giá</div>: &nbsp;&nbsp;Thỏa thuận
                        </div>
                        <div class="p-line">
                            <div class="left">Diện tích</div>: &nbsp;&nbsp;Không xác định
                            <div class="right"> Ngày đăng</div>
                        </div>
                        <div class="p-line">
                            <div class="left">Quận huyện</div>: &nbsp;&nbsp;Nam Từ Liêm , Hà Nội
                            <div class="right"> 2014-07-15</div>
                        </div>
                    </div>
                </div>
                <br/>
            </div>

        </div><!-- End div.newPost -->
    </div><!-- End div.topMainContent -->
    <div class="bottomMainContent">
        <div class="left_post">
            Tin nhà đất bán mới

            <div class="recommendPostContent">
                <div class="p-main">
                    <div class="t-title">
                        <a href ="#">Bán đất nền MB 530 khu đô thị Nam Thành Phố, P.Đông Vệ, Thanh Hóa</a>
                    </div>
                    <div class="p-content">
                        <div class="p-line">
                            <div class="left">Giá</div>: &nbsp;&nbsp;Thỏa thuận
                        </div>
                        <div class="p-line">
                            <div class="left">Diện tích</div>: &nbsp;&nbsp;Không xác định
                            <div class="right"> Ngày đăng</div>
                        </div>
                        <div class="p-line">
                            <div class="left">Quận huyện</div>: &nbsp;&nbsp;Nam Từ Liêm , Hà Nội
                            <div class="right"> 2014-07-15</div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="p-main">
                    <div class="t-title">
                        <a href ="#">Bán đất nền MB 530 khu đô thị Nam Thành Phố, P.Đông Vệ, Thanh Hóa</a>
                    </div>
                    <div class="p-content">
                        <div class="p-line">
                            <div class="left">Giá</div>: &nbsp;&nbsp;Thỏa thuận
                        </div>
                        <div class="p-line">
                            <div class="left">Diện tích</div>: &nbsp;&nbsp;Không xác định
                            <div class="right"> Ngày đăng</div>
                        </div>
                        <div class="p-line">
                            <div class="left">Quận huyện</div>: &nbsp;&nbsp;Nam Từ Liêm , Hà Nội
                            <div class="right"> 2014-07-15</div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="p-main">
                    <div class="t-title">
                        <a href ="#">Bán đất nền MB 530 khu đô thị Nam Thành Phố, P.Đông Vệ, Thanh Hóa</a>
                    </div>
                    <div class="p-content">
                        <div class="p-line">
                            <div class="left">Giá</div>: &nbsp;&nbsp;Thỏa thuận
                        </div>
                        <div class="p-line">
                            <div class="left">Diện tích</div>: &nbsp;&nbsp;Không xác định
                            <div class="right"> Ngày đăng</div>
                        </div>
                        <div class="p-line">
                            <div class="left">Quận huyện</div>: &nbsp;&nbsp;Nam Từ Liêm , Hà Nội
                            <div class="right"> 2014-07-15</div>
                        </div>
                    </div>
                </div>
                <br/>
            </div>
        </div><!-- End div.left_post -->
        <div class="right_post">
            Tin nhà đất cho thuê mới

            <div class="recommendPostContent">
                <div class="p-main">
                    <div class="t-title">
                        <a href ="#">Bán đất nền MB 530 khu đô thị Nam Thành Phố, P.Đông Vệ, Thanh Hóa</a>
                    </div>
                    <div class="p-content">
                        <div class="p-line">
                            <div class="left">Giá</div>: &nbsp;&nbsp;Thỏa thuận
                        </div>
                        <div class="p-line">
                            <div class="left">Diện tích</div>: &nbsp;&nbsp;Không xác định
                            <div class="right"> Ngày đăng</div>
                        </div>
                        <div class="p-line">
                            <div class="left">Quận huyện</div>: &nbsp;&nbsp;Nam Từ Liêm , Hà Nội
                            <div class="right"> 2014-07-15</div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="p-main">
                    <div class="t-title">
                        <a href ="#">Bán đất nền MB 530 khu đô thị Nam Thành Phố, P.Đông Vệ, Thanh Hóa</a>
                    </div>
                    <div class="p-content">
                        <div class="p-line">
                            <div class="left">Giá</div>: &nbsp;&nbsp;Thỏa thuận
                        </div>
                        <div class="p-line">
                            <div class="left">Diện tích</div>: &nbsp;&nbsp;Không xác định
                            <div class="right"> Ngày đăng</div>
                        </div>
                        <div class="p-line">
                            <div class="left">Quận huyện</div>: &nbsp;&nbsp;Nam Từ Liêm , Hà Nội
                            <div class="right"> 2014-07-15</div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="p-main">
                    <div class="t-title">
                        <a href ="#">Bán đất nền MB 530 khu đô thị Nam Thành Phố, P.Đông Vệ, Thanh Hóa</a>
                    </div>
                    <div class="p-content">
                        <div class="p-line">
                            <div class="left">Giá</div>: &nbsp;&nbsp;Thỏa thuận
                        </div>
                        <div class="p-line">
                            <div class="left">Diện tích</div>: &nbsp;&nbsp;Không xác định
                            <div class="right"> Ngày đăng</div> 
                        </div>
                        <div class="p-line">
                            <div class="left">Quận huyện</div>: &nbsp;&nbsp;Nam Từ Liêm , Hà Nội
                            <div class="right"> 2014-07-15</div>
                        </div>
                    </div>
                </div>
                <br/>
            </div>
        </div><!-- End div.right_news -->
    </div>
</div><!-- End div#mainContent -->
<script type="text/javascript">
    $(document).ready(function() {

        $("#nha_dat_cho_thue").css('display', 'none');
        $("#gia_tien_thue").css('display', 'none');
        $('input[type=radio][name=optionsRadios]').change(function() {
            if (this.value == '0') {
                $("#nha_dat_ban").css('display', '');
                $("#nha_dat_cho_thue").css('display', 'none');
                $("#gia_tien_thue").css('display', 'none');
                $("#gia_tien_ban").css('display', '');
            }
            else if (this.value == '1') {
                $("#nha_dat_cho_thue").css('display', '');
                $("#nha_dat_ban").css('display', 'none');
                $("#gia_tien_ban").css('display', 'none');
                $("#gia_tien_thue").css('display', '');
            }
        });


        populateCities('city', 'state');
    });
</script>
<?php include_once 'footer.ctp'; ?>