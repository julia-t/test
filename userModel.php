<?php

function getUsers() {
    $sql = "SELECT * FROM users";
    $connection = mysql_connect("localhost", "root", "")
    or exit("Ошибка соединения с сервером базы данных!");
    //Выбираем базу данных
    $db = mysql_select_db("mydb", $connection)
    or exit("Ошибка соединения с базой данных!");
    //Осуществляем выборку
    $result = mysql_query($sql);
    //Закрываем соединение
    mysql_close($connection);
    $users = array();
    while ( $row = mysql_fetch_array($result)) {
        $users[] = $row;
    }
    return $users;
}

function addUser($name) {
    $sql = "INSERT INTO `users` (`name` ,`role` ) VALUES ('".$name."', 'user')";
    $connection = mysql_connect("localhost", "root", "")
    or exit("Ошибка соединения с сервером базы данных!");
    //Выбираем базу данных
    $db = mysql_select_db("mydb", $connection)
    or exit("Ошибка соединения с базой данных!");
    //Осуществляем выборку
    $result = mysql_query($sql);
    return $result;
}

function getUserByID($id) {
    $sql = "SELECT * FROM users where id = ".$id;
    $connection = mysql_connect("localhost", "root", "")
    or exit("Ошибка соединения с сервером базы данных!");
    //Выбираем базу данных
    $db = mysql_select_db("mydb", $connection)
    or exit("Ошибка соединения с базой данных!");
    //Осуществляем выборку
    $result = mysql_query($sql);
    mysql_close($connection);
    if ($result) {
        $res = mysql_fetch_array($result);
    } else {
        $res = false;
    }
    return $res;
}

