<?php
if(isset($_POST['login']) && $_POST['login'] !==''){
 if(isset($_POST['password']) && $_POST['password'] !==''){
    setcookie('login', $_POST['login'], time()+3600);
    setcookie('password', $_POST['password'],time()+3600);
 }
}


header("Location: ./page2.php");


?>