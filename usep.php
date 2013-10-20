<?php header("Content-Type: text/html; charset=utf-8"); ?>
<?php include("userModel.php");?>
<?php include("header.php");?>

<?
$user = getUserByID($_GET['id']);

/*echo "<pre>";
print_r($user);
echo "</pre>";
die;*/

if ( !$user ) { ?>
    <h2>Пользовтаель не найден</h2>
<? } else { ?>
    <h2>Имя: <?php echo $user['name']; ?></h2>
    <h2>Ид: <?php echo $user['id']; ?></h2>
    <h2>Дата регистрации: <?php echo $user['dataReg']; ?></h2>
    <? if ($user['role'] == 'admin') echo "<h2>администратор</h2>"?>
<? } ?>

<a href="index.php">Главная</a>

<?php include("footer.php");?>