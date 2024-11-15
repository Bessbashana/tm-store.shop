<?php 

include 'includes/header-nav.php';
include 'includes/burger-menu.php';
include 'includes/sidebar.php';
 ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta data-rh="true" name="MobileOptimized" content="176">
    <meta http-equiv="X-UA-Compatible">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../styles/authorization.css">
   </head>
<body>
<div class="container-1">
    <div class="row">
  <div class="col-login">
     <h1 class="header-form-log">Авторизация</h1>
     <form action="validation-form/auth.php" method="post">
     <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
     <input type = "password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
     <a class="link1" href="/add.html"><button class="btn btn-success-log" type="submit">Авторизоваться</button></a>       
     </form>
     <a href="/registration.php"><button class="btn-return-reg" id="btn-return-reg">У меня еще нет аккаунта</button></a>
   </div>
</div>
</div>
</body>
</html>