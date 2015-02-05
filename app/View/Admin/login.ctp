<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Admin login</title>
        <?php
        echo $this->Html->css(array('login', 'bootstrap'));
        echo $this->Html->script(array('jquery-2.1.1', 'jquery.validate.min'));
        ?>
    </head>

    <body>
        <div class="container" id="login_page">
            <h1 style="text-align: center">Admin login</h1>
            <?php
            if (isset($error)) {
                ?>
                <h3 style="text-align: center; color: red"><?php echo $error; ?></h3>
                <?php
            }
            ?>
            <form role="form" class="admin_form" id="login_form" method="post" action="<?php echo Router::url(array('controller' => 'Admin', 'action' => 'login')); ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control  username" name="username" placeholder="Input username" />
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control password"  name="password" placeholder="Input Password" />
                </div>
                <div class="admin_button">
                    <button type="submit" class="btn btn-info login_submit" name="login_submit">Login</button>
                    <button type="reset" class="btn btn-info login_reset">Reset</button>
                </div>

            </form>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                /*実行したい処理*/

                $("#login_form").validate({
                    // Specify the validation rules
                    rules: {
                        username: {
                            required: true
                        },
                        password: {
                            required: true,
                            minlength: 6
                        }
                    },
                    // Specify the validation error messages
                    messages: {
                        username: {
                            required: "Please enter the email"
                        },
                        password: {
                            required: "Please enter a password",
                            minlength: "Your password must be at least 6 characters long"
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
