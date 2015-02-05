<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="/img/home/logo2014vn.jpg" rel="shortcut icon" type="image/x-icon">
        <meta http-equiv="audience" content="general">
        <meta name="resource-type" content="document">
        <meta name="abstract" content="Thông tin nhà đất Việt Nam">
        <meta name="classification" content="Bất động sản Việt Nam">
        <meta name="area" content="Nhà đất và bất động sản">
        <meta name="placename" content="Việt Nam">
        <meta name="author" content="Batdongsan.com.vn">
        <meta name="copyright" content="©2014 Batdongsan.com.vn">
        <meta name="owner" content="Batdongsan.com.vn">
        <meta name="generator" content="Bui Van Quang">
        <meta name="distribution" content="Global">
        <meta name="keywords" content="Kênh, thông, tin, số, 1, về, bất, động, sản">
        <meta name="description" content="Kênh thông tin số 1 về bất động sản tại Việt Nam:
              mua bán nhà đất, cho thuê nhà đất, văn phòng, căn hộ, biệt thự, chung cư.
              Các lĩnh vực liên quan đến bất động sản: xây dựng, nội thất, kiến trúc,
              ngoại thất, phong thuỷ, luật pháp, tư vấn.">
        <meta name="revisit-after" content="1 days">
        <meta name="robots" content="follow">
        <title>
            <?php
            if (isset($title))
                echo $title;
            else
                echo "Bat dong san ";
            ?>
        </title>
        <?php
        //Load css file
        echo $this->Html->css(array('style', 'bootstrap'));

        //Load script file
        echo $this->Html->script(array('jquery-2.1.1', 'select-option','jquery.validate.min'));
        ?>
    </head>
    <body>
        <div class="wrapContent" id="wrapContent">
            <div id="header">
                <div id="headerLogo">
                    <?php echo $this->Html->image("home/logo2014vn.jpg"); ?>
                </div><!-- end div#id headerLogo -->
                <div id="headerInfo">
                    <ul class="headerInfo">
                        <li class="slogan">
                            The beginning of Success
                        </li>
                        
                        <li>
                            Công Ty TNHH Dịch Vụ Tư Vấn và Đầu Tư Hợp Phát
                        </li>
                        <li>
                            Tầng 2, Nhà số 2 ngõ 62, Đường Văn Cao, Liễu Giai, Ba Đình, Hà Nội
                        </li>
                        <li>
                            Mobile : 0987.111.881 – 0904.827.148
                        </li>
                        <li><a href="https://facebook.com/buiquangbk90" style="text-decoration:none"><?php echo $this->Html->image('facebook.png'); ?> https://facebook.com/buiquangbk90</a></li>
                        <li><a rel="nofollow"  href="ymsgr:sendim?bds_hotro&m=Xin chao!"><?php echo $this->Html->image('yahoo.png'); ?></a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a rel="nofollow" href="skype:cskh.batdongsan?chat"><?php echo $this->Html->image('skype.png'); ?></a> </li>
                    </ul>
                </div><!-- end div#id headerInfo -->

            </div><!-- end div#id header -->
            <div id="menuHeader">
                <div id="leftMenu"></div>
                <div id="mainMenu">
                    <div class="ihome">
                        <a href="<?php echo Router::url(array('controller' => 'Home', 'action' => 'index')); ?>">
                            <?php echo $this->Html->image('home/home-icon.gif'); ?> 
                        </a>
                    </div>
                    <ul class="dropdown-navigative-menu">
                        <li class="level0">
                            <a class="menuLink" href="<?php echo Router::url(array('controller' => 'Home', 'action' => 'index')); ?>">
                                Giới thiệu
                            </a>
                        </li>
                        <li class="level0">
                            <a class="menuLink" href="<?php echo Router::url(array('controller' => 'Home', 'action' => 'index')); ?>">
                                Nhà đất bán
                            </a>
                            <ul>
                                <li class="level1">
                                    <a class="menuLink" href="<?php echo Router::url(array('controller' => 'Home', 'action' => 'ban_chung_cu')); ?>">
                                        Bán căn hộ chung cư
                                    </a>
                                </li>
                                <li class="level1">
                                    <a class="menuLink" href="<?php echo Router::url(array('controller' => 'Home', 'action' => 'ban_nha_rieng')); ?>">
                                        Bán nhà riêng , biệt thự
                                    </a>
                                </li>
                                <li class="level1">
                                    <a class="menuLink" href="<?php echo Router::url(array('controller' => 'Home', 'action' => 'ban_dat_nen')); ?>">
                                        Bán đất nền , mặt bằng
                                    </a>
                                </li>
                                <li class="level1">
                                    <a class="menuLink" href="<?php echo Router::url(array('controller' => 'Home', 'action' => 'ban_khac')); ?>">
                                        Loại hình khác
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="level0">
                            <a class="menuLink" href="<?php echo Router::url(array('controller' => 'Home', 'action' => 'index')); ?>">
                                Nhà đất cho thuê
                            </a>
                            <ul>
                                <li class="level1">
                                    <a class="menuLink" href="<?php echo Router::url(array('controller' => 'Home', 'action' => 'cho_thue_van_phong')); ?>">
                                        Cho thuê văn phòng , chung cư , căn hộ
                                    </a>
                                </li>
                                <li class="level1">
                                    <a class="menuLink" href="<?php echo Router::url(array('controller' => 'Home', 'action' => 'cho_thue_nha_rieng')); ?>">
                                        Cho thuê nhà riêng , biệt thự
                                    </a>
                                </li>
                                <li class="level1">
                                    <a class="menuLink" href="<?php echo Router::url(array('controller' => 'Home', 'action' => 'cho_thue_dat_nen')); ?>">
                                        Cho thuê đất nền , mặt bằng
                                    </a>
                                </li>
                                <li class="level1">
                                    <a class="menuLink" href="<?php echo Router::url(array('controller' => 'Home', 'action' => 'cho_thue_khac')); ?>">
                                        Loại hình khác
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="level0">
                            <a class="menuLink" href="<?php echo Router::url(array('controller' => 'Home', 'action' => 'index')); ?>">
                                Tin tức - Bài viết
                            </a>
                        </li>
                        <li class="level0">
                            <a class="menuLink" href="<?php echo Router::url(array('controller' => 'Home', 'action' => 'lien_he')); ?>">
                                Liên hệ - Hỏi đáp
                            </a>
                        </li>
                    </ul>
                </div>

            </div><!-- end div#id menuHeader -->
            <div id="searchMenu">
                <form class="searchMenuForm" method="post" action="<?php echo Router::url(array('controller' => 'Home', 'action' => 'search')); ?>">
                    <input type="text" name="searchContent" id="searchContent" placeholder="Nhập vào từ khóa tìm kiếm"/>
                    <select name="searchType" id="searchType">
                        <option value="0">Nhà đất bán</option>
                        <option value="1">Nhà đất cho thuê</option>
                        <option value="2">Tin tức </option>
                    </select>
                    <input type="submit" name="searchSubmit" value="Tìm kiếm" class="btn searchSubmit"/>
                </form>
            </div>

            <!--
                    </div>
                </body>
            </html>-->
