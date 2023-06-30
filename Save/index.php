<?php
// Définition des variables
$lastname = "ahmed";
$firstname = "namou";
$age = 99;
setcookie('userinfo');
setcookie('userinfo', json_encode($userInfo), time() + 86400, '/', '', true,true); 

// Démarrage de la session
session_start();


$id_session = session_id();

// Stockage des variables dans la session
$_SESSION['lastname'] = $lastname;
$_SESSION['firstname'] = $firstname;
$_SESSION['age'] = $age;
?>

<?php
if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['age'])) {
      $_SESSION['lastname'] = $_post['lastname'];
     $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['age'] = $_POST['age'];
} else {
    // Redirection vers la page d'index si les variables de session ne sont pas définies
    header("Location: index.php");
    exit();
}
if (isset($_COOKIE['user_info'])) {
    $userInfo = json_decode($_COOKIE['user_info'], true);

    $lastname = $userinfo['lastname'];
    $firstname = $userinfo['firstname'];
    $age = $userInfo['age'];
} else {
    $lastname = "";
    $firstname = "";
    $age = "";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Récupérer le Cookie</title>
</head>
<body>
    <h1>Récupérer le Cookie</h1>
    <p>Les informations du cookie sont les suivantes :</p>
    <ul>
        <li>Nom : <?php echo $lastname; ?></li>
        <li>Prénom : <?php echo $firstname; ?></li>
        <li>Âge : <?php echo $age; ?></li>
    </ul>

  

</body>
</html>
