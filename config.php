<?php 
$uri = $_SERVER['REQUEST_URI'];
if(preg_match("/(.+)/i", $uri, $match)) {
    echo '定義';
    echo '<br/>';
    define('BASE_CONTEXT_PATH', $match[0] . '');
    echo BASE_CONTEXT_PATH;
}else{
    echo '未定義';
    echo '<br/>';
}

define('BASE_IMAGE_PATH', BASE_CONTEXT_PATH . 'images/');
define('BASE_JS_PATH', BASE_CONTEXT_PATH . 'js/');
define('BASE_CSS_PATH', BASE_CONTEXT_PATH . 'css/');
define('SOURCE_BASE', __DIR__ . '/php/');