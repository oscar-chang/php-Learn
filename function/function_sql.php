<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }
</style>

<?php
include_once "db.php";

dd(all('dept', "id < '3' "));
echo "<hr>";

dd(all('students', "id < '2' "));
echo "<hr>";
// dd(find(3));
// $rows = find(3);
// foreach ($rows as $key) {
//     echo $key .'<br>';
// }

dd(find('students', ['uni_id' => 'F200000035', 'parents' => '孔進豐']));
echo "<hr>";

insert('dept', ['code' => '801', 'name' => '綜合演藝學系']);
dd(q("select * from `students` where `dept`='3'  order by `id` desc limit 5"));
//del('dept', ['name' => '綜合演藝學系']);


?>