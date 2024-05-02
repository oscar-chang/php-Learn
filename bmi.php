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
    <div class="header"><h1>BMI 計算器</h1></div>
    <div class="block_margin_35">
        <h2>BMI 計算器</h2>

        <form action="bmi_result.php" method='post'>
            <div><label for="height">身高:<input type="number" name="height" id="height"></label></div>
            <div><label for="weight">體重:<input type="number" name="weight" id="weight"></label></div>
            <div><label for=""><input type="submit" value="開始計算"><input type="reset" value="清除重算"></label></div>
        </form>

        <form action="bmi_result.php" method='get'>
            <div><label for="height">身高:<input type="number" name="height" id="height"></label></div>
            <div><label for="weight">體重:<input type="number" name="weight" id="weight"></label></div>
            <div><label for=""><input type="submit" value="開始計算"><input type="reset" value="清除重算"></label></div>
        </form>

        <?php 

            echo "<hr>";
            echo "<hr>";
        ?>
    </div>
</body>
</html>