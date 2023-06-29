<?php
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
