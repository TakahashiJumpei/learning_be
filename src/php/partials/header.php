<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>みんなのアンケート</title>
    <link rel="stylesheet" href="<?php echo BASE_CSS_PATH ?>sample.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="//fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    use lib\Msg;

    Msg::flush();


    ?>

    <div id="container">
        <header class="container my-2">
            <nav class="row align-items-center py-2">
                <a href="" class="col-md d-flex align-items-center mb-3 mb-md-0">
                    <img width="50" class="mr-2" src="images/logo.svg" alt="みんなのアンケート　サイトロゴ">
                    <span class="h2 font-weight-bold mb-0">みんなのアンケート</span>
                </a>
                <div class="col-md-auto">
                    <a href="" class="btn btn-primary mr-2">登録</a>
                    <a href="">ログイン</a>
                </div>
            </nav>
        </header>