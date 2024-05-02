<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI 計算器</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        *{
            font-family: 'Courier New', Courier, monospace;
        }
        body {
            width: 80%;
        }
        .block_margin_35 {
            width: 75%;
        }
        table {
            border: 1px black;
            border-collapse: collapse;
        }
        td {
            border: 1px black;
            border-style: groove;
            padding: 2px 7px;
        }

    </style>
</head>
<body>
    <div class="header"><h1>BMI 結果</h1></div>
    <div class="block_margin_35">
        <h2>BMI 計算結果</h2>

        <?php
            // 確認表單傳送正常
            if (!empty($_POST)) {
                echo "[POST方式] <br>";
                if(empty($_POST['height']))
                {
                    echo '請輸入正確的身高';
                }else{
                    echo $_POST['height']."<br>";
                    $height = $_POST['height'];
                }

                if(empty($_POST['weight']))
                {
                    echo '請輸入正確的體重';
                }else{
                    echo $_POST['weight']."<br>";
                    $weight = $_POST['weight'];
                }
            }else{
                echo "[GET方式] <br>";
                if(empty($_GET['height']))
                {
                    echo '請輸入正確的身高';
                }else{
                    echo $_GET['height']."<br>";
                    $height = $_GET['height'];
                }

                if(empty($_GET['weight']))
                {
                    echo '請輸入正確的體重';
                }else{
                    echo $_GET['weight']."<br>";
                    $weight = $_GET['weight'];
                }
            }
            // 進行 BMI 計算
            if(!empty($height) && !empty($weight)){
                $bmi = $weight/(($height/100)*($height/100));
                echo "您的BMI為".round($bmi,2);
            }else {
                echo "請輸入正確的身高與體重";
            }

            echo "<hr>";
            echo "<hr>";
        ?>
    </div>
</body>
</html>