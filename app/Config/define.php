<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class BDSConst {

    //Define error message

    const ACCOUNT_NOT_EXIST = 'Sorry , account is not exist ! Please try again !';
    const USERNAME_EXIST_ERROR = 'Sorry , this username has been used . Please use other username !';
    const EMAIL_EXIST_ERROR = 'Sorry , this email has been used. Please use other email !';
    const PASSWORD_DOES_NOT_MATCH_ERROR = 'Sorry , your password is not match ! Please check and try again !';
    const COMMON_ERROR = 'Sorry ! An error has been occured. Please try again !';
    //Define static value
    const SESSION_LOGIN_KEY = 'admin_username';
    const NHA_DAT_BAN = 0;
    const NHA_DAT_CHO_THUE = 1;
    const BAN_CHUNG_CU = 0;
    const BAN_NHA_RIENG = 1;
    const BAN_DAT_NEN = 2;
    const BAN_KHAC = 3;
    const CHO_THUE_VAN_PHONG = 0;
    const CHO_THUE_NHA_RIENG = 1;
    const CHO_THUE_DAT_NEN = 2;
    const CHO_THUE_KHAC = 3;

    public static $_loai_bsd = array(
        0 => 'Nhà đất bán  ',
        1 => 'Nhà đất cho thuê'
    );
    public static $_loai_hinh_bds = array(
        0
    );
    public static $_money_unit = array(
        0 => 'Tỉ',
        1 => 'Triệu',
        2 => 'Triệu/tháng',
        3 => 'Triệu/năm',
        4 => 'Trăm/tháng'
    );

}

define('VERSION', '1.0');
define('BASE_PATH', dirname(dirname(dirname(__FILE__))) . '/');
define('APP_PATH', BASE_PATH . 'app/');
define('VENDOR_PATH', APP_PATH . 'Vendor/');
define('MODEL_PATH', APP_PATH . 'Model/');
define('VIEW_PATH', APP_PATH . 'View/');
define('LIB_PATH', APP_PATH . 'Lib/');
define('PLUGIN_PATH', APP_PATH . 'Plugin/');
define('CONFIG_PATH', dirname(__FILE__) . '/');
define('WEBROOT_PATH', getcwd() . '/');
define('LANG_PATH', LIB_PATH . 'lang/');
define('LOG_PATH', APP_PATH . 'log/');
define('DIR_NAME', basename(BASE_PATH));
define('DATA_PATH', APP_PATH . 'data/');
define('IMAGE_PATH', DATA_PATH . 'img/');

define('SESSION_USER_ID_LOGIN','session_user_id_login');
define('SESSION_USER_NAME_LOGIN','session_user_name_login');
define('SESSION_USER_EMAIL_LOGIN','session_user_email_login');
