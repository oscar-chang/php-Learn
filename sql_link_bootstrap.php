
<html>
<head>
    <title>bootstrap Table</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>




<?php 
$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = NEW PDO($dsn, 'root', '');

$sql = "SELECT * FROM `students` where `id` > 30";
$db = $pdo->query($sql);
$rows = $db->fetchALL();
echo "<pre>";
// print_r($rows);
echo "</pre>";

// var_dump($rows);
?>
<style>
    /* table {
        border: groove;
        border-style: double;
        border-collapse: collapse;
        margin: 0 auto;
    }
    td {
        border: groove;
        border-style: groove;
        border-collapse: collapse;
        border-color: gray;
        border-width: thin;
        padding: 5px 7px;
    } */
    .td-title {
        font-size: 20px;
        font-weight: bold;
        text-align: center;
    }
    .edit-btn {
        color: red;
    }
    .tr_31 {
        color: green;
    }
    .td_school_num {
        color: pink;
    }
    /* tr.tr_37 > td:nth-child(6) {
        color: lightgreen;
    } */
</style>
<a class="btn btn-primary" href="sql_insert.php">新增學員</a>

<?php
if (isset($_GET['name'])) {
    echo "<span style='color:red'>學生";
    echo $_GET['name'] . "({$_GET['num']})";
    echo "已從資料庫移除</span>";
}
?>

<table class="table table-striped">
    <tr>
        <td class="td-title">ID</td>
        <td class="td-title">學號</td>
        <td class="td-title">姓名</td>
        <td class="td-title">Uni_id</td>
        <td class="td-title">地址</td>
        <td class="td-title">家長</td>
        <td class="td-title">電話</td>
        <td class="td-title">科系</td>
        <td class="td-title">畢業學校</td>
        <td class="td-title">畢業狀態</td>
        <td class="td-title">操作</td>
    </tr>
    <?php foreach ($rows as $key) { ?>
    <tr class="tr_<?php echo $key['id']; ?>">
        <td><?php echo $key['id']; ?></td>
        <td class="td_school_num"><?php echo $key['school_num']; ?></td>
        <td><?php echo $key['name']; ?></td>
        <td><?php echo $key['uni_id']; ?></td>
        <td><?php echo $key['addr']; ?></td>
        <td><?php echo $key['parents']; ?></td>
        <td><?php echo $key['tel']; ?></td>
        <td><?php echo $key['dept']; ?></td>
        <td><?php echo $key['graduate_at']; ?></td>
        <td><?php echo $key['status_code']; ?></td>
        <td>
            <a class="btn btn-primary" href="sql_edit.php?id=<?= $key['id']; ?>">編輯</a>
            <a class="btn btn-danger" href="sql_delete.php?id=<?= $key['id']; ?>">刪除</a>
        </td>
    </tr>
    <?php } ?>
</table>


</html>