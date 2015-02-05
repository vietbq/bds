<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="box">
    <div class="box-content">
        <?php echo $this->Session->flash(); ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Thumb</th>
                    <th>Content</th>
                    <th>Actions</th>
                </tr>
            </thead>   
            <tbody>
                <?php foreach ($Posts as $Post){ ?>
                <tr>
                    <td><?php echo $Post['Post']['id'] ?></td>
                    <td class="center"><img class="img-thumbnail" style="max-width: none;height: 150px;width: 150px;"src="<?php if($Post['Image']['url']==''){ echo 'img/not-image.png';  }else{ echo 'uploads/images/'.$Post['Image']['url']; } ?>"></td>
                    <td class="center">
                        <b style="color: #0073ea; font-size: medium"><?php echo $Post['Post']['title'] ?></b>
                        <p style="color: #0a0">
                            <?php 
                            echo $Post['Post']['money']; 
                            if($Post['Post']['money']==0){
                                echo 'Tỷ VNĐ';
                            }else{
                                echo 'Triệu VNĐ';
                            }
                            ?>
                        </p>
                        <i class="fa fa-clock-o">
                            <?php echo date('Y/M/d', $Post['Post']['created_datetime']) ?>
                        </i>
                        <p style="margin-top: 5px">
                            <?php echo substr($Post['Post']['description'], 0,300).'...' ?>
                        </p>
                        <p>Diện tích: 
                            <?php 
                            if($Post['Post']['area']!=''){
                                echo '<font color = "blue" > '.$Post['Post']['area'].' m²' .'</font> ';
                            }else{
                                echo '<font color = "blue" > Không xác định</font> ';
                            }
                            ?>
                            &nbsp; Loai: 
                            <?php 
                            if($Post['Post']['type_id']==1){
                                echo '<font color = "blue" > Nhà đất bán</font> ';
                            }else{
                                echo '<font color = "blue" > Nhà đất cho thuê</font> ';
                            }
                            ?>
                        </p>
                        <p>Quận/Huyện: 
                            <?php
                            echo '<font color = "blue" > '.$Post['Post']['state'].'-'.$Post['Post']['state'].'</font>';
                            ?>

                        </p>
                    </td>
                    <td style="padding: 4px; text-align: center;">
                        <a class="btn btn-info btn-sm" href="">
                            <i class="fa fa-search-plus" title="Detail" style="width: 13px"></i>                                            
                        </a>
                        <a class="btn btn-warning btn-sm" href="">
                            <i style="width: 13px" class="fa fa-edit " title="Edit"></i>                                            
                        </a>
                        <a class="btn btn-danger btn-sm btn-delete-user" rel-user="2">
                            <i class="fa fa-trash-o" style="width: 13px" title="Delete"></i> 
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>