<?php
// Définition des variables
$lastname = "Doe";
$firstname = "John";
$age = 25;

// Démarrage de la session
session_start();

// Stockage des variables dans la session
$_SESSION['lastname'] = $lastname;
$_SESSION['firstname'] = $firstname;
$_SESSION['age'] = $age;
?>
<!DOCTYPE html>
<link rel="stylesheet"  href="./style.css">
<html>
<head>
    <title>Page d'index</title>
</head>
<body>
    
    <div class="info">
    <h1> Information Utilisateur</h1>
    <h2> User Agent</h2>
    <?php echo $_SERVER['HTTP_USER_AGENT']; ?>
    <h2> Adresse Ip</h2>
    <?php echo $_SERVER['REMOTE_ADDR']; ?>
    <h2> Nom du serveur</h2>
    <?php echo $_SERVER['SERVER_NAME']; ?>
     </div>
    
     <div class="formule">
        <form class="form" action="./index.php">

        <label for="lastname">lastname :</label>
            <input type="text" id="lastname" name="lastname"><br><br>
            
            <label for="firstname">firstname :</label>
            <input type="text" id="firstname" name="firstname"><br><br>

            <label for="age">age</label>
            <input type="number" id="age" age="age"><br><br>
        </form>
     </div>
     <a href="./user.php">passer a la page user</a>

        
    </ul>
    <form method="POST" action="user.php">
        <label for="login">Login :</label>
        <input type="text" id="login" name="login" required><br>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
<?php
// Démarrage de la session
session_start();

// Vérification et récupération des variables de session
if (isset($_SESSION['lastname']) && isset($_SESSION['firstname']) && isset($_SESSION['age'])) {
    $lastname = $_SESSION['lastname'];
    $firstname = $_SESSION['firstname'];
    $age = $_SESSION['age'];
} else {
    // Redirection vers la page d'index si les variables de session ne sont pas définies
    header("Location: index.php");
    exit();
}
if (isset($_COOKIE['user_info'])) {
    $userInfo = json_decode($_COOKIE['user_info'], true);

    $lastname = $userInfo['lastname'];
    $firstname = $userInfo['firstname'];
    $age = $userInfo['age'];
} else {
    $lastname = "";
    $firstname = "";
    $age = "";
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Créer un tableau associatif avec les informations à stocker dans le cookie
    $userInfo = [
        'login' => $login,
        'password' => $password
    ];

    // Convertir le tableau en JSON
    $userInfoJson = json_encode($userInfo);

    // Stocker les informations dans un cookie
    setcookie('user_info', $userInfoJson, time() + 86400); // Expire après 1 jour

    // Rediriger vers une autre page ou afficher un message de succès
    header("Location: confirmation.php");
    exit();
}
?>
