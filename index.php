<?php header("Content-Type: text/html; charset=utf-8"); ?>
<?php include("userModel.php");?>
<?php include("header.php");?>

<table>
    <tr>
        <td>Номер</td>
        <td>Имя</td>
        <td>Роль</td>
        <td>URL</td>
    </tr>
    <?
    if ($_GET['regname']) {
        $add = addUser($_GET['regname']);
        if ($add) {
            echo "<h2>Пользователь добавлен<h2/>";
        } else {
            echo "<h2>Ошибка<h2/>";
        }
    }
    ?>
<?php
$persons = getUsers();
foreach ($persons as $key => $row) {?>
    <tr>
        <td><b><?=$row['id']?></b></td>
        <td><?=$row['name']?></td>
        <td>
            <? if ($row['role'] == 'admin') {?>
                администратор
            <? } else {?>
                пользователь
            <? } ?>
        </td>
        <td><a href="usep.php?id=<?=$row['id']?>">ссылка</a></td>
    </tr>
<?php }?>
</table>

<h2>Всего пользователей: <?=count($persons)?></h2>

<form>
    <input type="text" name="regname">
    <input type="submit" value="reg">
</form>



<?php include("footer.php");?>
