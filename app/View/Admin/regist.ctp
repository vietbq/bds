<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Regis a new account</title>
        <?php
        echo $this->Html->css(array('login', 'bootstrap'));
        echo $this->Html->script(array('jquery-2.1.1', 'jquery.validate.min'));
        ?>
    </head>
    <body>
        <div class="container" id="regist_page">
            <h1 style="text-align: center">Regist a new account</h1>
            <?php if (isset($error)) {
                ?>
                <h2 style="text-align: center ; color: red"><?php echo $error; ?></h2>
                <?php
            }
            ?>
            <form role="form" class="admin_form" id="regist_form" method="post" action="<?php echo Router::url(array('controller' => 'Admin', 'action' => 'regist')); ?>" >
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control username" name="username" placeholder="Input username" />
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control email" name="email" placeholder="Input email" />
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control password"  name="password" id="password" placeholder="Password" />
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control password"  name="confirm_password" placeholder="Confirm Password" />
                </div>
                <div class="admin_button">
                    <button type="submit" class="btn btn-info register_submit" name="register_submit">Regist</button>
                    <button type="reset" class="btn btn-info register_reset">Reset</button>
                </div>

            </form>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                /*実行したい処理*/

                $("#regist_form").validate({
// Specify the validation rules
                    rules: {
                        email: {
                            required: true,
                            email: true
                        },
                        username: {
                            required: true
                        },
                        password: {
                            required: true,
                            minlength: 6
                        },
                        confirm_password: {
                            required: true,
                            minlength: 6,
                            equalTo: "#password"
                        }
                    },
                    // Specify the validation error messages
                    messages: {
                        email: {
                            required: "Please enter the email",
                            email: "Please enter a valid email address"
                        },
                        username: {
                            required: "Please input username"
                        },
                        password: {
                            required: "Please enter a password",
                            minlength: "Your password must be at least 6 characters long"
                        },
                        confirm_password: {
                            required: "Please enter a password",
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
