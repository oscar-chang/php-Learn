<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入失敗</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .err_msg {
            color: red;
            font-size: 20px;
            padding: 20px 0px;
        }
    </style>
</head>
<body>
<div class="block_margin_35">
    <h2>帳號或密碼錯誤</h2>
    <?php $acc = $_GET['acc']; ?>
    <div class="err_msg">此 <?= $acc ?> 帳號不存在</div>
    請回<a href="login.php">首頁</a>，重新登入
    </div>
</body>
</html>