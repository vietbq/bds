<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$config['version'] = '1.0';
$base_folder = '@' . str_replace(APP_DIR . '/' . WEBROOT_DIR . '/' . 'index.php', '', $_SERVER['PHP_SELF']);
$base_folder = str_replace('@/', '', $base_folder);
define('BASE_URL', Router::url('/', true) . $base_folder);
$config['stamp_dir'] = WWW_ROOT . 'uploads/stamps/';
$config['stamp_url'] = BASE_URL . 'uploads/stamps/';
$config['image_dir'] = WWW_ROOT . 'uploads/images/';
$config['image_url'] = BASE_URL . 'uploads/images/';

$config['left_menu'] = array(
    array(
        'icon' => 'fa fa-user',
        'title' => 'Quản lý người dùng (2)',
        'url' => false,
        'childrens' => array(
            array(
                'icon' => 'fa fa-user',
                'title' => 'Danh sách người dùng',
                'url' => 'user/'
            ),
            array(
                'icon' => 'fa fa-comments',
                'title' => 'Đăng ký người dùng',
                'url' => 'user/add'
            ),
        )
    ),
    array(
        'icon' => 'fa fa-file-text-o',
        'title' => 'Quản lý bài đăng (2)',
        'url' => false,
        'childrens' => array(
            array(
                'icon' => 'fa fa-volume-up',
                'title' => 'Danh sách bài đăng',
                'url' => 'post/'
            ),
            array(
                'icon' => 'fa fa-volume-up',
                'title' => 'Thêm bài đăng',
                'url' => 'post/createPost'
            )
        )
    ),
    array(
        'icon' => 'fa fa-file-text-o',
        'title' => 'Quản lý tin tức (2)',
        'url' => false,
        'childrens' => array(
            array(
                'icon' => 'fa fa-volume-up',
                'title' => 'Danh sách bài đăng',
                'url' => 'adminnews/'
            ),
            array(
                'icon' => 'fa fa-volume-up',
                'title' => 'Thêm bài đăng',
                'url' => 'adminnews/add'
            )
        )
    ),
    array(
        'icon' => 'fa fa-file-text-o',
        'title' => 'Master Data (2)',
        'url' => false,
        'childrens' => array(
            array(
                'icon' => 'fa fa-volume-up',
                'title' => 'Type',
                'url' => ''
            ),
            array(
                'icon' => 'fa fa-volume-up',
                'title' => 'AAAAAA',
                'url' => ''
            )
        )
    ),
);
$config['navbar_menu_bds'] = array(
    array(
        'icon' => 'glyphicon glyphicon-home',
        'title' => '',
        'class' => '',
        'url' => 'bdspost/index',
        'childrens' => FALSE
    ),
    array(
        'icon' => '',
        'title' => 'BDS bán',
        'class' => 'dropdown',
        'url' => 'bdspost/list_post?bds-type-name=1',
        'childrens' => array(
            array(
                'icon' => '',
                'title' => 'Bán căn hộ chung cư',
                'url' => 'bdspost/list_post?bds-type-name=1&filter[type_item_id]=1'
            ),
            array(
                'icon' => '',
                'title' => 'Bán nhà riêng',
                'url' => 'bdspost/list_post?bds-type-name=1&filter[type_item_id]=2'
            ),
            array(
                'icon' => '',
                'title' => 'Bán nhà biệt thự, liền kề',
                'url' => 'bdspost/list_post?bds-type-name=1&filter[type_item_id]=3'
            ),
            array(
                'icon' => '',
                'title' => 'Bán nhà mặt phố',
                'url' => 'bdspost/list_post?bds-type-name=1&filter[type_item_id]=4'
            ),
            array(
                'icon' => '',
                'title' => 'Bán đất nền dự án',
                'url' => 'bdspost/list_post?bds-type-name=1&filter[type_item_id]=5'
            ),
            array(
                'icon' => '',
                'title' => 'Bán đất',
                'url' => 'bdspost/list_post?bds-type-name=1&filter[type_item_id]=6'
            ),
            array(
                'icon' => '',
                'title' => 'Bán trang trại, khu nghỉ dưỡng',
                'url' => 'bdspost/list_post?bds-type-name=1&filter[type_item_id]=9'
            ),
            array(
                'icon' => '',
                'title' => 'Bán kho, nhà xưởng',
                'url' => 'bdspost/list_post?bds-type-name=1&filter[type_item_id]=7'
            ),
            array(
                'icon' => '',
                'title' => 'bán loại bất động sản khác',
                'url' => 'bdspost/list_post?bds-type-name=1&filter[type_item_id]=8'
            ),
        )
    ),
    array(
        'icon' => '',
        'title' => 'BDS cho thuê',
        'class' => 'dropdown',
        'url' => 'bdspost/list_post?bds-type-name=2',
        'childrens' => array(
            array(
                'icon' => '',
                'title' => 'Cho thuê căn hộ chung cư',
                'url' => 'bdspost/list_post?bds-type-name=2&filter[type_item_id]=10'
            ),
            array(
                'icon' => '',
                'title' => 'Cho thuê nhà riêng',
                'url' => 'bdspost/list_post?bds-type-name=2&filter[type_item_id]=11'
            ),
            array(
                'icon' => '',
                'title' => 'Cho thuê nhà mặt phố',
                'url' => 'bdspost/list_post?bds-type-name=2&filter[type_item_id]=12'
            ),
            array(
                'icon' => '',
                'title' => 'Cho thuê nhà trọ, phòng trọ',
                'url' => 'bdspost/list_post?bds-type-name=2&filter[type_item_id]=13'
            ),
            array(
                'icon' => '',
                'title' => 'Cho thuê văn phòng',
                'url' => 'bdspost/list_post?bds-type-name=2&filter[type_item_id]=14'
            ),
            array(
                'icon' => '',
                'title' => 'Cho thuê cửa hàng, ki ốt',
                'url' => 'bdspost/list_post?bds-type-name=2&filter[type_item_id]=15'
            ),
            array(
                'icon' => '',
                'title' => 'Cho thuê kho, nhà xưởng, đất',
                'url' => 'bdspost/list_post?bds-type-name=2&filter[type_item_id]=16'
            ),
            array(
                'icon' => '',
                'title' => 'Cho thuê loại bất động sản khác',
                'url' => 'bdspost/list_post?bds-type-name=2&filter[type_item_id]=17'
            ),
        )
    ),
    array(
        'icon' => '',
        'title' => 'Tin tức - Sự kiện',
        'class' => 'dropdown',
        'url' => 'news/index?type_news=1',
        'childrens' => array(
            array(
                'icon' => '',
                'title' => 'Thị trường - Dự án',
                'url' => 'news/index?type_news=1&item_news=1'
            ),
            array(
                'icon' => '',
                'title' => 'Chính sách - Quy hoạch',
                'url' => 'news/index?type_news=1&item_news=2'
            ),
            array(
                'icon' => '',
                'title' => 'Tài chính BĐS',
                'url' => 'news/index?type_news=1&item_news=3'
            ),
            array(
                'icon' => '',
                'title' => 'Tin thế giới',
                'url' => 'news/index?type_news=1&item_news=4'
            ),
        )
    ),
    array(
        'icon' => '',
        'title' => 'Góc kiến trúc',
        'class' => 'dropdown',
        'url' => 'news/index?type_news=2',
        'childrens' => array(
            array(
                'icon' => '',
                'title' => 'Thiết kế - Xây dựng',
                'url' => 'news/index?type_news=2&item_news=1'
            ),
            array(
                'icon' => '',
                'title' => 'Khám phá kiến trúc',
                'url' => 'news/index?type_news=2&item_news=2'
            ),
        )
    ),
    array(
        'icon' => '',
        'title' => 'Nhà đẹp',
        'class' => 'dropdown',
        'url' => 'news/index?type_news=3',
        'childrens' => array(
            array(
                'icon' => '',
                'title' => 'Bài trí nhà đẹp',
                'url' => 'news/index?type_news=3&item_news=1'
            ),
            array(
                'icon' => '',
                'title' => 'Không gian nhà đẹp',
                'url' => 'news/index?type_news=3&item_news=2'
            ),
        )
    ),
//    array(
//        'icon' => '',
//        'title' => 'Phong thủy nhà ở',
//        'class' => '',
//        'url' => false,
//        'childrens' => FALSE
//    ),
    array(
        'icon' => '',
        'title' => 'Tư vấn',
        'class' => 'dropdown',
        'url' => 'news/index?type_news=4',
        'childrens' => array(
            array(
                'icon' => '',
                'title' => 'Pháp lý nhà đất',
                'url' => 'news/index?type_news=4&item_news=1'
            ),
            array(
                'icon' => '',
                'title' => 'Kinh nghiệm mua bán BĐS',
                'url' => 'news/index?type_news=4&item_news=2'
            ),
        )
    ),
    array(
        'icon' => '',
        'title' => 'Dự án',
        'class' => 'dropdown',
        'url' => 'news/index?type_news=5',
        'childrens' => array(
            array(
                'icon' => '',
                'title' => 'Khu chung cư - Đô thị mới',
                'url' => 'news/index?type_news=5&item_news=1'
            ),
            array(
                'icon' => '',
                'title' => 'Khu phức hợp',
                'url' => 'news/index?type_news=5&item_news=2'
            ),
            array(
                'icon' => '',
                'title' => 'Khu du lịch - nghỉ dưỡng',
                'url' => 'news/index?type_news=5&item_news=3'
            ),
            array(
                'icon' => '',
                'title' => 'Khu công nghiệp',
                'url' => 'news/index?type_news=5&item_news=4'
            ),
            array(
                'icon' => '',
                'title' => 'Dự án khác',
                'url' => 'news/index?type_news=5&item_news=5'
            ),
        )
    ),
    array(
        'icon' => '',
        'title' => 'Sàn giao dịch',
        'class' => '',
        'url' => 'news/index?type_news=6',
        'childrens' => FALSE
    ),
    array(
        'icon' => '',
        'title' => 'Đăng tin',
        'class' => '',
        'url' => 'bdspost/create_post',
        'childrens' => FALSE
    ),
);
$config['money_unit_sell'] = array(
    '1' => array(
        'title' => 'Triệu',
        'area' => 0,
        'rate' => 1
    ),
    '2' => array(
        'title' => 'Tỷ',
        'area' => 0,
        'rate' => 1000
    ),
    '3' => array(
        'title' => 'Trăm nghìn/m²',
        'area' => 1,
        'rate' => 0.1
    ),
    '4' => array(
        'title' => 'Triêu/m²',
        'area' => 1,
        'rate' => 1
    ),
    '5' => array(
        'title' => 'Thỏa thuận',
        'area' => 0,
        'rate' => 0
    ),
);
$config['money_unit_lease'] = array(
    '1' => array(
        'title' => 'Trăm ngìn/tháng',
        'area' => 0,
        'rate' => 0.1
    ),
    '2' => array(
        'title' => 'Triệu/tháng',
        'area' => 0,
        'rate' => 1
    ),
    '3' => array(
        'title' => 'Trăm nghìn/m²/tháng',
        'area' => 1,
        'rate' => 0.1
    ),
    '4' => array(
        'title' => 'Triêu/m²/tháng',
        'area' => 1,
        'rate' => 1
    ),
    '5' => array(
        'title' => 'Nghìn/m²/tháng',
        'area' => 1,
        'rate' => 0.001
    ),
    '6' => array(
        'title' => 'Thỏa Thuận',
        'area' => 0,
        'rate' => 0
    ),
);
$config['house_direction'] = array(
    '1' => 'Không XĐ',
    '2' => 'Đông',
    '3' => 'Tây',
    '4' => 'Nam',
    '5' => 'Bắc',
    '6' => 'Đông-Bắc',
    '7' => 'Tây-Bắc',
    '8' => 'Tây-Nam',
    '9' => 'Đông-Nam'
);
$config['house_money_lease'] = array(
    '1' => array(
        'title' => 'Thỏa thuận',
        'from' => '',
        'to' => ''
    ),
    '2' => array(
        'title' => '< 1 triệu',
        'from' => 0,
        'to' => 1
    ),
    '3' => array(
        'title' => '1-3 triệu',
        'from' => 1,
        'to' => 3
    ),
    '4' => array(
        'title' => '3-5 triệu',
        'from' => 3,
        'to' => 5
    ),
    '5' => array(
        'title' => '5-10 triệu',
        'from' => 5,
        'to' => 10
    ),
    '6' => array(
        'title' => '10-40 triệu',
        'from' => 10,
        'to' => 40
    ),
    '7' => array(
        'title' => '40-70 triệu',
        'from' => 40,
        'to' => 70
    ),
    '8' => array(
        'title' => '70- 100 triệu',
        'from' => 70,
        'to' => 100
    ),
    '9' => array(
        'title' => '> 100 triệu',
        'from' => 100,
        'to' => ''
    ),
);
$config['house_money_sell'] = array(
    '1' => array(
        'title' => 'Thỏa thuận',
        'from' => '',
        'to' => ''
    ),
    '2' => array(
        'title' => '< 500 triệu',
        'from' => 0,
        'to' => 500
    ),
    '3' => array(
        'title' => '500-800 triệu',
        'from' => 500,
        'to' => 800
    ),
    '4' => array(
        'title' => '800-1 tỷ',
        'from' => 800,
        'to' => 1000
    ),
    '5' => array(
        'title' => '1-2 tỷ',
        'from' => 1000,
        'to' => 2000
    ),
    '6' => array(
        'title' => '2-3 tỷ',
        'from' => 2000,
        'to' => 3000
    ),
    '7' => array(
        'title' => '3-5 tỷ',
        'from' => 3000,
        'to' => 5000
    ),
    '8' => array(
        'title' => '5-7 tỷ',
        'from' => 5000,
        'to' => 7000
    ),
    '9' => array(
        'title' => '7-10 tỷ',
        'from' => 7000,
        'to' => 10000
    ),
    '10' => array(
        'title' => '10-20 tỷ',
        'from' => 10000,
        'to' => 20000
    ),
    '11' => array(
        'title' => '20-30 tỷ',
        'from' => 20000,
        'to' => 30000
    ),
    '12' => array(
        'title' => '> 30 tỷ',
        'from' => 30000,
        'to' => ''
    ),
);

