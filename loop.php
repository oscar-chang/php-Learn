<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOP</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="header"><h1>LOOP</h1></div>

<div class="block_margin_35">
    <h3> For </h3> <mark> => 條件: for ($i=0; $i < 10; $i++) </mark><br><br>
    <?php 
    $i = 0;
    echo "原始i=".$i."<br>";
    for ($i=0; $i < 10; $i++) { 
        echo "條件符合繼續跑=>".$i*1;
        echo "<br>";
    }

    echo "<br>";
    echo "最後i為:".$i;
    ?>
    <hr>

    <h3> WHILE </h3> <mark> => 條件: while ($score < 60) </mark><br><br>
    <?php 
    $score = 10;
    echo "原始成績=".$score."<br>";
    while ($score < 60) {
        $score = $score+10;
        echo "條件符合繼續調整+10=>".$score."<br>";
    }
    echo "<br>";
    echo "調整結果=".$score;
    ?>
    <hr>

    <h3> foreach </h3> <mark> => 列出陣列值</mark><br><br>
    <?php 
    $scores['A'] = 60;
    $scores['B'] = 90;
    $scores['C'] = 80;
    $scores['D'] = 40;
    foreach ($scores as $name => $score) {
        echo "$name score is $score\n  <br>";
    } 
    ?>
    <hr>


    <h3> 巢狀結構 </h3> <mark> => </mark><br><br>
    <?php 
    $show=false;

    for($i=0 ; $i<10 ; $i++){
        echo $i*10;
    
        if($i>5 && $show==false){  //注意 判斷式要用 ==
            echo "<br>";
            echo "執行一半了...";
            $show=true;
        }
        echo "<br>";
    }
    echo "<br>";

    //if中只放變數的應用
    $a=true;
    if($a){
        echo "TRUE";
    }else{
        echo "FALSE";
    }
    ?>
    <hr>

    <!-- <h3>  </h3> <mark> => </mark><br><br> -->
    <!--?php 

    ?-->
    <hr>
</div>

</body>
</html>