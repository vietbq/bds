<?php include_once 'header.ctp'; ?>
<div class="pageLienHe">
    <form  class="contact_form" role="form" method="post" action="<?php echo Router::url(array('controller' => 'Home', 'action' => 'lien_he')); ?>">
        <div class="form-group">
            <label>Tên <span class="require_notice"> (*) </span></label>
            <input type="text" class="form-control" name="name" placeholder="Họ tên " />
        </div>
        <div class="form-group">
            <label>E-mail <span class="require_notice"> (*) </span></label>
            <input type="text" class="form-control" name="email" placeholder="Địa chỉ e-mail " />
        </div>
        <div class="form-group">
            <label>Số điện thoại </label>
            <input type="text" class="form-control" name="mobile" placeholder="Số điện thoại " />
        </div>
        <div class="form-group">
            <label>Tiêu đề <span class="require_notice"> (*) </span></label>
            <input type="text" class="form-control" name="title" placeholder="Tiêu đề " />
        </div>
        <div class="form-group">
            <label>Nội dung liên hệ <span class="require_notice"> (*) </span></label>
            <textarea class="form-control name" id="contact_area" name="contact_area" rows="10" placeholder="Nội dung liên hệ"></textarea>
        </div>
        <input type="submit" class="btn btn-info" name="contact_submit" id="contact_submit" value="Gửi"/>
    </form>
    <div class="require_notice">Chú thích : (*)  Trường này không được bỏ trống</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        //validate form
        $(".contact_form").validate({
            // Specify the validation rules
            rules: {
                name: {
                    required: true
                },
                title: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                contact_area: {
                    required: true
                }
            },
            // Specify the validation error messages
            messages: {
                name: {
                    required: "Xin hãy điền tên của bạn"
                },
                title: {
                    required: "Xin hãy nhập tiêu đề liên hệ"
                },
                email: {
                    required: "Xin hãy nhập vào địa chỉ email của bạn",
                    email: 'Xin hãy sử dụng email thật'

                },
                contact_area: {
                    required: "Xin hãy viết nội dung liên hệ"
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
<?php include_once 'footer.ctp'; ?>