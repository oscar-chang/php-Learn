<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入成功</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .scucess_msg {
            color: green;
            font-size: 20px;
            padding: 30px 0px;
        }
    </style>
</head>
<body>
<div class="block_margin_35">
    <h2>登入成功</h2>
    <?php
        // session_start();
    ?>
    歡迎 <span class="scucess_msg"><?=$_COOKIE['login'];?></span> 回來

    <p>
        <a href="login.php?">回登入頁</a>
        <br>
        <a href='logout.php'>登出</a>
    </p>
</div>
</body>
</html>