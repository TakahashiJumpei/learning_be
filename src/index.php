<?php 
require_once 'config.php';

// echo $_SERVER['REQUEST_URI'];

require_once SOURCE_BASE . 'partials/header.php';

$rpath = str_replace(BASE_CONTEXT_PATH, '', $_SERVER['REQUEST_URI']);
// echo $rpath;

route($rpath);

function route($rpath){
    if($rpath === ''){
        $rpath = 'home';
    }
    
    $targetFile = SOURCE_BASE . "controllers/{$rpath}.php";
    
    if(!file_exists($targetFile)){
        require_once SOURCE_BASE . "views/404.php";
        return;
    }
    require_once $targetFile;

    

}






// if($_SERVER['REQUEST_URI'] === '/app/src/login'){
//     require_once SOURCE_BASE . 'controllers/login.php';
// }else if($_SERVER['REQUEST_URI'] === '/app/src/register'){
//     require_once SOURCE_BASE . 'controllers/register.php';
// }else if($_SERVER['REQUEST_URI'] === '/app/src/'){
//     require_once SOURCE_BASE . 'controllers/home.php';
// }

require_once SOURCE_BASE . 'partials/footer.php';

?>
