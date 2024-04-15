<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程結構練習 2024-04-15</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        td {
            border: gray;
            border-width: 2px;
            border-style: dashed;
            padding: 5px 7px;
        }
        table {
            border-collapse: collapse;
            /* border: gray;
            border-width: 2px;
            border-style: dashed; */
        }

        #grid tr:nth-child(1) {
            background-color: lightgray;
        }

        #grid td:nth-child(1) {
            background-color: lightgray;
        }

        #grid2 tr:nth-child(1) {
            background-color: pink;
        }

        #grid2 td:nth-child(1) {
            background-color: pink;
        }
        .block_margin_35 {
            width: 63%;
        }
    </style>
</head>
<body>

    <div class="header"><h1>九九乘法表</h1></div>
    <div class="block_margin_35">
        <h1>九九乘法表-簡單</h1>
        <tr>
        <?php   
            for($x=1;$x<=9;$x++){
                $check = false;
                for($i=1;$i<=9;$i++){
                    if(strlen($i*$x)=='2'){
                        $spaces = '';
                    }else{
                        $spaces = '0';
                    }
                        echo $i." x " . $x . " = {$spaces}" . ($i*$x);
                    if($i==9){
                        $check = true;
                    }
                    if($check == false){
                        echo ", ";
                    }
                }
                echo "<br>";
            }
            // for($i=1;$i<=9;$i++){
            //     echo "2 x " . $i . " = " .($i*2);
            //     echo ",";
            // }
            // echo "<br>";

            echo "<hr>";

            echo "<table>";
                for($x=1;$x<=9;$x++){
                    echo "<tr>";
                    $check = false;
                    for($i=1;$i<=9;$i++){
                        echo "<td>";
                        if(strlen($i*$x)=='2'){
                            $spaces = '';
                        }else{
                            $spaces = '';
                        }
                            echo $i." x " . $x . " = {$spaces}" . ($i*$x);
                        if($i==9){
                            $check = true;
                        }
                        if($check == false){
                            //echo ", ";
                        }
                        echo "</td>";
                    }
                    echo "</td>";
                }
            echo "</table>";
        ?>
        </tr>

        <h1>九九乘法表-困難 (練習)</h1>
        <?php 
            echo "<table id='grid'>";
            echo "<tr>";
                for ($j=0; $j < 10; $j++) { 
                    echo "<td>".$j."</td>";
                }
                for($x=1;$x<=9;$x++){
                    echo "<tr>";
                    $check = false;
                    for($i=0;$i<=9;$i++){
                        if($i == 0){   //去除0 => $x == 0 && $i == 0
                            echo "<td>".$x."</td>";
                        }else{
                            echo "<td>";
                            echo $i*$x;
                            echo "</td>";
                        }
                    }
                    echo "</td>";
                }
            echo "</tr>";
            echo "</table>";
            echo "<hr>";
        ?>

        <?php 
            echo "<table id='grid2'>";
            for($x=0;$x<=9;$x++){
                echo "<tr>";
                for($i=0;$i<=9;$i++){
                    if(($x == 0 && $i == 0) || ($x!=0 && $i>$x)){  //階梯式主要判斷
                        echo "<td>";
                        echo '';
                        echo "</td>";
                    }else{
                        if($i == 0){
                            echo "<td>".$x."</td>";
                        }else{
                            echo "<td>";
                            echo $i*$x;
                            echo "</td>";
                        }
                    }
                }
                echo "</td>";
            }
            echo "</table>";
        ?>

        <h2>九九乘法表-棋盤式表格(老師版)</h2>
        <?php
        echo "<table id='grid'>";
        for($j=0;$j<=9;$j++){
            echo "<tr>";
            for($i=0;$i<=9;$i++){
                echo "<td>";
                if($j==0 && $i==0){
                    echo " ";
                }else if($j==0){
                    echo $i;
                }else if($i==0){
                    echo $j;
                }else{
                    echo ($j * $i);
                }
                /* if($i*$j!=0){
                    echo $i*$j;
                }else if($j==0 && $i!=0){
                    echo $i;
                }else if($j!=0 && $i==0){
                    echo $j;
                }else{
                    echo " ";
                } */
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        ?>
        <h2>九九乘法表-階梯式表格(老師版)</h2>
        <?php
        echo "<table id='grid'>";
        for($j=0;$j<=9;$j++){
            echo "<tr>";
            for($i=0;$i<=9;$i++){
                echo "<td>";
                if(($j==0 && $i==0) || ($j!=0 && $i>$j)){
                    echo " ";
                }else if($j==0){
                    echo $i;
                }else if($i==0){
                    echo $j;
                }else{
                    echo ($j * $i);
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
</body>
</html>