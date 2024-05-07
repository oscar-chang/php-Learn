<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <link rel="stylesheet" href="../css/style.css">
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
        h2 {
            text-align:center;
        }
        form {
            width: 50%;
            margin: 0 auto;
            border-style: double;
            padding: 15px 15px;
        }
        .form_div {
            width: 80%;
            margin: 20px auto;
            text-align: center;
        }
        input {
            padding: 5px 7px;
            width: 70%;
        }
        .login_div {
            margin: 10px auto;
            width: 50%;
            text-align:center;
        }
        #submit, #reset {
            padding: 5px 7px;
            width: 80px;
        }
        .scucess_msg {
            color: green;
            font-size: 20px;
            padding: 30px 0px;
            text-align: center;
            margin: 0 auto;
            display: block;
        }
        .err_msg {
            color: red;
            font-size: 20px;
            padding: 20px 0px;
            font-size: 16px;
            display: block;
            text-align: center;
        }
    </style>

    </style>
</head>
<body>
    <!-- <div class="header"><h1>Login</h1></div> -->
    <div class="block_margin_35">
        <h2>Login</h2>

        <?php 
        // session_start();
        // if (isset($_SESSION['login']) && $_SESSION['login'] != '' ) {
        //     echo "<span class='scucess_msg'>已登入</span>";
        //     echo "<br>";
        //     echo "<a href='logout.php'>登出</a>";
        // }else {
        //     echo "<span class='err_msg'>帳號或密碼錯誤</span>";
        // }
        ?>

        <form action="./cookie/check.php" method='post'>
            <div class="form_div">
                <label for="height">帳號:
                    <input type="text" name="account" id="account">
                </label>
            </div>
            <div class="form_div">
                <label for="weight">密碼:
                    <input type="password" name="password" id="password">
                </label>
            </div>
            <div class="form_div login_div">
                <label for="">
                    <?php 
                        if (isset($_COOKIE['login']) && $_COOKIE['login'] =='admin' ) {
                            echo "<span class='scucess_msg'>已登入</span>";
                            echo "<br>";
                            echo "<a href='logout.php'>登出</a>";
                        }else {
                            if(isset($_COOKIE['error'])){
                                echo "<span class='err_msg'>{$_COOKIE['error']}</span><br>";
                                echo "<input type='submit' id='submit' value='登入'>";
                                echo "<input type='reset' id='reset' value='重新輸入'>";
                            }
                        }
                    ?>
                </label>
            </div>
        </form>

        <!-- <form action="bmi_result.php" method='get'>
            <div><label for="height">身高:<input type="number" name="height" id="height"></label></div>
            <div><label for="weight">體重:<input type="number" name="weight" id="weight"></label></div>
            <div><label for=""><input type="submit" value="開始計算"><input type="reset" value="清除重算"></label></div>
        </form> -->

        <?php 

            echo "<hr>";
            echo "<hr>";
        ?>
    </div>
</body>
</html>