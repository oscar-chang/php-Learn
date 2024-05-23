
<?php 
$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = NEW PDO($dsn, 'root', '');

$row = $pdo->query("select * from `students` where `id`='{$_GET['id']}'")->fetch(PDO::FETCH_ASSOC);
$response = "?name={$row['name']}&num={$row['school_num']}";


$sql = "DELETE FROM `students` WHERE `id` = '{$_GET['id']}'";

// echo $sql;
$pdo->exec($sql);

header('location:sql_link.php' . $response)

?>
