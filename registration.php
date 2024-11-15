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
    <div class="col-register">
        <h1 class="header-form-reg">Регистрация</h1>
                    
    <form action = "validation-form/check.php" method="post" class="form-register">
                    
    <input type = "text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
    <input type = "text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
    <input type = "password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
    <a class="link1" href=""><button class="btn btn-success-reg" type="submit">Зарегистрироваться</button></a>
    </form> 
    <a href="/login.php"><button class="btn-return-log" id="btn-return-log">У меня уже есть аккаунт</button></a>
  </div>

</div>
</div>
</body>
</html>