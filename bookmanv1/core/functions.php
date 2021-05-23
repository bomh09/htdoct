<?php
include_once 'config.php';

$title = 'Page title';
$layout = DEFAULT_LAYOUT;

/**
 * gọi hàm ob_start để bắt đầu buffer
 * @param string $page_title tiêu đề trang
 * @param false $page_layout tên layout riêng cho page, nếu không dùng layout mặc định
 */
function start_content($page_title = '', $page_layout = false) {
    global $title, $layout;
    $title = $page_title;
    $layout = $page_layout == false ? DEFAULT_LAYOUT : $page_layout;
    ob_start();
}

/**
 * kết thúc buffer, lấy kết quả, chèn vào layout
 */
function end_content() {
    $content = ob_get_clean();
    global $title, $layout;
    include_once($layout);
}

/**
 * chèn thêm path vào url
 * @param $url : không chứa / ở đầu
 * @return string
 */
function url($url) {
    return APPLICATION_PATH.'/'.$url;
}

/**
 * chèn thêm path vào file
 * @param $path : không chứa / ở đầu
 * @return string
 */
function path($path) {
    return APPLICATION_ROOT.'/'.$path;
}