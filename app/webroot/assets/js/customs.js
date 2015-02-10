var SUCCESS = '<i class="glyphicon glyphicon-ok" style="color: #36a9e1;"></i>&nbsp;&nbsp;成功';
var ERROR = '<i class="fa fa-exclamation-triangle" style="color: red;"></i>&nbsp;&nbsp;エラー';

$(document).ready(function() {
    $("#nha_dat_cho_thue").css('display', 'none');
    $('input[type=radio][name=optionsRadios]').change(function() {
        if (this.value == '0') {
            $("#nha_dat_ban").css('display', '');
            $("#nha_dat_cho_thue").css('display', 'none');
        }
        else if (this.value == '1') {
            $("#nha_dat_cho_thue").css('display', '');
            $("#nha_dat_ban").css('display', 'none');
        }
    });
    //auto size for textarea
    $("#description_area").elastic();

    populateCities('city', 'state');

    //validate form
    $(".create_post_form").validate({
        // Specify the validation rules
        rules: {
            title: {
                required: true
            },
            address: {
                required: true
            },
            description_area: {
                required: true
            }
        },
        // Specify the validation error messages
        messages: {
            title: {
                required: "Please enter the title for the post"
            },
            address: {
                required: "Please enter address for the post"
            },
            description_area: {
                required: "Please write something to description about the post"
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

});
$("#frm-createNewPost").on('change', "input.image-post-input-file", function() {
    Image_Post.upload_image($(this).parent().parent().parent());
});
var Common = new function() {
    this.notification = function(title, text, image) {
        if (text == '') {
            text = ' ';
        }
        Setting.unique_id_mess = $.gritter.add({
            title: title,
            text: text,
            image: image,
            sticky: false
        });
    };
    this.showLoading = function() {
        $('.page-loading').css('display', 'block');
    };

    this.closeLoading = function() {
        $('.page-loading').fadeOut('slow');
    };
    this.showPopup = function(data) {
        $.prompt(data, {
            show: "slideDown",
            top: "15%",
            buttons: {},
            opacity: 0.15,
            persistent: false,
            zIndex: 999
        });
        return false;
    };

    this.closePopup = function() {
        $('.jqibox').remove();
    };

    this.showValidation = function(formElement, validationErrors, prefix) {
        $('.error', formElement).hide().text('');
        $('.has-error', formElement).removeClass('has-error');
        for (var fieldName in validationErrors) {
            if (prefix) {
                $input = $("[name='" + prefix + "[" + fieldName + "]' ]", formElement);
            } else {
                $input = $("[name='" + fieldName + "']", formElement);
            }
            $input.parent().find('.error').text(validationErrors[fieldName]).show();
            $input.parent().addClass('has-error');
        }
        ;
    };
};

var Image_Post = new function() {
    this.save = function() {
        Common.showLoading();
        $('button[type=submit]', '#frm-createNewPost').attr('disabled', 'disabled');
        $.ajax({
            url: 'post/createPost',
            type: 'POST',
            dataType: 'json',
            data: $('#frm-createNewPost').serialize(),
            success: function(data) {
                $('button[type=submit]', '#frm-createNewPost').removeAttr('disabled');
                Common.closeLoading();
                if (data.code == 'OK')
                {
                    Common.notification(SUCCESS, data.message);
                    $('body,html').animate({scrollTop: 0}, 500);
                    Image_Post.loadStampFromData(data.data);
                }
                else
                {
                    Common.notification(ERROR, data.message);
                }
            }
        });
        return false;
    };
    this.upload_image = function($stamp) {
        $stamp.find('.error-image').text('');
        $.ajaxFileUpload({
            url: 'post/image_upload',
            secureuri: false,
            fileElementId: $stamp.find('input.image-post-input-file').attr('id'),
            dataType: "json",
            success: function(data, status) {

                if (status == 'success') {
                    if (data.code == 'OK') {	// upload success
//                        Common.notification(SUCCESS, data.message);
                        $stamp.find('img.stamp-image-display').attr('src', data.data.full_path);
                        $stamp.find('input.stamp-image').val(data.data.file_name);
                    } else {
                        $stamp.find('.error-image').text(data.message);
                    }
                }
                else
                {
                    $stamp.find('.error-image').text('Upload image has error !');
                }
            }
        });
    };
    this.refresh = function() {
        $(".stamp:visible", "#frm-stamps-list").each(function(index) {
            $(this).find("input.stamp-order").val(index);
        });
        $(".stamp-btn-up", "#frm-stamps-list").attr('disabled', false);
        $(".stamp-btn-up:visible:first", "#frm-stamps-list").attr('disabled', true);
        $(".stamp-btn-down", "#frm-stamps-list").attr('disabled', false);
        $(".stamp-btn-down:visible:last", "#frm-stamps-list").attr('disabled', true);
    };

    this.loadStampFromData = function(data)
    {
        $("#frm-stamps-list").html('');
        for (i = 0; i < data.length; i++) {
            data[i]['Stamp']['index'] = i;
            var html = new EJS({url: 'assets/template/stamp.ejs'}).render(data[i]['Stamp']);
            $("#frm-stamps-list").append(html);
        }
        this.refresh();
    };
};
$("a.del-image-post").click(function() {

    $(this).parent().parent().parent().fadeTo(400, 0, function() {
        $(this).remove();
    });

    return false;

});
$("#frm-createNewPost").on('change', "select#type_bat_dong_san", function() {
    var type = $('select#type_bat_dong_san').val();
    $("#loai-hinh-nha-dat-id").find('option').remove();
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'post/load_type_item',
        data: {type: type}
    }).done(function(data) {
        data_Arr = data;
        var line = '';
        $.each(data_Arr, function(key, value) {
            line = "<option value=" + value.TypeItem.type_item_id + ">" + value.TypeItem.type_item_name + "</option>";
            $("#loai-hinh-nha-dat-id").append(line);
        });

    }).fail(function(jqXHR, textStatus) {
        console.log('fail');
    });
});
function readURL(input) {
    if (input.files && input.files[0]) {
        if (input.files[0].size < 1000000) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#image-preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        } else {
            alert('The file size is too large !');
        }
    }
}