<?php

//var_dump($_SERVER);
// EXERCICE 1
/*echo 'User Agent : ' . $_SERVER['HTTP_USER_AGENT'] . '<br>';
echo 'Adresse IP : ' . $_SERVER['REMOTE_ADDR'] . '<br>';
echo 'Server Name : ' . $_SERVER['SERVER_NAME'] . '<br>';*/

session_start();
//EXERCICE 2
//$_SESSION['firstname']= 'ahmed';
//$_SESSION['lastname']= 'namou';
//$_SESSION['age']= 42;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <form action="./traitementFormulaireConnection.php" method="POST">
    <input type="text" name="login">
    <label for="login">Login</label>
    <input type="password" name="password">
    <label for="password">Password</label>
    <button type="submit">Envoyer</button>
   </form>

   <a href="./page2.php">aller a la page 2</a> </br>
   <a href="./modificationCookie.php">Modification Cookie</a>
</body>
</html>