<?php 

include 'includes/header-nav.php';
include 'includes/sidebar.php';

 ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="../styles/authorization.css">
    <link rel="stylesheet" href="../styles/adaptive.css">
    
   </head>
<body>

<div class="container">
    <div class="row">
    <div class="col-register">
        <h1 class="header-form-reg">Регистрация</h1>
                    
    <form action = "validation-form/check.php" method="post" class="form-register">
                    
    <input type = "text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
    <input type = "text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
    <input type = "password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
    <a class="link1" href=""><button class="btn btn-success-reg" type="submit">Зарегистрироваться</button></a>
    </form> 
  </div>

  <div class="col-login">
     <h1 class="header-form-log">Авторизация</h1>
     <form action="validation-form/auth.php" method="post">
     <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
     <input type = "password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
     <a class="link1" href="/add.html"><button class="btn btn-success-log" type="submit">Авторизоваться</button></a>       
     </form>
   </div>
</div>
</body>
</html>