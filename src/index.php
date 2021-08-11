<?php
require_once 'config.php';

// Library
require_once SOURCE_BASE . 'libs/helper.php';
require_once SOURCE_BASE . 'libs/auth.php';
require_once SOURCE_BASE . 'libs/router.php';

//Models
require_once SOURCE_BASE . 'models/abstract.model.php';
require_once SOURCE_BASE . 'models/user.model.php';

// Message
require_once SOURCE_BASE . 'libs/message.php';

// DB
require_once SOURCE_BASE . 'db/datasource.php';
require_once SOURCE_BASE . 'db/user.query.php';

use function lib\route;

session_start();


try {

    require_once SOURCE_BASE . 'partials/header.php';

    $rpath = str_replace(BASE_CONTEXT_PATH, '', CURRENT_URI);
    $method = strtolower($_SERVER['REQUEST_METHOD']);

    route($rpath, $method);

?>

    <main class="container py-3">
        <h1 class="sr-only">ログイン</h1>
        <div class="my-5">
            <div class="text-center mb-4">
                <img width="65" src="images/logo.svg" alt="みんなのアンケート　サイトロゴ">
            </div>
            <div class="login-form bg-white p-4 shadow-sm mx-auto rounded">
                <form action="">
                    <div class="form-group">
                        <label for="">ユーザーID</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">パスワード</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <a href="">アカウント登録</a>
                        </div>
                        <div>
                            <input type="submit" value="ログイン" class="btn btn-primary shadow-sm">
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </main>
    <footer class="text-center p-3">
        <span class="text-muted"> &copy; CodeMafia</span>
    </footer>

<?php

    require_once SOURCE_BASE . 'partials/footer.php';
} catch (Throwable $e) {

    die('<h1>何かが凄くおかしいようです。</h1>');
}

?>