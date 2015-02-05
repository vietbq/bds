<?php

class GlobalVar {

    static function write($key, $val) {
        global ${'global_' . $key};
        ${'global_' . $key} = $val;
    }

    static function read($key) {
        global ${'global_' . $key};
        return ${'global_' . $key};
    }

    static function get_html_success($message) {
        return '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>' . $message . '</div>';
    }

    static function get_html_error($message) {
        return '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>' . $message . '</div>';
    }

}
