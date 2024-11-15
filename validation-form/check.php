<?php
   $login = htmlspecialchars(filter_var(trim($_POST['login'])));
   $name = htmlspecialchars(filter_var(trim($_POST['name'])));
   $pass = htmlspecialchars(filter_var(trim($_POST['pass'])));
   if(mb_strlen($login)<5 || mb_strlen($login)> 90){
    echo "Неверная длина логина";
    exit();
   }
   if(mb_strlen($name)<3 || mb_strlen($name)> 50)
   {
    echo "Неверная длина имени";
    exit();
   }
   if(mb_strlen($pass)<8 || mb_strlen($pass)> 10){
    echo "Неверная длина пароля";
    exit();
   }
   $pass = md5($pass."qwertyz123");
   require ('connect.php');
   $mysql ->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");

   $mysql -> close();
   header('Location: /index.php');
?>