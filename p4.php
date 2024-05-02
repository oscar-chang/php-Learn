<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>畫星星</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        *{
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    <div class="header"><h1>畫星星</h1></div>
    <div class="block_margin_35">
        <?php 
            $stars=9;  //設定星星數量
        ?>

        <h2>直角三角形</h2>
        <?php 
            for ($i=0; $i < $stars; $i++) { //外圈 行
                for ($j=0; $j <= $i; $j++) { 
                    echo "*";
                } 
                echo "<br>";
            }
        ?>

        <h2>倒直角三角形</h2>
        <?php 
            for ($i=$stars; $i > 0; $i--) { //外圈 行
                for ($j=0; $j < $i; $j++) { 
                    echo "*";
                } 
                echo "<br>";
            }
        ?>

        <h2>正三角形</h2>
        <?php 
            for ($i=0; $i < $stars; $i++) { //外圈 行
                for ($k=0; $k < $stars-1-$i; $k++) {  // $stars 9  9-1-0 = 8 / $stars 9  9-1-1 = 7 / $stars 9  9-1-2 = 6 計算空白 
                    //echo "&nbsp&nbsp";  如果沒有設定  font-family: 'Courier New', Courier, monospace; 的寫法
                    echo "&nbsp;";
                }
                for ($j=0; $j < $i*2+1; $j++) {            
                    echo "*";
                } 
                echo "<br>";
            }
        ?>

        <h2>菱形</h2>
        <?php 
            // 方法一
            /* 印正三角 */
            for ($i=0; $i < $stars; $i++) { //外圈 行
                for ($k=0; $k < $stars-1-$i; $k++) {  // $stars 9  9-1-0 = 8 / $stars 9  9-1-1 = 7 / $stars 9  9-1-2 = 6 計算空白 
                    //echo "&nbsp&nbsp";  如果沒有設定  font-family: 'Courier New', Courier, monospace; 的寫法
                    echo "&nbsp;";
                }
                for ($j=0; $j < $i*2+1; $j++) {            
                    echo "*";
                } 
                echo "<br>";
            }
            /* 印倒三角 */
            for ($i=$stars-1; $i > 0; $i--) { //外圈 行
                for ($k=0; $k < $stars-$i; $k++) {
                    echo "&nbsp;";
                }
                for ($j=0; $j < $i*2-1; $j++) { 
                    echo "*";
                } 
                echo "<br>";
            }
        ?>

        <?php 
            // 方法二
            // $stars = 9;
            $odd = ($stars%2==0)?$stars+1:$stars;
            $mid = (($odd+1)/2)-1;
            for ($i=0; $i < $stars; $i++) { 
                if($i<=$mid){
                    $tmp=$i;
                }else{
                    $tmp=$tmp-1;
                }
                for ($k=0; $k < $mid-$tmp; $k++) { 
                    echo "&nbsp;";
                }
                for ($j=0; $j < $tmp*2+1; $j++) { 
                    echo "*";
                } 
                echo "<br>";
            }
        ?>

        <h2>矩形</h2>
        <?php 
            for ($i=0; $i < $stars; $i++) { //外圈 行
                // 我的寫法 
                if($i == 0 || $i == $stars-1){
                    for ($j=0; $j < $stars; $j++) {            
                        echo "*";
                    } 
                }else{
                    for ($j=0; $j < $stars; $j++) {    
                        if($j == 0 || $j == $stars-1){       
                            echo "*";
                        }else{
                            echo "&nbsp;";
                        }
                    } 
                }
                echo "<br>";
            }

            //老師寫法
            for ($i=0; $i < $stars; $i++) { //外圈 行
                for ($j=0; $j < $stars; $j++) { 
                    if($i == 0 || $i == $stars-1){
                        echo "*";
                    }else if($j == 0 || $j == $stars-1){
                        echo "*";
                    }else{
                        echo "&nbsp;";
                    }
                }
                echo "<br>";
            }
        ?>

        <h2>矩形含對角線</h2>
        <?php 
            //我的寫法
            for ($i=0; $i < $stars; $i++) {
                if($i == 0 || $i == $stars-1){
                    for ($j=0; $j < $stars; $j++) {            
                        echo "*";
                    } 
                }else{
                    for ($j=0; $j < $stars; $j++) {    
                        if($j == 0 || $j == $stars-1 || $i + $j == $stars-1 || $j == $i){       
                            echo "*";
                        }else{
                            echo "&nbsp;";
                        }
                    } 
                }
                echo "<br>";
            }

            // 老師寫法
            for($i=0;$i<$stars;$i++){
        
                for($j=0;$j<$stars;$j++){
                    if($i==0 || $i==$stars-1){
                        echo "*";
                    }else if($j==0 || $j==$stars-1 || $j==$i || $j==($stars-1-$i)){
                        echo "*";
                    }else{
                        echo "&nbsp;";
                    }
        
                }
                echo "<br>";
            }
            // 老師寫法等同於以下
            // for($i=0;$i<7;$i++){
            //     for($j=0;$j<7;$j++){
            //         if($i==0 || $i==6){
            //             echo "*";
            //         }else if($j==0 || $j==6 || $j==$i || $j==(6-$i)){
            //             echo "*";
            //         }else{
            //             echo "&nbsp;";
            //         }
            //     }
            //     echo "<br>";
        
            // }
        ?>
    </div>
</body>
</html>