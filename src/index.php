<?php 
require_once 'config.php';

// echo $_SERVER['REQUEST_URI'];

// Library
require_once SOURCE_BASE . 'libs/helper.php';
require_once SOURCE_BASE . 'libs/auth.php';

//Models
require_once SOURCE_BASE . 'models/user.model.php';

// DB
require_once SOURCE_BASE . 'db/datasource.php';
require_once SOURCE_BASE . 'db/user.query.php';

session_start();


// use db\UserQuery;
// $result = UserQuery::fetchById('test');
// var_dump($result);


require_once SOURCE_BASE . 'partials/header.php';

$rpath = str_replace(BASE_CONTEXT_PATH, '', CURRENT_URI);
// echo $rpath;
$method = strtolower($_SERVER['REQUEST_METHOD']);
// echo $method;

route($rpath, $method);

function route($rpath, $method){
    if($rpath === ''){
        $rpath = 'home';
    }
    
    $targetFile = SOURCE_BASE . "controllers/{$rpath}.php";
    
    if(!file_exists($targetFile)){
        require_once SOURCE_BASE . "views/404.php";
        return;
    }
    require_once $targetFile;

    $fn = "\\controller\\{$rpath}\\{$method}";

    $fn();

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
