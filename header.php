<div>
    **********************
    <h2>Header</h2>
    <? $user = getUserByID($_GET['id']); if ($user) echo "Привет: ".$user['name']."!</br>" ?>
    **********************
</div>