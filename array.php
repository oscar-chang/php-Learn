<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列</title>
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
    <div class="header"><h1>陣列</h1></div>
    <div class="block_margin_35">
        <h2>陣列</h2>
        <?php 
            $arr_a = ["A","B","C"];
            $arr_b = ["name"=>"Oscar","phone"=>26888888];
            $arr_c = [["A","B","C"],["name"=>"Oscar","phone"=>26888888]];

            print_r($arr_a);
            echo "<hr>";
            print_r($arr_b);
            echo "<hr>";
            $arr_tmp = array_merge($arr_a, $arr_b);
            echo "◆ array_merge ◆ <br><br>";
            print_r($arr_tmp);
            echo "<hr>";

            echo serialize($arr_a);
            echo "<hr>";
            echo serialize($arr_b);
            echo "<hr>";
            echo serialize($arr_c);
            echo "<hr>";


            $a=['Blue','Green','Pink'];
            $tmp=implode(',',$a);
            echo $tmp;
            echo "<hr>";
            $b=explode(",",$tmp);
            print_r($b);

            echo "<hr>";
            echo "<hr>";
        ?>

        <h2>利用程式來產生陣列</h2>

        <ul>
            <li>以迴圈的方式產生一個九九乘法表</li>
            <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
            <li>再以迴圈方式將陣列內容印出</li>
        </ul>
        <?php
        $ninenine=[];
        for($i=1;$i<=9;$i++){
            for($j=1;$j<=9;$j++){
                //echo "$i x $j = ".($i*$j);
                $ninenine[]="$i x $j = ".($i*$j);
            }
        }
        // echo "<pre>";
        // print_r($ninenine);
        // echo "</pre>";

        $x=1;
        foreach ($ninenine as $value) {
            echo $value."|";
            if($x%9 == 0){
                echo "<br>";
            }
            $x++;
        }
        echo "<hr>";

        foreach ($ninenine as $key => $value) {
            echo $value."|";
            if(($key+1) %9 == 0){
                echo "<br>";
            }
        }
        echo "<hr>";

        echo "<table>";
        foreach ($ninenine as $key => $value) {
            if($key %9 == 0){
                echo "<tr>";
            }
            
            echo "<td>".$value."</td>";
            if(($key+1) %9 == 0){
                echo "</tr>";
            }
            
        }
        echo "</table>";
        echo "陣列中有".count($ninenine)."個元素";
        echo "<hr>";
        ?>

        <h2>威力彩電腦選號沒有重覆號碼 (利用while迴圈)</h2>
        <ul>
            <li>亂數產生數字</li>
            <li>迴圈產 6個1~38之間數字</li>
            <li>比較數字</li>
            <li>陣列存放數字(存放比較後 不重覆的數字)</li>
        </ul>

        <?php 
            $lotto = [];
            //   若出現 Warning: Array to string conversion  => 如果是陣列的話 不能用echo 要用 print_r
            while (count($lotto) < 6) { 
                $rand = rand(1,38);  
                if(!in_array($rand,$lotto)){ 
                    $lotto[] = $rand; 
                }
                // in_array(要搜尋的值,被搜尋的陣列);
            }
            // $k = implode(',',$lotto);
            // echo "<br>威力彩號碼為:".$k;
            
            echo "威力彩號碼為:".join(",", $lotto);
            echo "<br><br><hr>";
        ?>

        <?php $end_year = 300; ?>
        <h2>找出 <?php echo $end_year ;?> 年內的閏年</h2>
        <ul>
            <li>請依照閏年公式找出<?php echo $end_year ;?>年內的閏年</li>
            <li>使用陣列來儲存閏年</li>
            <li>使用迴圈來印出閏年</li>
        </ul>
        <?php
            $leaps=[];
            $year=2024;
            for($i=$year;$i<($year+$end_year);$i++){
                if($i%4 == 0 && $i%100!=0 || $i%400==0){
                    $leaps[]=$i;
                }
            }

            echo "<h3>自$year 至".($year+$end_year)."止，有以下閏年：</h3>";
            foreach($leaps as $leap){
                echo $leap;
                echo "<br>";
            }
            echo "<hr>";
            echo "共有".count($leaps)."個閏年";
            echo "<br><br><hr>";
        ?>

        <h2>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)</h2>

        <ul>
            <li>天干：甲乙丙丁戊己庚辛壬癸</li>
            <li>地支：子丑寅卯辰巳午未申酉戌亥</li>
            <li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
        </ul>

        <?php
            $sky=[ 4=>'甲', 5=>'乙', 6=>'丙', 7=>'丁', 8=>'戊', 9=>'己', 0=>'庚', 1=>'辛', 2=>'壬', 3=>'癸' ];
            $land=[ 4=>'子', 5=>'丑', 6=>'寅', 7=>'卯', 8=>'辰', 9=>'巳', 10=>'午', 11=>'未', 0=>'申', 1=>'酉', 2=>'戌', 3=>'亥' ];
            $year=1958;

            echo "西元年".$year;

            $t1=$sky[$year%10];
            $t2=$land[$year%12];

            echo "為$t1$t2 年";

        ?>

        <?php
            // $arr_score = ["Student"=>
            //                     [,
            //                 "Suject"=>"國文",
            //                     "Score"=>"95"
            //                     ],
            //                     ["Nmae"=>"judy",
            //                 "Suject"=>"國文",
            //                     "Score"=>"95"
            //                     ],
        
            //             ];

            echo "<hr>";
            echo "<hr>";

            $Student_a = ["國文"=>40,"英文"=>100,"數學"=>50,"地理"=>70,"歷史"=>100];
            $Student_b = ["國文"=>40,"英文"=>85,"數學"=>30,"地理"=>95,"歷史"=>90];
            $Student_c = ["國文"=>40,"英文"=>66,"數學"=>50,"地理"=>70,"歷史"=>91];

            $arr_student = ["0"=>["Nmae"=>"judy","Suject"=>"國文","Score"=>"95"],"1"=>["Nmae"=>"amo","Suject"=>"國文","Score"=>"95"],"2"=>["Nmae"=>"andy","Suject"=>"國文","Score"=>"95"]];
            // print_r($arr_student);
            echo "<table>";
            foreach ($arr_student as $key) {
                echo "<tr>";
                foreach ($key as $keys => $value) {
                    
                    echo "<td>";
                    echo $keys.":".$value."<br>";
                    echo "</td>";
                    
                }
                echo "</tr>";
            }
            echo "</table>";
            echo "<hr>";
            echo "<hr>";

            echo "<hr>";
            ?>
            <div>學生 : <br>
            $a = ['judy', 'amo', 'john', 'peter', 'hebe'];</div><br>
            <div>科目=> 成績 <br>
            $b = [</div>
            <div>'國文' => [95, 88, 45, 59, 71],</div>
            <div>'英文' => [64, 78, 60, 32, 62],</div>
            <div>'數學' => [70, 54, 68, 77, 80],</div>
            <div>'地理' => [90, 81, 70, 54, 62],</div>
            <div>'歷史' => [84, 71, 62, 42, 64],</div>
            <div>];</div><br>

            <?php
            $a = ['judy', 'amo', 'john', 'peter', 'hebe'];

            $b = [
                '國文' => [95, 88, 45, 59, 71],
                '英文' => [64, 78, 60, 32, 62],
                '數學' => [70, 54, 68, 77, 80],
                '地理' => [90, 81, 70, 54, 62],
                '歷史' => [84, 71, 62, 42, 64],
            ];
        
            echo '<table border="1">';
            echo '<tr><th>姓名</th>';
            foreach (array_keys($b) as $subject) {   //遍歷 $b 陣列的鍵（學科），並將每個學科作為表頭印出
                echo '<th>' . $subject . '</th>';
            }
            echo '</tr>';

            // $isFirstRow = true; // 判斷是否第一列
            foreach ($a as $index => $name) {   //遍歷學生姓名的陣列 $a，每次迭代取得學生的姓名和索引
                echo '<tr>';
                echo '<td>' . $name . '</td>';   //印出該學生的姓名
                foreach ($b as $subject => $scores) {   //遍歷每個學科和相對應的成績陣列
                    echo '<td>' . $scores[$index] . '</td>';   //印出該學生在該學科的成績
                }
                echo '</tr>';
                //$isFirstRow = false; // 將第一列標誌設置為 false
            }
            echo '</table>';

        ?>

        <h2>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h2>
        <ul>
            <li> 例: $a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2] </li>
        </ul>

        <?php 
            $a = [2,4,6,1,8];
            echo "原陣列為:[".join(',',$a)."]<br>";
            for ($i=0;$i<ceil(count($a)/2);$i++){
                $tmp=$a[$i];
                $a[$i]=$a[count($a)-1-$i];
                $a[count($a)-1-$i]=$tmp;
                // count($a)-1-$i
                // a[0]   a[4]  5-1-0
                // a[1]   a[3]  5-1-1
                // a[2]   a[2]  5-1-2
                // a[3]   a[1]  5-1-3
                // a[4]   a[0]  5-1-4
            }

            echo "交換後:[".join(',',$a)."]<br>";

            echo "交換後:[".join(',',array_reverse($a))."]<br>";  //反轉涵式
            echo "<hr>";
            echo "<hr>";
        ?>

        <h2>字串取代 str_replace</h2>
        <ul>
            <li> 將 sdwrjq32154 改成 *********** </li>
        </ul>
        <?php 
            $x = "sdwrjq32154";

            // 方法一
            $x = str_replace(['s','d','w','r','j','q','3','2','1','5','4',],'*',$x);
            echo $x."<br>";

            // 方法二
            for ($i=0; $i < mb_strlen($x); $i++) { 
                $x = str_repeat('*',mb_strlen($x));
            }
            echo $x."<br>";
            echo "<hr>";
            echo "<hr>";
        ?>

        <h2>字串分割 (explode)</h2>
        <ul>
            <li> 將 this is a book 切割後成為陣列 </li>
        </ul>
        <?php 
            $s = 'this is a book';
            $result = explode(" ",$s);
            echo "<pre>";
            print_r($result);
            echo "</pre>";
            echo "<hr>";
            echo "<hr>";
        ?>

        <h2>字串組合 (join)</h2>
        <ul>
            <li> 將 上例陣列重新組合成 this,is,a,book </li>
        </ul>
        <?php 
            $result = join(",",$result);
            echo "<pre>";
            print_r($result);
            echo "</pre>";
            echo "<hr>";
            echo "<hr>";
        ?>

        <h2>子字串取用 (mb_substr)</h2>
        <ul>
            <li> 將 The reason why a great man is man. 只取前十字成為 The reason... </li>
        </ul>
        <?php 
            $x = 'The reason why a great man is man.';
            $x = mb_substr($x,0,10); // mb_substr($x,0,10,"UTF-8")
            echo $x."...<br>";

            // mb_substr 一個中文字算三個字元,當字元不夠顯示完整的中文字時,產生亂碼並無法顯示後面的部分
            $y = '凌晨14起地震！花蓮外海一分鐘連兩震全台有感 氣象署：非4/3餘震';
            $y = substr($y,0,20);
            echo $y."...<br>";
            echo "<hr>";
            echo "<hr>";
        ?>


        <h2>尋找字串與HTML、CSS整合應用</h2>
        <ul>
            <li> 學會PHP網頁程式設計，薪水加倍 </li>
        </ul>
        <?php 
            $key = '薪水';
            $color = 'red';
            $size = '30px';
            $x = "學會PHP網頁程式設計，薪水加倍";
            $x = str_replace($key,"<sapn style='color:$color;font-size:$size;'>$key</span>",$x);
            echo $x;
            echo "<hr>";
      
        ?>
    </div>
</body>
</html>