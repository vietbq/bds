<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//                        $this->Html->addCrumb($type_news_arr[$type_news - 1]['childrens'][$item_news - 1]['title'], $type_news_arr[$type_news - 1]['childrens'][$item_news - 1]['url']);

?>
<div class="form-group">
    <ul class="breadcrumb" style="height: 35px">
        <?php 
        if(isset($type_id)){
            $type_news_arr = Configure::read('type_news');
            $this->Html->addCrumb($type_news_arr[$type_id - 1]['title'],$type_news_arr[$type_id - 1]['url']);
            if(isset($item_id)){
                $this->Html->addCrumb($type_news_arr[$type_id - 1]['childrens'][$item_id-1]['title'],$type_news_arr[$type_id - 1]['childrens'][$item_id-1]['url']);
            }
        }
        echo $this->Html->getCrumbs(' >> ', 'Trang chủ');
        ?>
    </ul><!--.breadcrumb-->
</div>
