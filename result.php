<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入成功</title>
    <link rel="stylesheet" href="./css/style.css">
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
        $acc = $_GET['acc'];
    ?>
    歡迎 <span class="scucess_msg"><?= $acc ?></span> 回來

    <?php 
        header('location:login.php?login=1');
    ?>
</div>
</body>
</html>