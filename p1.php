<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構練習 2024-04-12</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="header"><h1>P1</h1></div>

<div class="block_margin_35">
    <h3>給定一個成績數字，判斷是否及格(60)分</h3>
        
    <?php
        $score=70;   //可更換任何分數測試結果
        echo "成績為".$score."分";
        echo "<br>";

        $result = '';
        if($score>=60){
            $result="及格";
        }else{
            $result="不及格";
        }

        echo "判斷為".$result;
    ?>

    <h3>分配成績等級</h3>
    <ul>
        <li>0 ~ 59 => E</li>
        <li>60 ~ 69 => D</li>
        <li>70 ~ 79 => C</li>
        <li>80 ~ 89 => B</li>
        <li>90 ~ 100 => A</li>
    </ul>

    <?php 
        $level = '';
        if ($score >= 90 && $score <= 100) {
            $level = 'A';
        }else if($score >= 80){
            $level = 'B';
        }else if($score >= 70){
            $level = 'C';
        }else if($score >= 60){
            $level = 'D';
        }else if($score >= 0){
            $level = 'E';
        }else{
            $level = '成績必須在0~100之間，請重新輸入';
        }
        echo "等級判定為".$level;
        echo "<br>";
    ?>

    <?php 
        $words='';
        $pass_color='green';
        $fail_color='red';
        $tmp='!!!';
        switch ($level) {
            case 'A':
                $words="棒呆";
                break;
            case 'B':
                $words="很好";
                break;
            case 'C':
                $words="不錯";
                break;
            case 'D':
                $words="繼續加油";
                break;
            case 'E':
                $words="糟透了";
                break;
            default:
                # code...
                break;
        }
        echo "<br>";
        if($level == 'A' || $level == 'B' || $level == 'C' || $level == 'D'){
            echo "<span style='color:$pass_color'>";
        }else{
            echo "<span style='color:$fail_color'>";
        }
        echo $words.$tmp;
        echo "</span>";
        echo "<br><br><hr><br><br>";
    ?>

        <div>
        計算輸入的年份是否為閏年，其條件為：
        １.公元年不可被4整除 => 平年。
        ２.公元年可被4整除且不為100整除 => 閏年。
        ３.公元年可被100整除且不為400整除 => 平年，
        <!-- ３.可被400整除 => 閏年。 -->
        <!-- ４.可被1000整除 => 閏年。 -->
        </div><br>

        <?php
        $year = 2800;
        echo "年份為:".$year." = > ";

        //寫法一:
        if($year%4 == 0){
            if($year%100 == 0){
                if($year%400 == 0){
                    echo "是閏年";
                }else{
                    echo "是平年";
                }
            }else{
                echo "是閏年";
            }
        }else{
            echo "是平年";
        }

        //寫法二:
        if($year%4 == 0){
            if($year%100 == 0 && $year%400 != 0){
                    echo "/是平年";
            }else{
                echo "/是閏年";
            }
        }else{
            echo "/是平年";
        }

        //寫法三:
        if(($year%4 == 0 && $year%100 != 0) || $year%400 == 0 ){
            echo "/是閏年";
        }else{
            echo "/是平年";
        }
        echo "<br><br><hr><br><br>";
        ?>

        <div>
            <h3>簡單迴圈練習</h3>
            <ul>
                <ol>1,3,5,7,9....n</ol>
                <ol>10,20,30,40,50,60.....n</ol>
                <ol>3,5,7,11,13,17.....97</ol>
            </ul><br>
        <?php 
            $n = 30;
            for($i=1;$i<$n;$i+=2){
                echo $i.",";
            }
            echo "<br>";

            $n = 120;
            for($i=10;$i<$n;$i+=10){
                echo $i.",";
            }
            echo "<br>";

            $n = 101;
            $count = 0;
            for($i=3;$i<$n;$i++){
                $check=true;  
                for($j=2;$j<=sqrt($i);$j++){    
                    if($i%$j==0){
                        $check=false;
                    }
                    $count++;
                }
                if($check==true){
                    echo $i.",";
                } 
                $count++;
            }
            echo "迴圈次數:".$count;
        ?>
        </div>
        

</div>

</body>
</html>