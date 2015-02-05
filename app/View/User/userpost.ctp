<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="container">
    <hr>
    <div class="container-fluid">
        <?php echo $this->element('user_profile_menu');?>
        <div class="col-md-9 col-xs-9" style="padding-left: 0px">
            <div class="container-fluid">
                <legend  style="font-size: 16px">Quản lý tin rao bán/cho thuê</legend>
                <form class="form-horizontal register-user" role="form" method="post" name="registerUser" id="frm-registerUser" onsubmit="validateRigisterForm()">
                    <?php echo $this->Session->flash(); ?>
                    <table class="table table-condensed">
                        <tr>
                            <td>ID</td>
                            <td>Nội dung</td>
                            <td></td>
                        </tr>
                        <tbody>
                            <?php
                                foreach ($Posts as $Post){
                            ?>
                            <tr>
                                <td><?php echo $Post['Post']['id'] ?></td>
                                <td>
                                    <a href="bdspost/detail/<?php echo $Post['Post']['id'] ?>"><b> <?php echo $Post['Post']['title'] ?> </b></a><br>
                                    <?php echo $Post['Post']['description']; ?>
                                </td>
                                <td style="width: 50px">
                                    <div class="btn-group">
                                        <a><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a><i class="glyphicon glyphicon-trash" style="color: red"></i></a>
                                        <a></a>
                                    </div>
                                </td>
                            </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                    <!--end form-->
                </form>
            </div>
        </div>
    </div>
</div>