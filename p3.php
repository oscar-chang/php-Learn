<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>尋找字元(使用while)</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        
    </style>
</head>
<body>
    <div class="header"><h1>尋找字元(使用while)</h1></div>
    <div class="block_margin_35">
        <ul>
            <li>給定一個字串句子</li>
            <li>給定一個單字或字母</li>
            <li>尋找相符的內容</li>
            <li>印出尋找到的單字或是字母所在句子中的位置</li>
        </ul>

        <p>以色列99％攔截伊朗空襲怎做到？解密三大護國神盾</p>

        <?php 
            $str="以色列99％攔截伊朗空襲怎做到？解密三大護國神盾";
            $target="伊朗空襲";
            $position=0;
            
            while($target!=mb_substr($str,$position,mb_strlen($target))){
            /*     echo "p=".$position;
                echo ", substr = ". mb_substr($str,$position,mb_strlen($target));
                echo "<br>"; */
                $position=$position+1;
            
            }

            echo $target."的位置在".$position;
            echo "<br>";
            echo mb_strpos($str,$target);
            echo "<hr>";
        ?>
    </div>
    
</body>
</html>