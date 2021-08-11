<?php 
require_once 'config.php';
echo $_SERVER['REQUEST_URI'];
if($_SERVER['REQUEST_URI'] === '/app/src/login'){
    require_once 'views/login.php';
}else if($_SERVER['REQUEST_URI'] === '/app/src/register'){
    require_once 'views/register.php';
}else if($_SERVER['REQUEST_URI'] === '/app/src/'){
    require_once 'views/home.php';
}

?>
