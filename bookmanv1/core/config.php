<?php
// bằng '' nếu app nằm trực tiếp trong document root
// bằng '/folder' nếu nằm trong thư mục folder
define('APPLICATION_PATH', '/bookmanv1');
define('_P_', APPLICATION_PATH);
define('APPLICATION_ROOT', $_SERVER['DOCUMENT_ROOT'].APPLICATION_PATH);
define('_R_', APPLICATION_ROOT);
define('APPLICATION_NAME', 'Bookman V1');
define('DEFAULT_LAYOUT', 'layout.php');