$config['house_area'] = array(
    '1' => array(
        'title' => 'Không XĐ',
        'from' => '',
        'to' => ''
    ),
    '2' => array(
        'title' => '<= 30 m²',
        'from' => 0,
        'to' => 30
    ),
    '3' => array(
        'title' => '30-50 m²',
        'from' => 30,
        'to' => 50
    ),
    '4' => array(
        'title' => '50-80 m²',
        'from' => 50,
        'to' => 80
    ),
    '5' => array(
        'title' => '80-100 m²',
        'from' => 80,
        'to' => 100
    ),
    '6' => array(
        'title' => '100-150 m²',
        'from' => 100,
        'to' => 150
    ),
    '7' => array(
        'title' => '150-200 m²',
        'from' => 150,
        'to' => 200
    ),
    '8' => array(
        'title' => '200-250 m²',
        'from' => 200,
        'to' => 250
    ),
    '9' => array(
        'title' => '250-300 m²',
        'from' => 250,
        'to' => 300
    ),
    '10' => array(
        'title' => '300-500 m²',
        'from' => 300,
        'to' => 500
    ),
    '11' => array(
        'title' => '>= 500 m²',
        'from' => 500,
        'to' => ''
    ),
);
$config['sort_list_by'] = array(
    '1' => 'Thông thường',
    '2' => 'Giá cao nhất',
    '3' => 'Giá thấp nhất',
    '4' => 'Diện tích lớn nhất',
    '5' => 'Diện tích nhỏ nhất',
);
$config['type_news'] = array(
    array(
        'type_id' => 1,
        'title' => 'Tin tức - Sự kiện',
        'url' => 'index?type_news=1',
        'childrens' => array(
            array(
                'type_item_id' => 1,
                'title' => 'Thị trường - Dự án',
                'url' => 'index?type_news=1&item_news=1'
            ),
            array(
                'type_item_id' => 2,
                'title' => 'Chính sách - Quy hoạch',
                'url' => 'index?type_news=1&item_news=2'
            ),
            array(
                'type_item_id' => 3,
                'title' => 'Tài chính BĐS',
                'url' => 'index?type_news=1&item_news=3'
            ),
            array(
                'type_item_id' => 4,
                'title' => 'Tin thế giới',
                'url' => 'index?type_news=1&item_news=4'
            ),
        )
    ),
    array(
        'type_id' => 2,
        'title' => 'Góc kiến trúc',
        'url' => 'index?type_news=2',
        'childrens' => array(
            array(
                'type_item_id' => 1,
                'title' => 'Thiết kế - Xây dựng',
                'url' => 'index?type_news=2&item_news=1'
            ),
            array(
                'type_item_id' => 2,
                'title' => 'Khám phá kiến trúc',
                'url' => 'index?type_news=2&item_news=2'
            ),
        )
    ),
    array(
        'type_id' => 3,
        'title' => 'Nhà đẹp',
        'url' => 'index?type_news=3',
        'childrens' => array(
            array(
                'type_item_id' => 1,
                'title' => 'Bài trí nhà đẹp',
                'url' => 'index?type_news=3&item_news=1'
            ),
            array(
                'type_item_id' => 2,
                'title' => 'Không gian nhà đẹp',
                'url' => 'index?type_news=3&item_news=1'
            ),
        )
    ),
    array(
        'type_id' => 4,
        'title' => 'Tư vấn',
        'url' => 'index?type_news=4',
        'childrens' => array(
            array(
                'type_item_id' => 1,
                'title' => 'Pháp lý nhà đất',
                'url' => 'index?type_news=4&item_news=1'
            ),
            array(
                'type_item_id' => 2,
                'title' => 'Kinh nghiệm mua bán BĐS',
                'url' => 'index?type_news=4&item_news=2'
            ),
        )
    ),
    array(
        'type_id' => 5,
        'title' => 'Dự án',
        'url' => 'news/index?type_news=5',
        'childrens' => array(
            array(
                'type_item_id' => 1,
                'title' => 'Khu chung cư - Đô thị mới',
                'url' => 'index?type_news=5&item_news=1'
            ),
            array(
                'type_item_id' => 2,
                'title' => 'Khu phức hợp',
                'url' => 'index?type_news=5&item_news=2'
            ),
            array(
                'type_item_id' => 3,
                'title' => 'Khu du lịch - nghỉ dưỡng',
                'url' => 'index?type_news=5&item_news=3'
            ),
            array(
                'type_item_id' => 4,
                'title' => 'Khu công nghiệp',
                'url' => 'index?type_news=5&item_news=4'
            ),
            array(
                'type_item_id' => 5,
                'title' => 'Dự án khác',
                'url' => 'index?type_news=5&item_news=5'
            ),
        )
    ),
    array(
        'type_id' => 6,
        'title' => 'Sàn giao dịch',
        'url' => 'index?type_news=6',
        'childrens' => ''
    ),
);

$config['user_profile_menu'] = array(
    array(
        'url' => 'user/userpost',
        'title' => 'Quản lý tin rao bán/cho thuê'
    ),
    array(
        'url' => 'bdspost/create_post',
        'title' => 'Đăng tin rao bán/cho thuê'
    ),
    array(
        'url' => 'user/savepost',
        'title' => 'Quản lý tin đã lưu'
    ),
    array(
        'url' => 'user/profile',
        'title' => 'Thay đổi thông tin cá nhân'
    ),
    array(
        'url' => 'user/changepass',
        'title' => 'Thay đổi mật khẩu'
    ),
    array(
        'url' => 'user/logout',
        'title' => 'Đăng xuất'
    ),
);
