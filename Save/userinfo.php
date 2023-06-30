<?php
session_start();



if(isset($_SESSION['user_info'])){
    $userinfo = $_SESSION['user_info'];
    echo "non utilisateur de la session: " . $_SESSION['lastname'] .'<br/>';
    echo "prenom de l'utilisateur: ". $_SESSION['firstname'] . '<br/>';
    echo "age: " . $_SESSION['age'];
} else {
    echo "la session n'existe pas";
}

if (isset($_COOKIE['user_info'])) {
    $userinfo_cookie = $_COOKIE['user_info'];

    $lastname = $userinfo['lastname'];
    $firstname = $userinfo['firstname'];
    $age = $userinfo['age'];
    echo "nom du cookie: " . $_COOKIE;
} else {
    $lastname = "";
    $firstname = "";
    $age = "";
}
?>