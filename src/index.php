<?php 
require_once 'config.php';

// echo $_SERVER['REQUEST_URI'];

require_once SOURCE_BASE . 'partials/header.php';

if($_SERVER['REQUEST_URI'] === '/app/src/login'){
    require_once SOURCE_BASE . 'controllers/login.php';
}else if($_SERVER['REQUEST_URI'] === '/app/src/register'){
    require_once SOURCE_BASE . 'controllers/register.php';
}else if($_SERVER['REQUEST_URI'] === '/app/src/'){
    require_once SOURCE_BASE . 'controllers/home.php';
}

require_once SOURCE_BASE . 'partials/footer.php';

?>
