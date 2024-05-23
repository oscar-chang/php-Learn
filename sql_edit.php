<!DOCTYPE html>
<html lang="en">
<?php 
$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = NEW PDO($dsn, 'root', '');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯學員</title>
<style>
    div {
        padding: 5px 10px;
        margin: 2px;
    }
    label {
        padding: 5px 10px;
    }
    select {
        padding: 2px;
    }
    .btn {
        padding: 7px 10px;
        margin: 10px;
    }
    input[type="number"] {
        padding: 2px 5px;
    }
    input[type="text"] {
        padding: 2px 5px;
    }

</style>
</head>

<body>
    <?php 
        $user = $pdo->query("select * from `students` where `id`='{$_GET['id']}'")->fetch(PDO::FETCH_ASSOC);
    ?>

    <h1>編輯 <?= $user['school_num']; ?> 學員</h1>

    <?php 
        if (isset($_GET['error'])) {
            echo "<span style='color:red'>";
            echo $_GET['error'];
            echo "</span>";
        }
    ?>
    <form action="sql_update.php" method='post'>
        <div>
            <label for="school_num">學號</label>
            <?= $user['school_num']; ?>
        </div>
        <div>
            <label for="name">姓名</label><input type="text" name="name" id="name" value="<?= $user['name']; ?>">
        </div>
        <div>
            <label for="birthday">生日</label><input type="date" name="birthday" id="birthday" value='<?= $user['birthday']; ?>'>
        </div>
        <div>
            <label for="uni_id">身份證號</label><input type="text" name="uni_id" id="uni_id" value="<?= $user['uni_id']; ?>">
        </div>
        <div>
            <label for="addr">地址</label><input type="text" name="addr" id="addr" value="<?= $user['addr']; ?>">
        </div>
        <div>
            <label for="parents">父母</label><input type="text" name="parents" id="parents" value="<?= $user['parents']; ?>">
        </div>
        <div>
            <label for="tel">電話</label><input type="text" name="tel" id="tel" value="<?= $user['tel']; ?>">
        </div>
        <div>
            <label for="dept">科系</label>
            <select name="dept" id="dept">
                <!-- <option value="1">商業經營科</option>
                <option value="2">國際貿易科</option>
                <option value="3">資料處理科</option>
                <option value="4">幼兒保育科</option>
                <option value="5">美容科</option>
                <option value="6">室內佈置科</option> -->
                <?php 
                $depts = $pdo->query('select * from dept')->fetchAll();
                foreach ($depts as $dept) {
                    /* 個人寫法 */
                    echo "<option value='{$dept['id']}'";
                        if($user['dept'] == $dept['id']) {echo 'selected';}
                    echo ">{$dept['name']}</option>";
                }
            ?>
            </select>
        </div>
        <div>
            <label for="graduate_at">畢業學校</label>
            <select type="text" name="graduate_at" id="graduate_at">
            <?php 
                $schools = $pdo->query('select * from graduate_school')->fetchAll();
                foreach ($schools as $school) {
                    $selected = ($school['id'] == $user['graduate_at']) ? 'selected' : '';
                    echo "<option value='{$school['id']}' $selected>{$school['county']}{$school['name']}</option>";
                }
            ?>
            </select>
        </div>
        <div>
            <label for="status_code">畢業狀態</label>
            <select name="status_code" id="status_code">
                <option value="001" <?= ($user['status_code'] == '001') ? 'selected' : ''; ?>>畢業</option>
                <option value="002" <?= ($user['status_code'] == '002') ? 'selected' : ''; ?>>補校</option>
                <option value="003" <?= ($user['status_code'] == '003') ? 'selected' : ''; ?>>補結</option>
                <option value="004" <?= ($user['status_code'] == '004') ? 'selected' : ''; ?>>結業</option>
            </select>
        </div>
        <input type="hidden" name="id" value="<?= $user['id']; ?>"> 
        <input class="btn" type="submit" value="更新"><input class="btn" type="reset" value="重置">

    </form>

</body>

</html>