<?php
$login = filter_var(trim($_POST['login']));
$pass = filter_var(trim($_POST['pass']));

$pass = md5($pass."qwertyz123");

require ('connect.php');

$resultlog = $mysql->query("SELECT*FROM `users` WHERE `login` = '$login'");
$resultpass = $mysql->query("SELECT*FROM `users` WHERE `pass` = '$pass'");
$valuelog = mysqli_fetch_assoc($resultlog);
$valuepass = mysqli_fetch_assoc($resultpass);
if($valuelog == false) {
    echo "Неверный логин";
    exit();
};
if($valuepass == false) {
    echo "Неверный пароль";
    exit();
};

setcookie('user', $user['name'], time() + 3600, "/");

$mysql -> close();
header('Location: ../my-orders.php');
?>