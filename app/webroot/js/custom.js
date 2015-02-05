/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$("a.add-image-post-by-user").click(function() {
    var item_default = {
        index: $(".image-add-class", "#wrap-image-post-input-file").length
    };
    if (item_default.index == 6) {
        $('.modal-confirm').modal();
        return false;
    }
    var html = new EJS({url: 'template/add_image.ejs'}).render(item_default);
    $("#wrap-image-post-input-file").append(html);
});

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

    populateCities('city', 'state', 'town');
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
    if (($("form[name=" + 'createNewPostbyUser' + "]")) || ($("form[name=" + 'frmBdsRightSearch' + "]"))) {
        radioTypeChecked('bds-type-name');
    }
    if ($("form[name=" + 'search-advance-index' + "]")) {
        loadTypeSearchIndex($("#bds-search-type-item-id"), $("#bds-search-money-id"));
    }
    jssor_slider1_starter('slider1_container');

});
$("#frm-createNewPostbyUser").on('change', "input.image-post-input-file", function() {
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
            url: 'bdspost/create_post',
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
            url: 'bdspost/image_upload',
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


$("#frm-createNewPostbyUser").on('change', "#type_bat_dong_san", function() {
    var type = $('select#type_bat_dong_san').val();
    $("#loai-hinh-nha-dat-id").find('option').remove();
    loadOptionType(type, $("#loai-hinh-nha-dat-id"), null, null);
});
$('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
});
$("#frm-createNewPostbyUser").on('click', ".del-image-post-by-user", function() {
    $(this).parent().parent().fadeTo(400, 0, function() {
        $(this).remove();
    });
});
$("#frm-bdsSearchIndexId").on('click', "a.bds-search-type-class", function() {
    var type = $(this).attr('rel');
    var current = $(this);
    $("#bds-search-type-item-id").find('option').remove();
    $("#bds-search-money-id").find('option').remove();
    $(this).parent().find('a.bds-search-type-class').removeClass('active');
    current.addClass('active');
    loadOptionType(type, $("#bds-search-type-item-id"), null, $("#bds-search-money-id"));
    $("#bds-type-search-id").val(type);
});
$("#frm-registerUser").on('click', "a.refresh-capcha", function() {
    $('#img-capcha').removeAttr('src');
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'capcha/CapchaImage.php',
        data: {type: 1}
    }).done(function(data) {
        console.log('ok');
    }).fail(function(jqXHR, textStatus) {
        console.log('fail');
    });
    $('#img-capcha').attr('src', 'capcha/CapchaImage.php');

});
$("#frm-createNewPostbyUser").on('click', "a.refresh-capcha", function() {
    $('#img-capcha').removeAttr('src');
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'capcha/CapchaImage.php',
        data: {type: 1}
    }).done(function(data) {
        console.log('ok');
    }).fail(function(jqXHR, textStatus) {
        console.log('fail');
    });
    $('#img-capcha').attr('src', 'capcha/CapchaImage.php');

});
function validateRigisterForm() {
    var x = document.forms["registerUser"]["captcha_register"].value;
    var pass = document.forms["registerUser"]["user[User][password]"].value;
    var verify_pass = document.forms["registerUser"]["confirm_password"].value;
    var ok = 0;
    if (pass != verify_pass) {
        $('#error-message').text('Password xác nhận chưa chính xác!');
        $('.modal-confirm').modal();
        return false;
    } else {
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: 'user/check_captcha',
            data: {captcha: x}
        }).done(function(data) {
            ok = 1;
        }).fail(function(jqXHR, textStatus) {
            $('#error-message').text('Nhập mã đăng ký thành viên chưa chính xác!');
            $('.modal-confirm').modal();
        });
        if (ok == 0) {
            return false;
        }
    }
}
function validatePostForm() {
    var x = document.forms["createNewPostbyUser"]["captcha_post"].value;
    var ok = 0;
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'user/check_captcha',
        data: {captcha: x}
    }).done(function(data) {
        ok = 1;
    }).fail(function(jqXHR, textStatus) {
        $('#error-message-post').text('Nhập mã an toàn chưa chính xác!');
        $('.modal-confirm').modal();
        ok = 0;
    });
    if (ok == 0) {
        return false;
    }
}
//$("#frm-createNewPostbyUser").on('change', "#state", function() {
//    populateTowns('city', 'state', 'town');
//    
//});
function radioTypeChecked(radioName) {
    var type = $("input[name=" + radioName + "]").val();
    $("#loai-hinh-nha-dat-id").find('option').remove();
    $("#money_unit-id").find('option').remove();
    loadOptionType(type, $("#loai-hinh-nha-dat-id"), $("#money_unit-id"), $("#bds-search-right-money-id"));
}
function changeType(myRadio) {
    var type = myRadio.value;
    $("#loai-hinh-nha-dat-id").find('option').remove();
    $("#money_unit-id").find('option').remove();
    loadOptionType(type, $("#loai-hinh-nha-dat-id"), $("#money_unit-id"), null);
}
function loadTypeSearchIndex(typeItemID, moneyAroundId) {
    loadOptionType(1, typeItemID, null, moneyAroundId);
}
function loadOptionType(type, typeItemId, moneyUnitId, moneyAroundId) {
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'loaddata/load_type_item',
        data: {type: type}
    }).done(function(data) {
        data_Arr = data;
        var line = '';
        $.each(data_Arr, function(key, value) {
            if (key == 'type_item') {
                if (typeItemId) {
                    typeItemId.find('option').remove();
                    line = "<option value=" + -1 + ">" + '--Loại bất động sản--' + "</option>";
                    typeItemId.append(line);
                    type_item = value;
                    $.each(type_item, function(ikey, ivalue) {
                        line = "<option value=" + ivalue.TypeItem.type_item_id + ">" + ivalue.TypeItem.type_item_name + "</option>";
                        typeItemId.append(line);
                    });
                }
            } else {
                if (key == 'money_unit') {
                    if (moneyUnitId) {
                        moneyUnitId.find('option').remove();
                        money_unit = value;
                        moneyUnitId.append("<option value='-1'>" + "-- Chọn đơn vị --" + "</option>");
                        $.each(money_unit, function(mkey, mvalue) {
                            //console.log(mvalue);
                            line = "<option value=" + mkey + ">" + mvalue.title + "</option>";
                            moneyUnitId.append(line);
                        });
                    }
                } else {
                    if (key == 'house_money_search') {
                        money = value;
                        if (moneyAroundId) {
                            moneyAroundId.find('option').remove();
                            moneyAroundId.append("<option value='-1'>" + "-- Chọn mức giá --" + "</option>");
                            $.each(money, function(mkey, mvalue) {
                                //console.log(mvalue);
                                line = "<option value=" + mkey + ">" + mvalue.title + "</option>";
                                moneyAroundId.append(line);
                            });
                        }
                    }
                }
            }
        });
    }).fail(function(jqXHR, textStatus) {
        console.log('fail');
    });
}
function printPost() {
    window.print();
}