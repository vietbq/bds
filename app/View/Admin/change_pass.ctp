<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Admin change password</title>
        <?php
        echo $this->Html->css(array('login', 'bootstrap'));
        echo $this->Html->script(array('jquery-2.1.1', 'jquery.validate.min'));
        ?>
    </head>

    <body>
        <div class="container" id="change_pass_page">
            <h1 style="text-align: center">Change password</h1>
            <form role="form" class="admin_form" id="change_pass_form" method="post" action="<?php echo Router::url(array('controller' => 'Admin', 'action' => 'changePass')); ?>" >
                <div class="form-group">
                    <label for="exampleInputPassword1">Current password</label>
                    <input type="password" class="form-control password"  name="current_password" placeholder="Current Password" />
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">New password</label>
                    <input type="password" class="form-control password"  name="new_password" id="new_password" placeholder="New Password" />
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm new password</label>
                    <input type="password" class="form-control password"  name="confirm_new_password" placeholder="Confirm New Password" />
                </div>
                <div class="admin_button">
                    <button type="submit" class="btn btn-info change_submit" name="register_submit">Save change</button>
                    <button type="reset" class="btn btn-info change_reset">Cancel</button>
                </div>

            </form>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                /*実行したい処理*/

                $("#change_pass_form").validate({
// Specify the validation rules
                    rules: {
                        current_password: {
                            required: true,
                            minlength: 6
                        },
                        new_password: {
                            required: true,
                            minlength: 6
                        },
                        confirm_new_password: {
                            required: true,
                            minlength: 6,
                            equalTo: "#new_password"
                        }
                    },
                    // Specify the validation error messages
                    messages: {
                        current_password: {
                            required: "Please enter current password",
                            minlength: "Your password must be at least 6 characters long"
                        },
                        new_password: {
                            required: "Please enter a new password",
                            minlength: "Your password must be at least 6 characters long"
                        },
                        confirm_new_password: {
                            required: "Please confirm new  password",
                            minlength: "Your password must be at least 6 characters long",
                            equalTo: "Confirm password do not match with the password"
                        }
                    },
                    submitHandler: function(form) {
                        form.submit();
                    }
                });
            });
        </script>
    </body>
</html>
